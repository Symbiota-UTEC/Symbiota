<?php
include_once( '/var/www/html/symbiota/content/lang/templates/header.en.php'); 
?>

<style>
:root{
  --leaf-50:#f0fdf4;
  --leaf-100:#dcfce7;
  --leaf-200:#bbf7d0;
  --leaf-300:#86efac;
  --leaf-400:#4ade80;
  --leaf-500:#22c55e;
  --leaf-600:#16a34a;
  --leaf-700:#15803d;
  --leaf-800:#166534;
  --leaf-900:#14532d;
  --ink-800:#1f2937;
  --ink-600:#374151;
  --ink-400:#9ca3af;
  --paper:#ffffff;
}

body.symb-green{
  background: linear-gradient(180deg,var(--leaf-50), #ffffff 420px) fixed;
  color: var(--ink-800);
  font-family: system-ui,-apple-system, Segoe UI, Roboto, Helvetica, Arial, Noto Sans, "Apple Color Emoji","Segoe UI Emoji";
}

/* Wrapper */
.insert-options-wrapper {
  max-width: 1100px;
  margin: 0 auto;
  padding: 2rem;
}

/* Cards estilo verde */
.option-card {
  background: var(--paper);
  border: 1px solid var(--leaf-200);
  border-radius: 14px;
  box-shadow: 0 4px 18px rgba(20,83,45,.08);
  padding: 1.5rem;
  text-align: center;
  transition: transform .15s ease, box-shadow .2s ease;
}
.option-card:hover{
  transform: translateY(-3px);
  box-shadow: 0 8px 26px rgba(21,128,61,.15);
}
.option-card h2 {
  color: var(--leaf-800);
  font-weight: 800;
}
.option-card p {
  color: var(--ink-600);
  margin-bottom: 1rem;
}

/* Botones */
button, .button {
  background: var(--leaf-600) !important;
  color: white !important;
  border: none !important;
  border-radius: 12px !important;
  padding: 10px 16px !important;
  font-weight: 700 !important;
  box-shadow: 0 4px 16px rgba(34,197,94,.24);
  transition: transform .05s ease-in-out, box-shadow .2s ease;
}
button:hover, .button:hover {
  background: var(--leaf-700) !important;
  transform: translateY(-1px);
  box-shadow: 0 8px 22px rgba(21,128,61,.26);
}
</style>

<div class="insert-options-wrapper">
  <h1 style="text-align:center; margin-bottom: 2rem; color: var(--leaf-900); font-weight: 800;">
    Selecciona una opción de inserción
  </h1>
  
  <div class="options-grid" style="display: flex; gap: 2rem; justify-content: center; flex-wrap: wrap;">
    
    <div class="option-card">
      <h2>Crear una nueva colección</h2>
      <p>Puedes crear una colección desde cero.</p>
      <form method="get" action="<?= $CLIENT_ROOT ?>/collections/crearcoleccion.php">
        <button type="submit">Ir</button>
      </form>
    </div>

    <div class="option-card">
      <h2>Insertar CSV a colección existente</h2>
      <p>Sube un archivo CSV con registros.</p>
      <form method="get" action="<?= $CLIENT_ROOT ?>/collections/importcsv.php">
        <button type="submit">Ir</button>
      </form>
    </div>

    <div class="option-card">
      <h2>Insertar registro a colección existente</h2>
      <p>Agrega manualmente un nuevo registro.</p>
      <form method="get" action="<?= $CLIENT_ROOT ?>/collections/editor/occurrenceeditor.php">
        <button type="submit">Ir</button>
      </form>
    </div>
  </div>

  <!-- Botón de volver -->
  <div style="margin-top: 3rem; text-align:center;">
    <button class="button button-secondary" onclick="window.history.back()">⬅ Volver</button>
  </div>
</div>

