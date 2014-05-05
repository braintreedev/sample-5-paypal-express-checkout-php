<?php

require("includes/config.php");
require("includes/paypal.php");

$paypal = new PayPal($config);

$result = $paypal->call(array(
  "method" => "SetExpressCheckout",
  "paymentrequest_0_paymentaction" => "sale",
  "paymentrequest_0_amt" => "19.99",
  "paymentrequest_0_currencycode" => "USD",
  "returnurl" => "http://127.0.0.1:8080/success.php",
  "cancelurl" => "http://127.0.0.1:8080/cancel.php",
));

if ($result["ACK"] == 'Success') {
  $paypal->redirect($result);
} else {
  echo "Handle the payment creation failure";
}