<?php
// collections-redirect.php

// Ensure $SERVER_ROOT is available even before symbini.php (this file lives in /symbiota/collections/)
if (!isset($SERVER_ROOT)) {
    $SERVER_ROOT = realpath(__DIR__ . '/..');
}

include_once($SERVER_ROOT . '/config/symbini.php');
include_once($SERVER_ROOT . '/config/dbconnection.php');
include_once($SERVER_ROOT . '/classes/OccurrenceEditorManager.php');

header('Content-Type: text/html; charset=' . $CHARSET);

// If admin, pull ALL collections; otherwise restrict to user-rights set.
$restrictToUser = empty($IS_ADMIN) ? true : false;

$mgr   = new OccurrenceEditorManager();
$colls = $mgr->getAllCollections($restrictToUser); // [collid => collectionname]

// Redirect only on form submit (no JS)
if (isset($_GET['collid'], $_GET['mode']) && ctype_digit($_GET['collid'])) {
    $mode   = $_GET['mode'];
    $collid = $_GET['collid'];

    if ($mode === 'manual') {
        $target = $CLIENT_ROOT . '/collections/editor/occurrenceeditor.php?gotomode=1&collid=' . $collid;
    } elseif ($mode === 'csv') {
        $target = $CLIENT_ROOT . '/collections/admin/specupload.php?uploadtype=3&collid=' . $collid;
    } else {
        $target = '';
    }

    if ($target) {
        header('Location: ' . $target);
        exit;
    }
}
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <title>Selecciona una colección</title>
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">

    <style>
        :root { --app-font: "Playfair Display", ui-serif, Georgia, "Times New Roman", serif; }

        html, body { font-family: var(--app-font); }
        *, *::before, *::after { font-family: var(--app-font) !important; }
        button, input, select, textarea { font: inherit; }
        html { font-optical-sizing: auto; }

        body { margin:0; min-height:60vh; display:grid; place-items:center; background:#f7f7fb; }
        .card { background:#fff; padding:24px; border-radius:14px; box-shadow:0 6px 24px rgba(0,0,0,.08); width:min(640px,92vw); }
        h1 { margin:0 0 10px; font-size:1.25rem; }
        p { margin:0 0 16px; color:#555; }
        .row { display:flex; gap:10px; align-items:flex-start; flex-wrap:wrap; }
        select { flex:1; min-width:260px; padding:10px 12px; border-radius:10px; border:1px solid #d7d7e0; font-size:1rem; }
        fieldset { flex:1; min-width:260px; border:1px solid #e3e3ea; border-radius:10px; padding:10px 12px; margin:0; }
        .modes { display:flex; gap:16px; align-items:center; flex-wrap:wrap; }
        .modes label { display:flex; align-items:center; gap:6px; cursor:pointer; }

        /* Botón color vino */
        button { padding:10px 14px; border-radius:10px; border:0; background:rgb(117, 26, 29); color:#fff; font-weight:600; cursor:pointer; }
        button:hover { filter:brightness(1.05); }
        button:focus { outline:2px solid rgba(117,26,29,.35); outline-offset:2px; }

        .muted{ color:#888; font-size:.9rem; margin-top:10px; }
    </style>
</head>
<body>
<?php include($SERVER_ROOT.'/includes/header.php'); ?>

<div class="card">
    <h1>Inserta datos a una colección</h1>
    <p>Selecciona una colección y el modo de inserción, luego presiona “Abrir”.</p>

    <form method="get" action="">
        <div class="row">
            <!-- Colección (requerido) -->
            <select id="collid" name="collid" aria-label="Collection" required>
                <option value="" disabled selected>— Elige una colección —</option>
                <?php foreach ($colls as $id => $name): ?>
                    <option value="<?= htmlspecialchars((string)$id, ENT_QUOTES, $CHARSET) ?>">
                        <?= htmlspecialchars($name, ENT_QUOTES, $CHARSET) ?> (ID <?= (int)$id ?>)
                    </option>
                <?php endforeach; ?>
            </select>

            <!-- Modo (requerido) -->
            <fieldset>
                <legend style="font-size:.95rem; color:#333; padding:0 6px;">Modo</legend>
                <div class="modes">
                    <label><input type="radio" name="mode" value="manual" required> Inserción manual</label>
                    <label><input type="radio" name="mode" value="csv"> CSV (carga masiva)</label>
                </div>
            </fieldset>

            <button type="submit">Abrir</button>
        </div>
        <p class="muted">La página redirigirá después de enviar el formulario.</p>
    </form>
</div>

</body>
</html>
