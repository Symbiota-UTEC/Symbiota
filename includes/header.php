<?php
if($LANG_TAG == 'en' || !file_exists($SERVER_ROOT.'/content/lang/templates/header.' . $LANG_TAG . '.php'))
	include_once($SERVER_ROOT . '/content/lang/templates/header.en.php');
else include_once($SERVER_ROOT . '/content/lang/templates/header.' . $LANG_TAG . '.php');
$collectionSearchPage = !empty($SHOULD_USE_HARVESTPARAMS) ? '/collections/index.php' : '/collections/search/index.php';
?>
<div class="header-wrapper">
    <link rel="stylesheet" href="<?= $CLIENT_ROOT ?>/css/xd.css?v=1">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">

    <header>
		<div class="top-wrapper">
			<nav class="top-login" aria-label="horizontal-nav">
				<?php
				if ($USER_DISPLAY_NAME) {
                    $CR = rtrim($CLIENT_ROOT, '/');
                    $uid = isset($SYMB_UID) ? (int)$SYMB_UID : 0;
					?>
                    <div class="navbar-container">
                        <nav role="navigation" class="navbar-menu w-nav-menu">
                            <div class="navbar-menu-link-wrapper">
                                <a href="<?= $CR ?>/collections/selectinsertionmethod.php" class="navbar-link w-nav-link">Insertar Datos</a>

                                <div class="navbar-button-wrapper">
                                    <!-- “Mi Perfil” lleva al viewprofile real -->
                                    <a href="<?= $CR ?>/profile/viewprofile.php<?= $uid ? '?userid='.$uid : '' ?>" class="button is-navbar w-inline-block">
                                        <div class="button-text-item">Mi Perfil</div>
                                    </a>
                                </div>

                                <div class="navbar-button-wrapper">
                                    <a href="<?= $CR ?>/profile/index-wrapper-login.php" class="button is-navbar w-inline-block">
                                        <div class="button-text-item">Cerrar Sesión</div>
                                    </a>
                                </div>
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
			<div class="top-brand">
				<a href="<?= $CLIENT_ROOT ?>">
					<!-- <div class="image-container">
						<img src="<?= $CLIENT_ROOT ?>/images/layout/logo_symbiota.png" alt="Symbiota logo">
					</div> -->
				</a>

			</div>
		</div>
		<div class="menu-wrapper">
            <!-- Hamburger icon -->
			<input class="side-menu" type="checkbox" id="side-menu" name="side-menu" />
			<label class="hamb hamb-line hamb-label" for="side-menu" tabindex="0">☰</label>
			<!-- Menu -->
			<nav class="top-menu" aria-label="hamburger-nav">
				<ul class="menu">
					<li>
						<a href="<?= $CLIENT_ROOT ?>/index.php">
							<?= $LANG['H_HOME'] ?>
						</a>
					</li>
					<li>
						<a href="<?= $CLIENT_ROOT . $collectionSearchPage ?>">
							<?= $LANG['H_SEARCH'] ?>
						</a>
					</li>
					<li>
						<a href="<?= $CLIENT_ROOT ?>/collections/map/index.php" rel="noopener noreferrer">
							<?= $LANG['H_MAP_SEARCH'] ?>
						</a>
					</li>
					<li>
						<a href="<?= $CLIENT_ROOT ?>/checklists/index.php">
							<?= $LANG['H_INVENTORIES'] ?>
						</a>
					</li>
					<li>
						<a href="<?= $CLIENT_ROOT ?>/imagelib/search.php">
							<?= $LANG['H_IMAGES'] ?>
						</a>
					</li>
					<li>
						<a href="<?= $CLIENT_ROOT ?>/includes/usagepolicy.php">
							<?= $LANG['H_DATA_USAGE'] ?>
						</a>
					</li>
					<li>
						<a href='<?= $CLIENT_ROOT ?>/sitemap.php'>
							<?= $LANG['H_SITEMAP'] ?>
						</a>
					</li>

				</ul>
			</nav>
		</div>
		<div id="end-nav"></div>
	</header>
<!--    <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=68df53afeb89388e97507271" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>-->
    <script src="<?= $CLIENT_ROOT ?>/js/webflow.js" defer></script>
</div>
