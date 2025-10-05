<!DOCTYPE html><!--  This site was created in Webflow. https://webflow.com  --><!--  Last Published: Fri Oct 03 2025 23:25:23 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="68e0597438047ab7144f7f49" data-wf-site="68df53afeb89388e97507271" lang="en">
<head>
    <meta charset="utf-8">
    <title>Contact</title>
    <meta content="Contact" property="og:title">
    <meta content="Contact" property="twitter:title">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="Webflow" name="generator">
    <link href="../css/normalize.css" rel="stylesheet" type="text/css">
    <link href="../css/webflow.css" rel="stylesheet" type="text/css">
    <link href="../css/juan-diegos-sublime-site-674d7d.webflow.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
    <script type="text/javascript">WebFont.load({  google: {    families: ["Inter:300,regular,500,600,700","Playfair Display:regular:cyrillic,latin,latin-ext,vietnamese"]  }});</script>
    <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
    <style>
        body, html, div, p, input, button, label, h1, h2, h3, h4, h5, h6, span, a {
            font-family: 'Playfair Display', serif !important;
        }
    </style>
</head>
<script>
function checkCreds() {
    var username = document.getElementById("Contact-Name").value.trim();
    var password = document.getElementById("Contact-Password").value.trim();

    console.log("Valores obtenidos:", username, password);

    if(username === "" || password === ""){
        console.log("Campos vacíos, mostrando alerta");
        <?php
        $alertStr = 'Please enter your login and password';
        if(isset($LANG['ENTER_LOGIN'])) $alertStr = $LANG['ENTER_LOGIN'];
        ?>
        alert("<?php echo $alertStr; ?>");
        return false; // evita el envío
    }

    console.log("Todo correcto, se enviará el formulario");
    return true; // permite enviar
}
</script>

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
                    <a href="../index.php" class="navbar-link w-nav-link">Home</a>
                    <a href="index-wrapper-register.php" class="navbar-link w-nav-link">Solicitud de Registro</a>
                    <a href="index-wrapper-login.php" class="navbar-link w-nav-link">Iniciar Sesión</a>
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
        <section class="section-contact">
            <div class="padding-global">
                <div class="container-large">
                    <div class="section-padding-large">
                        <div class="w-layout-grid contact-component">
                            <div data-w-id="5e73b729-bbe1-c93e-0326-062008d42606" style="opacity:0" class="contact-form-block w-form">

                                <form id="wf-form-Contact-Form" name="wf-form-Contact-Form"
                                      method="post"
                                      action="index.php"
                                      onsubmit="return checkCreds();"
                                      class="contact-form">

                                    <div blocks-name="form_field-2col" class="form-field-2col">
                                        <div class="form-field-wrapper">
                                            <label for="Contact-Name" class="form-field-label">Nombre de Usuario</label>
                                            <input class="input-form w-input" maxlength="256" name="login"
                                                   data-name="Contact Name" placeholder="Ingrese su nombre de usuario"
                                                   type="text" id="Contact-Name" required>
                                        </div>

                                        <div class="form-field-wrapper">
                                            <label for="Contact-Password" class="form-field-label">Contraseña</label>
                                            <input class="input-form w-input" maxlength="256" name="password"
                                                   data-name="Contact Password" placeholder="Ingrese su contraseña"
                                                   type="password" id="Contact-Password" required>
                                        </div>
                                    </div>

                                    <div class="form-field-wrapper">
                                        <input type="checkbox" name="remember" id="remember" value="1" checked>
                                        <label for="remember">Recordarme en este equipo</label>
                                    </div>

                                    <input type="hidden" name="refurl" value="index.php">

                                    <div class="form-button-wrapper">
                                        <input type="submit" class="button is-form w-button" name="action" value="login">
                                    </div>
                                </form>

                                <div class="success-message w-form-done">
                                    <div class="success-text">Thank you! Your submission has been received!</div>
                                </div>
                                <div class="error-message w-form-fail">
                                    <div class="error-text">Oops! Something went wrong while submitting the form.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer class="footer-component">
            <div class="padding-global">
                <div data-w-id="ed0eba12-1def-54f2-f589-3ad9cdc3ff8e" class="container-large">
                    <div class="padding-top padding-xxlarge">
                        <div class="padding-bottom padding-large">
                            <div class="w-layout-grid footer-top-wrapper">
                                <div id="w-node-ed0eba12-1def-54f2-f589-3ad9cdc3ffa7-cdc3ff8c" class="w-layout-grid footer-menu-wrapper">
                                    <div id="w-node-ed0eba12-1def-54f2-f589-3ad9cdc3ffa8-cdc3ff8c" class="footer-link-list">
                                        <div class="footer-links-list-title">
                                            <div class="weight-semibold">Enlaces Rápidos</div>
                                        </div>
                                        <a href="https://www.unmsm.edu.pe/" class="footer-link">UNMSM</a>
                                        <a href="https://museohn.unmsm.edu.pe/" class="footer-link">Museo HN</a>
                                    </div>
                                    <div id="w-node-ed0eba12-1def-54f2-f589-3ad9cdc3ffb8-cdc3ff8c" class="footer-link-list">
                                        <div class="footer-links-list-title">
                                            <div class="weight-semibold">Contáctanos</div>
                                        </div>
                                        <a href="tel:01234567890" class="footer-link">(01) 619-7000 Anexo 5703</a>
                                        <a href="mailto:info@nova.agency" class="footer-link">secdireccion.mhn@unmsm.edu.pe</a>
                                        <div class="footer-address">Av. Arenales 1256, Jesús María, Lima 14, Perú<br>Código postal Lima 15072</div>
                                    </div>
                                    <div id="w-node-ed0eba12-1def-54f2-f589-3ad9cdc3ffc6-cdc3ff8c" class="footer-link-list">
                                        <div class="margin-bottom margin-xsmall">
                                            <div class="weight-semibold">Síguenos</div>
                                        </div>
                                        <a href="https://www.facebook.com/MHN.UNMSM" target="_blank" class="footer-social-link w-inline-block">
                                            <div class="social-icon w-embed"><svg width="100%" height="100%" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M22 12.0611C22 6.50451 17.5229 2 12 2C6.47715 2 2 6.50451 2 12.0611C2 17.0828 5.65684 21.2452 10.4375 22V14.9694H7.89844V12.0611H10.4375V9.84452C10.4375 7.32296 11.9305 5.93012 14.2146 5.93012C15.3088 5.93012 16.4531 6.12663 16.4531 6.12663V8.60261H15.1922C13.95 8.60261 13.5625 9.37822 13.5625 10.1739V12.0611H16.3359L15.8926 14.9694H13.5625V22C18.3432 21.2452 22 17.083 22 12.0611Z" fill="CurrentColor"></path>
                                                </svg></div>
                                            <div class="text-size-small text-colour-black">Facebook</div>
                                        </a>
                                        <a href="https://www.instagram.com/museohnunmsm/" target="_blank" class="footer-social-link w-inline-block">
                                            <div class="social-icon w-embed"><svg width="100%" height="100%" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M16 3H8C5.23858 3 3 5.23858 3 8V16C3 18.7614 5.23858 21 8 21H16C18.7614 21 21 18.7614 21 16V8C21 5.23858 18.7614 3 16 3ZM19.25 16C19.2445 17.7926 17.7926 19.2445 16 19.25H8C6.20735 19.2445 4.75549 17.7926 4.75 16V8C4.75549 6.20735 6.20735 4.75549 8 4.75H16C17.7926 4.75549 19.2445 6.20735 19.25 8V16ZM16.75 8.25C17.3023 8.25 17.75 7.80228 17.75 7.25C17.75 6.69772 17.3023 6.25 16.75 6.25C16.1977 6.25 15.75 6.69772 15.75 7.25C15.75 7.80228 16.1977 8.25 16.75 8.25ZM12 7.5C9.51472 7.5 7.5 9.51472 7.5 12C7.5 14.4853 9.51472 16.5 12 16.5C14.4853 16.5 16.5 14.4853 16.5 12C16.5027 10.8057 16.0294 9.65957 15.1849 8.81508C14.3404 7.97059 13.1943 7.49734 12 7.5ZM9.25 12C9.25 13.5188 10.4812 14.75 12 14.75C13.5188 14.75 14.75 13.5188 14.75 12C14.75 10.4812 13.5188 9.25 12 9.25C10.4812 9.25 9.25 10.4812 9.25 12Z" fill="CurrentColor"></path>
                                                </svg></div>
                                            <div class="text-size-small text-colour-black">Instagram</div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="footer-line-divider"></div>
                        <div class="padding-vertical padding-medium">
                            <div class="footer-bottom">
                                <div class="footer-credit-text">© 2025 Museo de Historia Natural UNMSM</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>
<script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=68df53afeb89388e97507271" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="../js/webflow.js" type="text/javascript"></script>
</body>
</html>
