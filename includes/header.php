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

            <link rel="stylesheet" href="<?= $CLIENT_ROOT ?>/css/font.css">
            <?php include_once($SERVER_ROOT . '/includes/navbar.php'); ?>
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
            <style>
                /* Make wrapper a centering container */
                .menu-wrapper {
                    display: flex !important;        /* override possible grid/legacy styles */
                    justify-content: center !important;
                    padding: 0 !important;           /* remove side padding that offsets centering */
                }

                /* Center the black bar inside the wrapper */
                .menu-wrapper > nav.top-menu {
                    background: #000;
                    width: 100%;
                    max-width: 1200px;               /* set your desired content width */
                    margin: 0 auto;                  /* centers within wrapper */
                }

                /* Center the links inside the bar */
                .menu-wrapper > nav.top-menu > .menu {
                    display: flex !important;
                    justify-content: center !important;
                    align-items: center;
                    gap: 32px;
                    list-style: none;
                    margin: 0;
                    padding: 12px 20px;
                }

                /* kill conflicting floats/grow */
                .menu-wrapper > nav.top-menu > .menu > li { float: none !important; flex: 0 0 auto !important; }
                .menu-wrapper > nav.top-menu a { color:#fff; text-decoration:none; font-weight:600; }
                .menu-wrapper > nav.top-menu a:hover { text-decoration: underline; text-underline-offset: 3px; }
            </style>
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
