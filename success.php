<?php

require('includes/config.php');
require('includes/paypal.php');

$paypal = new PayPal($config);

$result = $paypal->call(array(
  'method'  => 'DoExpressCheckoutPayment',
  'paymentrequest_0_paymentaction' => 'sale',
  'paymentrequest_0_amt'  => '19.99',
  'paymentrequest_0_currencycode'  => 'USD',
  'token'  => $_GET['token'],
  'payerid'  => $_GET['PayerID'],
));

if ($result['PAYMENTINFO_0_PAYMENTSTATUS'] == 'Completed') {
  echo 'Payment completed';
} else {
  echo 'Handle payment execution failure';
}
