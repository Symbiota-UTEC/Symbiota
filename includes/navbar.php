<?php
// includes/navbar-object.php
// Requiere que $CR y $uid estén definidos por el archivo padre.
?>
<link rel="stylesheet" href="<?php echo $CLIENT_ROOT; ?>/css/juan-diegos-sublime-site-674d7d.webflow.css">

<nav class="top-login" aria-label="horizontal-nav">
    <?php
    if ($USER_DISPLAY_NAME) {
    $CR = rtrim($CLIENT_ROOT, '/');
    $uid = isset($SYMB_UID) ? (int)$SYMB_UID : 0;
    ?>
    <div class="navbar-container">
        <nav role="navigation" class="navbar-menu w-nav-menu">
            <div class="navbar-menu-link-wrapper">

                <a href="<?= $CR ?>/profile/portal.php" class="navbar-link w-nav-link">Portal</a>
                <a href="<?= $CR ?>/collections/selectcollectionaction.php" class="navbar-link w-nav-link">Insertar Datos</a>
                <a href="<?= $CR ?>/profile/viewprofile.php<?= $uid ? '?userid='.$uid : '' ?>" class="navbar-link w-nav-link">Mi Perfil</a>
                <a href="<?= $CR ?>/profile/index-wrapper-login.php" class="navbar-link w-nav-link">Cerrar Sesión</a>

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
        <?php
        } else {
            ?>
            <span id="contactUs">
						<button class="button button-tertiary bottom-breathing-room-rel left-breathing-room-rel" onclick="window.location.href='#'"><?= $LANG['H_CONTACT_US'] ?></button>
					</span>
            <span id="login">
						<form name="loginForm" method="post" action="<?= $CLIENT_ROOT . "/profile/index.php" ?>">
							<input name="refurl" type="hidden" value="<?= htmlspecialchars($_SERVER['SCRIPT_NAME'], ENT_COMPAT | ENT_HTML401 | ENT_SUBSTITUTE) . "?" . htmlspecialchars($_SERVER['QUERY_STRING'], ENT_QUOTES) ?>">
							<button class="button button-secondary bottom-breathing-room-rel left-breathing-room-rel" name="loginButton" type="submit"><?= $LANG['H_LOGIN'] ?></button>
						</form>
					</span>
            <?php
        }
        ?>
</nav>