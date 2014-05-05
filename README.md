# Using the PayPal REST API in Sinatra to make a PayPal payment

[![Build Status](https://travis-ci.org/commercefactory/001-paypal-rest-sinatra-paypal-payment.svg?branch=master)](https://travis-ci.org/commercefactory/001-paypal-rest-sinatra-paypal-payment)

This is an example of the PayPal Express Checkout API using plain PHP to make a PayPal payment.

## Technology

This demo uses

* PHP 5.4 or higher

## Running the demo

* Run `php -S 127.0.0.1:8080` to start the app
* Visit `http://127.0.0.1:8080/` in your browser
* You will be redirected to PayPal
* Login using the following credentials:
  * Username: `us-customer@commercefactory.org`
  * Password: `test1234`
* Complete the payment instructions
* You will receive a message that says __"Payment completed"__