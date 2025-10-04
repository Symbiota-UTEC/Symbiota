<?php
// Start output buffering to avoid "headers already sent"
ob_start();

include_once('../config/symbini.php');
include_once($SERVER_ROOT.'/classes/ProfileManager.php');
@include_once($SERVER_ROOT.'/content/lang/profile/newprofile.'.$LANG_TAG.'.php');

// In production you don't want notices to break redirects
ini_set('display_errors', '0');
ini_set('log_errors', '1');

session_start(); // if not already started by symbini

$login         = $_POST['login']  ?? '';
$emailAddr     = $_POST['email']  ?? '';
$pwd           = $_POST['pwd']    ?? '';
$pwd2          = $_POST['pwd2']   ?? '';
$action        = $_POST['submit'] ?? '';
$adminRegister = isset($_POST['adminRegister']);

$pHandler  = new ProfileManager();
$displayStr = '';
$useRecaptcha = (isset($RECAPTCHA_PUBLIC_KEY, $RECAPTCHA_PRIVATE_KEY) && $RECAPTCHA_PUBLIC_KEY && $RECAPTCHA_PRIVATE_KEY);

// Only run on the form POST that has the exact submit value
if ($action === 'Create Login') {

    // --- Server-side validations (don’t rely only on JS) ---
    // Username policy (same as your JS regex)
    if (preg_match('/[^0-9A-Za-z_!@#$\-+.]/', $login)) {
        $displayStr = 'Username should only contain 0-9A-Za-z_.!@ (no spaces).';
        goto RENDER; // fall through to render with error
    }

    // Password checks
    if (strlen(trim($pwd)) < 10 || strlen(trim($pwd2)) < 10) {
        $displayStr = 'Password must be at least 10 characters.';
        goto RENDER;
    }
    if ($pwd !== $pwd2) {
        $displayStr = 'Passwords do not match.';
        goto RENDER;
    }

    // Email sanity
    if (!$pHandler->validateEmailAddress($emailAddr)) {
        $displayStr = 'Invalid email address';
        goto RENDER;
    }

    // reCAPTCHA (if configured)
    if ($useRecaptcha) {
        $captcha = $_POST['g-recaptcha-response'] ?? '';
        if (!$captcha) {
            $displayStr = 'Please check the captcha.';
            goto RENDER;
        }
        $verifyUrl = 'https://www.google.com/recaptcha/api/siteverify'
                . '?secret=' . urlencode($RECAPTCHA_PRIVATE_KEY)
                . '&response=' . urlencode($captcha)
                . '&remoteip=' . urlencode($_SERVER['REMOTE_ADDR'] ?? '');
        $response = json_decode(file_get_contents($verifyUrl), true);
        if (empty($response['success'])) {
            $displayStr = 'Recaptcha verification failed';
            goto RENDER;
        }
    }

    // Symbiota username sanitation
    if (!$pHandler->setUserName($login)) {
        $displayStr = 'Invalid username';
        goto RENDER;
    }

    // Uniqueness checks:
    // NOTE: In your original code, loginExists() was called with $emailAddr.
    // If your ProfileManager::loginExists() actually checks emails, keep it.
    // If it checks usernames, call it with $login instead. If you have both,
    // check both. Below is a conservative approach:
    if (method_exists($pHandler, 'loginExists')) {
        // Try to detect expected parameter by name; if unsure, check both.
        if ($pHandler->loginExists($login) || $pHandler->loginExists($emailAddr)) {
            $displayStr = $pHandler->getErrorMessage() ?: 'Login or email already registered';
            goto RENDER;
        }
    }

    // Perform the insert
    $ok = $pHandler->register($_POST, $adminRegister);

    if ($ok) {
        if (!$adminRegister) {
            header('Location: ./index.php');
            ob_end_flush();
            exit;
        } else {
            $_SESSION['adminRegisterSuccessfulUsername'] = $login;
            header('Location: ./usermanagement.php');
            ob_end_flush();
            exit;
        }
    } else {
        $displayStr = 'FAILED: Unable to create user. Please contact the system administrator.';
    }
}

// If we’re here, render the form again (possibly with $displayStr)
RENDER:
ob_end_flush();

// At this point, include/echo your HTML page that contains the form.
// Make sure the form posts to this same file and has:
//   <button type="submit" name="submit" value="Create Login">...</button>
include 'index-wrapper-register.php';
