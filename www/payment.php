<?php

// Require the config file
// It contains secret info
require '../config.inc.php';

// Require Payment Express Library
require 'PxPay_Curl.inc.php';

// Create an instance of the PxPay Curl class
$pxpay = new PxPay_Curl('https://sec.paymentexpress.com/pxpay/pxaccess.aspx', PXPAY_ID, PXPAY_KEY);

// Create an instance of the PxPay Request Object
$request = new PxPayRequest();

// Hardcode a grand total
// Replace this with the total of your card contents
$grandTotal = 120;

// Put information about the transaction inside the request object
$request->setAmountInput( $grandTotal );
$request->setTxnType( 'Purchase' );
$request->setCurrencyInput( 'NZD' );
$request->setUrlSuccess( PROJECT_ROOT . 'payment-result.php' );
$request->setUrlFail( PROJECT_ROOT . 'payment-result.php' );
$request->setTxnData1( $_POST['name'] );
$request->setTxnData2( $_POST['postal'] );
$request->setEmailAddress( $_POST['email'] );

// Prepare the request as a string to be sent to Payment Express
$requestString = $pxpay->makeRequest( $request );

// Send the data to Payment Express and recieve a URL to be redirected to
$response = new MifMessage( $requestString );

echo '<pre>';
print_r($response);
echo '</pre>';

// Extract the URL form the response
$urlToGoTo = $response->get_element_text('URI');

// Redirect the user to the provided URL
header('Location: ' . $urlToGoTo);