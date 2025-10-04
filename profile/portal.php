<?php
include_once('../config/symbini.php');
header('Content-Type: text/html; charset='.$CHARSET);

if (!isset($SYMB_UID) || !$SYMB_UID) {
    header('Location: '.$CLIENT_ROOT.'/profile/index-wrapper-login.php'); // login
    exit;
}
?>
<!DOCTYPE html>
<html lang="<?= $LANG_TAG ?>">
<head>
    <title><?= $DEFAULT_TITLE; ?></title>
    <?php include_once($SERVER_ROOT.'/includes/head.php'); ?>

</head>
<body>
<?php include($SERVER_ROOT.'/includes/header.php'); ?>

<main id="innertext" role="main" style="min-height: 40vh;">



</main>

<?php include($SERVER_ROOT.'/includes/footer.php'); ?>
</body>
</html>
