<?php

require('includes/config.php');
require('includes/paypal.php');

$paypal = new PayPal($config);

$result = $paypal->call(array(
  'method'  => 'SetExpressCheckout',
  'paymentrequest_0_paymentaction' => 'sale',
  'paymentrequest_0_amt'  => '19.99',
  'paymentrequest_0_currencycode'  => 'USD',
  'returnurl'  => 'http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']).'/success.php',
  'cancelurl'  => 'http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']).'/cancel.php',
));

if ($result['ACK'] == 'Success') {
  $paypal->redirect($result);
} else {
  echo 'Handle the payment creation failure <br>';
}