<?php
include_once('./config/symbini.php');
?>
<!DOCTYPE html><!--  This site was created in Webflow. https://webflow.com  --><!--  Last Published: Fri Oct 03 2025 23:25:23 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="68df53b2eb89388e975072ba" data-wf-site="68df53afeb89388e97507271" lang="en">
<head>
    <meta charset="utf-8">
    <title>Nova X - Webflow HTML website template</title>
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="Webflow" name="generator">
    <link href="css/normalize.css" rel="stylesheet" type="text/css">
    <link href="css/webflow.css" rel="stylesheet" type="text/css">
    <link href="css/juan-diegos-sublime-site-674d7d.webflow.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin="anonymous">

    <!-- Agrega el CSS del carrusel (puede ir dentro de main.css o un archivo nuevo) -->
    <link rel="stylesheet" href="css/carousel.css">
    <!-- Si preferías separarlo: <link rel="stylesheet" href="/css/carousel.css"> -->

    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
    <script type="text/javascript">WebFont.load({  google: {    families: ["Inter:300,regular,500,600,700","Playfair Display:regular:cyrillic,latin,latin-ext,vietnamese"]  }});</script>
    <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
    <style>
        * {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            -o-font-smoothing: antialiased;
        }
    </style>
</head>
<body class="body">
<div class="page-wrapper navbar-on-page">
    <div class="global-styles w-embed">
        <style>
            /* Focus state style for keyboard navigation for the focusable elements */
            *[tabindex]:focus-visible,
            input[type="file"]:focus-visible {
                outline: 0.125rem solid #4d65ff;
                outline-offset: 0.125rem;
            }
            /* Get rid of top margin on first element in any rich text element */
            .w-richtext > :not(div):first-child, .w-richtext > div:first-child > :first-child {
                margin-top: 0 !important;
            }
            /* Get rid of bottom margin on last element in any rich text element */
            .w-richtext>:last-child, .w-richtext ol li:last-child, .w-richtext ul li:last-child {
                margin-bottom: 0 !important;
            }
            /* Prevent all click and hover interaction with an element */
            .pointer-events-off {
                pointer-events: none;
            }
            /* Enables all click and hover interaction with an element */
            .pointer-events-on {
                pointer-events: auto;
            }
            /* Make sure containers never lose their center alignment */
            .container-medium,.container-small, .container-large {
                margin-right: auto !important;
                margin-left: auto !important;
            }
            /* These classes are never overwritten */
            .hide {
                display: none !important;
            }
            @media screen and (max-width: 991px) {
                .hide, .hide-tablet {
                    display: none !important;
                }
            }
            @media screen and (max-width: 767px) {
                .hide-mobile-landscape{
                    display: none !important;
                }
            }
            @media screen and (max-width: 479px) {
                .hide-mobile{
                    display: none !important;
                }
            }
            .margin-0 {
                margin: 0rem !important;
            }
            .padding-0 {
                padding: 0rem !important;
            }
            .margin-top {
                margin-right: 0rem !important;
                margin-bottom: 0rem !important;
                margin-left: 0rem !important;
            }
            .padding-top {
                padding-right: 0rem !important;
                padding-bottom: 0rem !important;
                padding-left: 0rem !important;
            }
            .margin-right {
                margin-top: 0rem !important;
                margin-bottom: 0rem !important;
                margin-left: 0rem !important;
            }
            .padding-right {
                padding-top: 0rem !important;
                padding-bottom: 0rem !important;
                padding-left: 0rem !important;
            }
            .margin-bottom {
                margin-top: 0rem !important;
                margin-right: 0rem !important;
                margin-left: 0rem !important;
            }
            .padding-bottom {
                padding-top: 0rem !important;
                padding-right: 0rem !important;
                padding-left: 0rem !important;
            }
            .margin-left {
                margin-top: 0rem !important;
                margin-right: 0rem !important;
                margin-bottom: 0rem !important;
            }
            .padding-left {
                padding-top: 0rem !important;
                padding-right: 0rem !important;
                padding-bottom: 0rem !important;
            }
            .margin-horizontal {
                margin-top: 0rem !important;
                margin-bottom: 0rem !important;
            }
            .padding-horizontal {
                padding-top: 0rem !important;
                padding-bottom: 0rem !important;
            }
            .margin-vertical {
                margin-right: 0rem !important;
                margin-left: 0rem !important;
            }
            .padding-vertical {
                padding-right: 0rem !important;
                padding-left: 0rem !important;
            }
        </style>
    </div>
    <div data-collapse="medium" data-animation="default" data-duration="400" data-w-id="c718d996-64e2-fd48-91d6-4ec75582b6a9" data-easing="ease" data-easing2="ease" role="banner" class="navbar-component navbar w-nav">
        <div class="navbar-container">
            <nav role="navigation" class="navbar-menu w-nav-menu">
                <div class="navbar-menu-link-wrapper">
                    <a href="index.php" aria-current="page" class="navbar-link w-nav-link w--current">Home</a>
                    <a href="profile/index-wrapper-register.php" class="navbar-link w-nav-link">Solicitud de Registro</a>
                    <a href="profile/index-wrapper-login.php" class="navbar-link w-nav-link">Iniciar Sesión</a>
                </div>
            </nav>
            <div class="navbar-menu-button w-nav-button">
                <div class="menu-icon">
                    <div class="menu-icon-line-top"></div>
                    <div class="menu-icon-line-middle">
                        <div class="menu-icon-line-middle-inner"></div>
                    </div>
                    <div class="menu-icon-line-bottom"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-wrapper max-width-full">
        <header class="section-hero-header">
            <div class="padding-global">
                <div class="container-large">
                    <div class="section-padding-large">
                        <div class="header-component">
                            <div class="margin-bottom margin-xxlarge">
                                <div class="text-align-center">
                                    <div class="max-width-large">
                                        <div data-w-id="0ee7d3df-50a2-894c-822c-fa26a317dce8" style="opacity:0" class="tagline-pill">
                                            <div class="text-block">Bienvenido al Herbario Digital de la Universidad Nacional Mayor de San Marcos<br></div>
                                        </div>
                                        <div class="margin-bottom margin-small">
                                            <h1 data-w-id="3f1ce910-7bb7-b2bb-a95e-b18005f9e54c" style="opacity:0" class="heading-style-h1 weight-medium">Del Museo para el Mundo</h1>
                                        </div>
                                        <p data-w-id="3f1ce910-7bb7-b2bb-a95e-b18005f9e54e" style="opacity:0" class="text-size-medium">Este proyecto propone el primer hito de virtualización del Herbario UNMSM, considerando las especies de importancia nomenclatural, histórica y cultural.</p>
                                        <div class="margin-top margin-medium">
                                            <div data-w-id="3f1ce910-7bb7-b2bb-a95e-b18005f9e551" style="opacity:0" class="button-group is-center">
                                                <a href="contact.html" class="button w-inline-block">
                                                    <div class="button-text-item">Búsqueda por Mapa</div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="header-image-wrapper"><img class="header-image" src="images/index/museo_de_historia_natural.png" alt="" style="opacity:0" sizes="(max-width: 931px) 100vw, 931px" data-w-id="3f1ce910-7bb7-b2bb-a95e-b18005f9e557" loading="eager" srcset="images/index/museo_de_historia_natural-p-500.png 500w, images/index/museo_de_historia_natural-p-800.png 800w, images/index/museo_de_historia_natural.png 931w"></div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <section class="section-client-logos">
            <div class="padding-global">
                <div class="container-large">
                    <div class="margin-bottom margin-medium">
                        <div class="text-align-center">
                            <div class="max-width-large align-center">
                                <h2 data-w-id="576ff569-64c2-db91-4d37-47cc9f670703" style="opacity:0" class="text-size-medium">Este proyecto ha sido posible gracias a:</h2>
                            </div>
                        </div>
                    </div>
                    <div data-w-id="576ff569-64c2-db91-4d37-47cc9f670705" style="opacity:0" class="logo-component"><img src="images/index/UNMSM.png" loading="lazy" id="w-node-_576ff569-64c2-db91-4d37-47cc9f670706-975072ba" height="Auto" alt="" srcset="images/index/UNMSM-p-500.png 500w, images/index/UNMSM.png 848w" sizes="(max-width: 848px) 100vw, 848px" class="client-logo"><img src="images/index/mhn-logo.png" loading="lazy" width="Auto" id="w-node-_576ff569-64c2-db91-4d37-47cc9f670708-975072ba" alt="" srcset="images/index/mhn-logo-p-500.png 500w, images/index/mhn-logo-p-800.png 800w, images/index/mhn-logo.png 986w" sizes="(max-width: 986px) 100vw, 986px" class="client-logo"><img src="images/index/symbiota.png" loading="lazy" width="Auto" id="w-node-_9ced24a2-1756-1c77-bb19-ed647809dce7-975072ba" alt="" srcset="images/index/symbiota-p-500.png 500w, images/index/symbiota-p-800.png 800w, images/index/symbiota.png 1024w" sizes="(max-width: 1024px) 100vw, 1024px" class="client-logo"></div>
                </div>
            </div>
        </section>
        <div class="section-services">
            <section class="services-component-wrapper">
                <div class="padding-global is-2rem">
                    <div class="container-large">
                        <div class="section-padding-large">
                            <div data-w-id="fedb5b6f-90fe-2b15-2f89-7711feba92b5" style="opacity:0" class="tagline-pill">
                                <div class="text-block-2">Sobre El Museo de Historia Natural de la UNMSM</div>
                            </div>
                            <div class="margin-bottom margin-large">
                                <div class="max-width-large">
                                    <div class="margin-bottom margin-small">
                                        <h2 data-w-id="01085c0b-d7b5-7af3-3381-35bfbb69aed6" style="opacity:0" class="heading-style-h2 weight-medium">Conoce lo que hacemos</h2>
                                    </div>
                                    <p data-w-id="01085c0b-d7b5-7af3-3381-35bfbb69aed8" style="opacity:0" class="text-size-medium">Y la importancia de nuestra labor<br></p>
                                </div>
                            </div>
                            <!-- SERVICES CAROUSEL -->
                            <div class="services-carousel" aria-label="Servicios">
                                <div class="carousel-track" id="servicesTrack">
                                    <!-- Slide 1 -->
                                    <section class="carousel-slide">
                                        <div class="w-layout-grid service-component">
                                            <img src="images/index/raimondi.webp" loading="lazy" alt="Imagen del Herbario" class="service-image">
                                            <div class="service-content">
                                                <div class="margin-bottom margin-small">
                                                    <h2 class="heading-style-h3">El Herbario</h2>
                                                </div>
                                                <p class="text-size-medium">
                                                    El Herbario San Marcos (USM) es el herbario más grande del Perú, con más de 750,000 colecciones de plantas.
                                                </p>
                                                <div class="margin-top margin-medium">
                                                    <div class="button-group">
                                                        <a href="#" class="button w-inline-block">
                                                            <div class="button-text-item">Conoce más</div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>

                                    <!-- Duplica/edita más slides según necesites -->
                                    <section class="carousel-slide">
                                        <div class="w-layout-grid service-component">
                                            <img src="images/layout/HERBARIO_UNMSM.png" loading="lazy" alt="Logo Herbario UNMSM" class="service-image">
                                            <div class="service-content">
                                                <div class="margin-bottom margin-small">
                                                    <h2 class="heading-style-h3">Colecciones</h2>
                                                </div>
                                                <p class="text-size-medium">
                                                    Colecciones históricas y contemporáneas con alta curaduría y digitalización continua.
                                                </p>
                                                <div class="margin-top margin-medium">
                                                    <div class="button-group">
                                                        <a href="#" class="button w-inline-block">
                                                            <div class="button-text-item">Explorar</div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>

                                    <section class="carousel-slide">
                                        <div class="w-layout-grid service-component">
                                            <img src="images/layout/UNMSM.png" loading="lazy" alt="UNMSM" class="service-image">
                                            <div class="service-content">
                                                <div class="margin-bottom margin-small">
                                                    <h2 class="heading-style-h3">Investigación</h2>
                                                </div>
                                                <p class="text-size-medium">
                                                    Soporte a proyectos científicos, préstamos interinstitucionales y educación.
                                                </p>
                                                <div class="margin-top margin-medium">
                                                    <div class="button-group">
                                                        <a href="#" class="button w-inline-block">
                                                            <div class="button-text-item">Ver proyectos</div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>

                                <!-- Controles -->
                                <div class="carousel-controls">
                                    <button class="carousel-btn" id="prevSlide" aria-label="Anterior">‹</button>
                                    <div class="carousel-dots" id="servicesDots" aria-hidden="true"></div>
                                    <button class="carousel-btn" id="nextSlide" aria-label="Siguiente">›</button>
                                </div>
                            </div>
                            <!-- /SERVICES CAROUSEL -->
                            <!-- Al final del <body> o con defer -->
                            <script src="js/carousel.js" defer></script>

                        </div>
                    </div>
                </div>
        </div>
        </section>
    </div>
    <section class="section-team">
        <div class="padding-global">
            <div class="container-large"></div>
        </div>
    </section>
    <section class="section-projects">
        <div class="padding-global">
            <div class="container-large"></div>
        </div>
    </section>
    <?php
    include($SERVER_ROOT.'/includes/footer.php');
    ?>
    <pre contenteditable="false" class="w-code-block" style="display:block;overflow-x:auto;background:#2b2b2b;color:#f8f8f2;padding:0.5em"><code class="language-javascript" style="white-space:pre"></code></pre>
</div>
</div>
<script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=68df53afeb89388e97507271" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="js/webflow.js" type="text/javascript"></script>
</body>
</html>
