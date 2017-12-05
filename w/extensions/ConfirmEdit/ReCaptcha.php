<?php

/**
 * Captcha class using the reCAPTCHA widget.
 * Stop Spam. Read Books.
 *
 * @addtogroup Extensions
 * @author Mike Crawford <mike.crawford@gmail.com>
 * @copyright Copyright (c) 2007 reCAPTCHA -- http://recaptcha.net
 * @licence MIT/X11
 */

if ( !defined( 'MEDIAWIKI' ) ) {
	exit;
}

$dir = __DIR__;
require_once $dir . '/ConfirmEdit.php';
$wgCaptchaClass = 'ReCaptcha';

$wgExtensionMessagesFiles['ReCaptcha'] = $dir . '/ReCaptcha.i18n.php';

$wgAutoloadClasses['ReCaptcha'] = $dir . '/ReCaptcha.class.php';

require_once( 'recaptchalib.php' );

// Set these in LocalSettings.php
$wgReCaptchaPublicKey = '';
$wgReCaptchaPrivateKey = '';
// For backwards compatibility
$recaptcha_public_key = '';
$recaptcha_private_key = '';

/**
 * Sets the theme for ReCaptcha
 *
 * See http://code.google.com/apis/recaptcha/docs/customization.html
 */
$wgReCaptchaTheme = 'red';

$wgExtensionFunctions[] = 'efReCaptcha';

/**
 * Make sure the keys are defined.
 */
function efReCaptcha() {
	global $wgReCaptchaPublicKey, $wgReCaptchaPrivateKey;
	global $recaptcha_public_key, $recaptcha_private_key;
	global $wgServerName;

	// Backwards compatibility
	if ( $wgReCaptchaPublicKey == '' ) {
		$wgReCaptchaPublicKey = $recaptcha_public_key;
	}
	if ( $wgReCaptchaPrivateKey == '' ) {
		$wgReCaptchaPrivateKey = $recaptcha_private_key;
	}

	if ( $wgReCaptchaPublicKey == '' || $wgReCaptchaPrivateKey == '' ) {
		die ( 'You need to set $wgReCaptchaPrivateKey and $wgReCaptchaPublicKey in LocalSettings.php to ' .
				"use the reCAPTCHA plugin. You can sign up for a key <a href='" .
				htmlentities( recaptcha_get_signup_url ( $wgServerName, "mediawiki" ) ) . "'>here</a>." );
	}
}
