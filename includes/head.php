<?php
///*
//** Style sheets are determined by $CSS_BASE_PATH set within config/symbini.php
//** Customization can be made by modifying css files, $CSS_BASE_PATH, adding new css files below
//*/
//?>
<!--<!-- Responsive viewport -->
<!--<meta name="viewport" content="width=device-width, initial-scale=1.0">-->
<!---->
<!--<!-- Symbiota styles -->
<!--<link href="--><?php //= $CSS_BASE_PATH ?><!--/symbiota/header.css?ver=--><?php //= $CSS_VERSION ?><!--" type="text/css" rel="stylesheet">-->
<!--<link href="--><?php //= $CSS_BASE_PATH ?><!--/symbiota/footer.css?ver=--><?php //= $CSS_VERSION ?><!--" type="text/css" rel="stylesheet">-->
<!--<link href="--><?php //= $CSS_BASE_PATH ?><!--/symbiota/main.css?ver=--><?php //= $CSS_VERSION ?><!--" type="text/css" rel="stylesheet">-->
<!--<link href="--><?php //= $CSS_BASE_PATH ?><!--/symbiota/customizations.css?ver=--><?php //= $CSS_VERSION ?><!--" type="text/css" rel="stylesheet">-->
<?php
//if($ACCESSIBILITY_ACTIVE){
//	?>
<!--	<link href="--><?php //= $CSS_BASE_PATH ?><!--/symbiota/accessibility-compliant.css?ver=--><?php //= $CSS_VERSION ?><!--" type="text/css" rel="stylesheet" data-accessibility-link="accessibility-css-link" >-->
<!--	<link href="--><?php //= $CSS_BASE_PATH ?><!--/symbiota/condensed.css?ver=--><?php //= $CSS_VERSION ?><!--" type="text/css" rel="stylesheet" data-accessibility-link="accessibility-css-link" disabled >-->
<!--	--><?php
//} else{
//	?>
<!--	<link href="--><?php //= $CSS_BASE_PATH ?><!--/symbiota/accessibility-compliant.css?ver=--><?php //= $CSS_VERSION ?><!--" type="text/css" rel="stylesheet" data-accessibility-link="accessibility-css-link" disabled >-->
<!--	<link href="--><?php //= $CSS_BASE_PATH ?><!--/symbiota/condensed.css?ver=--><?php //= $CSS_VERSION ?><!--" type="text/css" rel="stylesheet" data-accessibility-link="accessibility-css-link" >-->
<!--	--><?php
//}
//?>
<!---->
<!--<script src="--><?php //= $CLIENT_ROOT ?><!--/js/symb/lang.js" type="text/javascript"></script>-->
<?php
include_once __DIR__ . '/../config/symbini.php';
?>

<link href='<?= $CLIENT_ROOT ?>/css/webflow.css' rel="stylesheet" type="text/css">
<link href='<?= $CLIENT_ROOT ?>/css/juan-diegos-sublime-site-674d7d.webflow.css' rel="stylesheet" type="text/css">
