<?php

// We need the config file
require '../config.inc.php';

// Get the result from the address bar
$result = $_GET['result'];

// We need the PxPay library
require 'PxPay_Curl.inc.php';

// Create an instance of the PxPay Curl class
$pxpay = new PxPay_Curl('https://sec.paymentexpress.com/pxpay/pxaccess.aspx', PXPAY_ID, PXPAY_KEY);

// Decode the response
$response = $pxpay->getResponse( $result );

// Determine the result
if ( $response->getSuccess() == 1 ) {
	// Approved
	echo '<h1>Approved!</h1>';
} else {
	echo '<h1>Declined.</h1>';
}

echo '<pre>';
print_r($response);
echo '</pre>';