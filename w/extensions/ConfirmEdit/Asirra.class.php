<?php
/**
 * @author Bachsau
 * @author Niklas Laxström
 */

class Asirra extends SimpleCaptcha {
	public $asirra_clientscript = '//challenge.asirra.com/js/AsirraClientSide.js';

	// As we don't have to store anything but some other things to do,
	// we're going to replace that constructor completely.
	function __construct() {
		global $wgExtensionAssetsPath;
		$this->asirra_localpath = "$wgExtensionAssetsPath/ConfirmEdit";
	}

	function getForm() {
		global $wgOut;

		$wgOut->addModules( 'ext.confirmEdit.asirra' );
		$js = Html::linkedScript( $this->asirra_clientscript );

		$message = Xml::encodeJsVar( wfMessage( 'asirra-createaccount-fail' )->plain() );
		$js .= Html::inlineScript( <<<JAVASCRIPT
var asirra_js_failed = '$message';
JAVASCRIPT
		);
		$js .=  '<noscript>' . wfMessage( 'asirra-nojs' )->parse() . '</noscript>';
		return $js;
	}

	function getMessage( $action ) {
		$name = 'asirra-' . $action;
		$text = wfMessage( $name )->text();
		# Obtain a more tailored message, if possible, otherwise, fall
		# back to the default for edits
		return wfMessage( $name, $text )->isDisabled() ? wfMessage( 'asirra-edit' )->text() : $text;
	}

	function passCaptcha() {
		global $wgRequest;

		$ticket = $wgRequest->getVal( 'Asirra_Ticket' );
		$api = 'http://challenge.asirra.com/cgi/Asirra?';
		$params = array(
			'action' => 'ValidateTicket',
			'ticket' => $ticket,
		);

		$response = Http::get( $api . wfArrayToCgi( $params ) );
		$xml = simplexml_load_string( $response );
		$result = $xml->xpath( '/AsirraValidation/Result' );
		return strval( $result[0] ) === 'Pass';
	}
}
