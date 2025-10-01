<?php
$collid = isset($_GET['collid']) ? (int) $_GET['collid'] : 0;
$mode   = isset($_GET['mode']) ? $_GET['mode'] : null;

$collName = '';

$uploadMessage = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!isset($_FILES['occ_csv']) || $_FILES['occ_csv']['error'] !== UPLOAD_ERR_OK) {
        $uploadMessage = 'Error: no se recibió el archivo o hubo un problema en la carga.';
    } else {
        $filename = $_FILES['occ_csv']['name'];
        $tmpPath  = $_FILES['occ_csv']['tmp_name'];

        $ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
        if ($ext !== 'csv') {
            $uploadMessage = 'El archivo debe ser .csv';
        } else {
            $destPath = sys_get_temp_dir() . DIRECTORY_SEPARATOR . uniqid('occ_', true) . '.csv';
            if (move_uploaded_file($tmpPath, $destPath)) {
                $uploadMessage = 'CSV recibido correctamente. Ruta temporal: ' . htmlspecialchars($destPath);
            } else {
                $uploadMessage = 'No se pudo mover el archivo subido.';
            }
        }
    }
}

$langTag = isset($LANG_TAG) ? $LANG_TAG : 'en';
$title   = isset($LANG['ADD_OCCUR_CSV']) ? $LANG['ADD_OCCUR_CSV'] : 'Add Occurrence Records via CSV';

$isSuccess = ($uploadMessage && strpos($uploadMessage, 'CSV recibido correctamente') === 0);
?>
<!doctype html>
<html lang="<?= htmlspecialchars($langTag) ?>">
<head>
  <meta charset="utf-8">
  <title><?= htmlspecialchars($title) ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    :root{
      --bg:#f6f9fc;
      --card:#ffffff;
      --text:#1f2937;
      --muted:#6b7280;
      --accent:#2a7f62;        /* verde principal */
      --accent-2:#1e6f5c;      /* verde más oscuro */
      --accent-3:#a7d8c9;      /* borde/sutileza */
      --danger:#c2410c;        /* naranja/rojo para errores */
      --success:#166534;       /* verde éxito */
      --ring:rgba(42,127,98,.25);
      --radius:12px;
      --shadow:0 10px 25px rgba(0,0,0,.08);
    }
    *{box-sizing:border-box}
    html,body{height:100%}
    body{
      margin:0; padding:2rem;
      font-family:ui-sans-serif,system-ui,-apple-system,Segoe UI,Roboto,Inter,Arial;
      color:var(--text); background:linear-gradient(180deg, var(--bg), #ffffff);
    }
    .wrap{max-width:860px;margin:0 auto}
    .page-title{
      display:flex; align-items:center; gap:.75rem;
      color:var(--accent);
      margin:0 0 1rem 0; letter-spacing:.2px;
    }
    .crumbs{
      font-size:.9rem; color:var(--muted); margin-bottom:1rem;
    }
    .card{
      background:var(--card); border:1px solid var(--accent-3);
      border-radius:var(--radius); box-shadow:var(--shadow);
      overflow:hidden;
    }
    .card-hd{
      padding:1rem 1.25rem;
      background:linear-gradient(180deg, rgba(167,216,201,.35), rgba(167,216,201,.15));
      border-bottom:1px solid var(--accent-3);
    }
    .card-hd h2{margin:0;font-size:1.1rem;color:var(--accent-2);letter-spacing:.2px}
    .card-bd{padding:1.25rem}
    .row{display:grid; grid-template-columns: 1fr; gap:1rem}
    @media (min-width:720px){ .row{grid-template-columns: 1fr 1fr} }

    .info{
      padding:.75rem 1rem; border:1px dashed var(--accent-3);
      border-radius:10px; background:rgba(167,216,201,.10); color:var(--accent-2);
      font-size:.95rem;
    }
    .kv{margin:.25rem 0 0 0; color:var(--text)}
    .kv small{color:var(--muted)}

    label{display:block; font-weight:600; margin:.25rem 0 .5rem; color:var(--text)}
    .file-wrap{
      position:relative; border:2px dashed var(--accent-3);
      border-radius:12px; padding:1.25rem; text-align:center;
      background:linear-gradient(180deg,#fff,rgba(167,216,201,.06));
      transition:border-color .2s ease, box-shadow .2s ease;
    }
    .file-wrap:focus-within{
      border-color:var(--accent); box-shadow:0 0 0 6px var(--ring);
      outline:none;
    }
    input[type="file"]{
      position:absolute; inset:0; opacity:0; cursor:pointer;
    }
    .file-cta{
      display:inline-block; padding:.6rem 1rem; border-radius:10px;
      background:linear-gradient(180deg, var(--accent), var(--accent-2));
      color:#fff; font-weight:600; border:1px solid rgba(0,0,0,.08);
      box-shadow:0 6px 16px rgba(30,111,92,.25); user-select:none;
    }
    .hint{margin-top:.5rem; color:var(--muted); font-size:.9rem}

    .btns{display:flex; gap:.75rem; margin-top:1rem; flex-wrap:wrap}
    .btn{
      appearance:none; border:0; cursor:pointer;
      padding:.75rem 1.1rem; border-radius:10px; font-weight:700;
      box-shadow:0 6px 16px rgba(30,111,92,.20);
      transition:transform .06s ease, box-shadow .15s ease, filter .15s ease;
    }
    .btn:active{transform:translateY(1px)}
    .btn-primary{
      color:#fff; background:linear-gradient(180deg, var(--accent), var(--accent-2));
    }
    .btn-secondary{
      background:#eef6f3; color:var(--accent-2); border:1px solid var(--accent-3);
    }
    .msg{
      margin-top:1rem; padding:.9rem 1rem; border-radius:10px; border:1px solid;
      background:#fff;
    }
    .msg.success{border-color:#a7e3c3; background:linear-gradient(180deg,#f2fbf6,#ffffff); color:var(--success)}
    .msg.error{border-color:#ffd1bd; background:linear-gradient(180deg,#fff5f0,#ffffff); color:var(--danger)}
    .muted{color:var(--muted)}
  </style>
</head>
<body>
  <div class="wrap">
    <h1 class="page-title">🧾 <?= htmlspecialchars($title) ?></h1>
    <div class="crumbs">
      <span class="muted">Data » Occurrence »</span> <strong><?= htmlspecialchars($title) ?></strong>
    </div>

    <div class="card">
      <div class="card-hd">
        <h2>Contexto de la colección</h2>
      </div>
      <div class="card-bd">
        <div class="row">
          <div class="info">
            <div><strong>Colección</strong></div>
            <div class="kv">
              <?php if ($collName): ?>
                <?= htmlspecialchars($collName) ?> <small>(ID <?= (int)$collid ?>)</small>
              <?php else: ?>
                <small>(ID <?= (int)$collid ?>)</small>
              <?php endif; ?>
            </div>
          </div>
          <div class="info">
            <div><strong>Modo</strong></div>
            <div class="kv">
              <?= $mode ? htmlspecialchars($mode) : '<span class="muted">—</span>' ?>
            </div>
          </div>
        </div>

        <form action="?collid=<?= (int)$collid ?><?= $mode ? '&mode=' . urlencode($mode) : '' ?>" method="post" enctype="multipart/form-data" style="margin-top:1.25rem">
          <label for="occ_csv">Subir archivo CSV</label>
          <div class="file-wrap">
            <input type="file" id="occ_csv" name="occ_csv" accept=".csv" required>
            <div>
              <span class="file-cta">Seleccionar CSV</span>
              <div class="hint">File format: .csv • Use semicolon • UTF-8 is recommended</div>
            </div>
          </div>

          <div class="btns">
            <button type="submit" class="btn btn-primary">Subir y continuar</button>
            <a href="../index.php" class="btn btn-secondary">Volver</a>
          </div>
        </form>

        <?php if ($uploadMessage): ?>
          <div class="msg <?= $isSuccess ? 'success' : 'error' ?>">
            <?= htmlspecialchars($uploadMessage) ?>
          </div>
        <?php endif; ?>
      </div>
    </div>

    <p class="muted" style="margin-top:.75rem">
      Tip: Si tu CSV tiene encabezados diferentes a los campos estándar, te pediré que mapees columnas en el siguiente paso.
    </p>
  </div>
</body>
</html>
