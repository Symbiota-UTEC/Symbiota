<?php
declare(strict_types=1);

include_once(__DIR__ . '/../config/symbini.php');

$autoload = $SERVER_ROOT . '/vendor/autoload.php';
if (file_exists($autoload)) {
    require_once $autoload;
} else {
    throw new RuntimeException('Composer autoload no encontrado: ' . $autoload);
}

use Aws\S3\S3Client;

function upload_collection_image(array $file, string $collID, string $catalogNumber): array {
    global $S3_ENDPOINT, $S3_REGION, $S3_BUCKET, $S3_ACCESS_KEY, $S3_SECRET_KEY, $S3_PATH_STYLE;

    if (!class_exists('\Aws\S3\S3Client')) {
        throw new RuntimeException('AWS SDK no disponible');
    }

    if (!isset($file['tmp_name'], $file['error']) || $file['error'] !== UPLOAD_ERR_OK) {
        $code = $file['error'] ?? 'n/a';
        throw new RuntimeException('Archivo inválido o con error (code: '.$code.')');
    }

    $collID = preg_replace('/[^A-Za-z0-9_\-\.]/', '_', trim($collID));
    $catalogNumber = preg_replace('/[^A-Za-z0-9_\-\.]/', '_', trim($catalogNumber));
    if ($collID === '' || $catalogNumber === '') {
        throw new RuntimeException('collID/catalogNumber requeridos');
    }

    $tmpPath    = $file['tmp_name'];
    $origName   = $file['name'] ?? 'upload';
    $clientType = $file['type'] ?? '';

    $map = [
        'image/png'  => 'png',
        'image/jpeg' => 'jpg',
        'image/jpg'  => 'jpg',
        'image/pjpeg'=> 'jpg',
        'image/webp' => 'webp',
        'image/gif'  => 'gif',
    ];

    $mime = null;
    if (function_exists('finfo_open')) {
        $f = finfo_open(FILEINFO_MIME_TYPE);
        if ($f) { $mime = finfo_file($f, $tmpPath) ?: null; finfo_close($f); }
    }
    if (!$mime && $clientType) $mime = $clientType;

    $ext = $map[$mime] ?? null;
    if (!$ext) {
        $e = strtolower(pathinfo($origName, PATHINFO_EXTENSION));
        if (in_array($e, ['png','jpg','jpeg','webp','gif'], true)) {
            $ext  = $e === 'jpeg' ? 'jpg' : $e;
            $mime = $mime ?: ($ext === 'jpg' ? 'image/jpeg' : ($ext === 'png' ? 'image/png' : ($ext === 'webp' ? 'image/webp' : 'image/gif')));
        } else {
            throw new RuntimeException('El archivo no parece ser una imagen soportada');
        }
    }

    $client = new S3Client([
        'version' => 'latest',
        'region'  => $S3_REGION ?: 'us-east-1',
        'endpoint'=> $S3_ENDPOINT ?: 'http://minio:9000',
        'use_path_style_endpoint' => ($S3_PATH_STYLE === true || $S3_PATH_STYLE === 'true' || $S3_PATH_STYLE === 1 || $S3_PATH_STYLE === '1'),
        'credentials' => [
            'key'    => $S3_ACCESS_KEY ?: '',
            'secret' => $S3_SECRET_KEY ?: '',
        ],
    ]);

    $bucket = $S3_BUCKET ?: 'symbiota-images';
    $timestamp = date('YmdHis');
    $key = "collections/{$collID}/{$catalogNumber}_{$timestamp}.{$ext}";

    $res = $client->putObject([
        'Bucket'      => $bucket,
        'Key'         => $key,
        'SourceFile'  => $tmpPath,
        'ContentType' => $mime,
        'ACL'         => 'private',
    ]);

    return [
        'ok'     => true,
        'bucket' => $bucket,
        'key'    => $key,
        'mime'   => $mime,
        'etag'   => $res['ETag'] ?? null,
    ];
}
