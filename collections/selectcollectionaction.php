<?php
include_once('../config/symbini.php');
?>



<style>
    /* ====== Scope para esta pantalla ====== */
    .insert-page {
        --brand-wine: rgb(117, 26, 29);
        --brand-wine-10: rgba(117, 26, 29, .10);
        --brand-wine-15: rgba(117, 26, 29, .15);
        --brand-wine-20: rgba(117, 26, 29, .20);
        --black: var(--black, #111);
        --white: var(--white, #fff);
        --light-grey: var(--light-grey, #EAEAEA);
        font-family: "Playfair Display", ui-serif, Georgia, "Times New Roman", serif;
    }

    /* ====== Mini Navbar (volver) ====== */
    .insert-page .mini-navbar {
        position: sticky; top: 0; z-index: 10;
        background: var(--brand-wine);
        color: var(--white);
        border-bottom: 1px solid var(--brand-wine-20);
    }
    .insert-page .mini-navbar-inner {
        max-width: 105rem; margin: 0 auto;
        display: flex; align-items: center; gap: .75rem;
        padding: .75rem 1rem;
    }
    .insert-page .mini-nav-back {
        display: inline-flex; align-items: center; gap: .5rem;
        background: rgba(255,255,255,.12);
        border: 1px solid rgba(255,255,255,.22);
        color: var(--white);
        padding: .5rem .9rem;
        border-radius: 999px;
        cursor: pointer;
        transition: background .2s ease, transform .08s ease;
    }
    .insert-page .mini-nav-back:hover { background: rgba(255,255,255,.18); }
    .insert-page .mini-nav-back:active { transform: translateY(1px); }
    .insert-page .mini-navbar-title {
        margin-left: .25rem;
        font-size: 1rem; font-weight: 500;
        opacity: .95;
    }

    /* ====== Layout ====== */
    .insert-page .insert-options-wrapper{
        max-width: 105rem;
        margin: 1.25rem auto 0 auto;
    }
    .insert-page .options-grid{
        display: grid;
        grid-template-columns: repeat(3,minmax(0,1fr));
        gap: 2rem;
    }
    @media (max-width: 991px){ .insert-page .options-grid{ grid-template-columns: repeat(2,1fr); } }
    @media (max-width: 479px){ .insert-page .options-grid{ grid-template-columns: 1fr; } }

    /* ====== Tarjetas ====== */
    .insert-page .option-card{
        background: var(--white);
        border: 1px solid var(--light-grey);
        border-radius: 2rem;
        box-shadow: 0 2px 8px rgba(0,0,0,.06);
        padding: 1.5rem;
        display: flex;
        flex-direction: column;
        gap: .75rem;
        transition: transform .2s ease, box-shadow .2s ease, border-color .2s ease;
    }
    .insert-page .option-card:hover{
        transform: translateY(-4px);
        box-shadow: 0 8px 24px rgba(0,0,0,.08);
        border-color: var(--brand-wine);
    }

    /* ====== Tipografías / Colores ====== */
    .insert-page .page-title{
        text-align: center;
        color: var(--black);
        font-weight: 500;
        margin: 0 0 2rem 0;
        font-family: "Playfair Display", ui-serif, Georgia, "Times New Roman", serif;
    }
    .insert-page .option-card h2{
        font-family: "Playfair Display", ui-serif, Georgia, "Times New Roman", serif;
        font-size: 1.5rem;
        font-weight: 600;
        margin: 0 0 .25rem 0;
        color: var(--brand-wine);
    }
    .insert-page .option-card p{
        color: var(--black);
        opacity: .85;
        margin: 0 0 .75rem 0;
    }

    /* ====== Acciones ====== */
    .insert-page .option-actions{
        margin-top: auto;
        display: flex;
        gap: .75rem;
    }

    /* ====== Botones (estilos locales, no pisan global) ====== */
    .insert-page .btn {
        appearance: none;
        display: inline-flex; align-items: center; justify-content: center;
        border-radius: 999px;
        padding: .6rem 1.1rem;
        font-size: .95rem;
        line-height: 1;
        border: 1px solid transparent;
        cursor: pointer;
        transition: background .2s ease, border-color .2s ease, color .2s ease, transform .08s ease;
        font-family: inherit;
    }
    .insert-page .btn:active { transform: translateY(1px); }

    .insert-page .btn-primary {
        background: var(--brand-wine);
        color: var(--white);
        border-color: var(--brand-wine);
    }
    .insert-page .btn-primary:hover { background: #8f1f23; }

    .insert-page .btn-ghost {
        background: transparent;
        color: var(--brand-wine);
        border-color: var(--brand-wine);
    }
    .insert-page .btn-ghost:hover { background: var(--brand-wine-10); }

    /* ====== Línea decorativa bajo el título ====== */
    .insert-page .page-title + .title-underline {
        width: 72px; height: 4px; border-radius: 999px;
        background: linear-gradient(90deg, var(--brand-wine), var(--brand-wine-15));
        margin: .75rem auto 2rem auto;
    }

    /* Grid centrado y con espacio suficiente entre tarjetas */
    .insert-page .options-grid{
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(320px, 360px));
        justify-content: center;         /* centra las columnas */
        gap: 32px;                       /* ↑ más espacio para que no se “toquen” las sombras */
    }

    /* Tarjeta base: sin solapes raros */
    .insert-page .option-card{
        position: relative;
        margin: 0 !important;            /* por si algún estilo externo mete márgenes */
        box-shadow: 0 2px 8px rgba(0,0,0,.06);
        transition: box-shadow .2s ease, border-color .2s ease, transform .15s ease;
    }

    /* Hover: muy poco movimiento y por encima del resto */
    .insert-page .option-card:hover{
        transform: translateY(-2px);     /* antes -4px; ahora más sutil */
        box-shadow: 0 8px 20px rgba(0,0,0,.09);
        border-color: var(--brand-wine);
        z-index: 2;                      /* flota por encima en lugar de “meterse” a la otra */
    }

</style>


<section class="insert-page padding-global section-padding-large">
    <link rel="stylesheet" href="<?= $CLIENT_ROOT ?>/css/font.css">

    <?php include_once($SERVER_ROOT . '/includes/navbar.php'); ?>

    <div class="insert-options-wrapper">
        <h1 class="page-title heading-style-h2 weight-medium">Selecciona una opción de inserción</h1>
        <div class="title-underline" aria-hidden="true"></div>

        <div class="options-grid">
            <!-- Card 1 -->
            <div class="option-card">
                <h2 class="heading-style-h5 weight-medium">Crear una nueva colección</h2>
                <p class="text-size-regular">Puedes crear una colección desde cero.</p>

                <div class="option-actions">
                    <form method="get" action="<?= $CLIENT_ROOT ?>/collections/misc/collmetadata.php">
                        <button type="submit" class="btn btn-primary">Ir</button>
                    </form>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="option-card">
                <h2 class="heading-style-h5 weight-medium">Insertar Datos a colección existente</h2>
                <p class="text-size-regular">Inserción manual o por CSV.</p>

                <div class="option-actions">
                    <form method="get" action="<?= $CLIENT_ROOT ?>/collections/collections-edit-types.php">
                        <button type="submit" class="btn btn-primary">Ir</button>
                    </form>
                </div>
            </div>

        </div>

    </div>

    <?php include($SERVER_ROOT.'/includes/footer.php'); ?>

</section>
