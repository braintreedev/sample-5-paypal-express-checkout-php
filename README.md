# Using the PayPal Express Checkout API in PHP to make a PayPal payment

[![Build Status](https://travis-ci.org/commercefactory/005-paypal-express-checkout-php.svg?branch=master)](https://travis-ci.org/commercefactory/005-paypal-express-checkout-php)

This is an example of the PayPal Express Checkout API using plain PHP to make a PayPal payment.

This code does not use an SDK although it uses a basic wrapper to handle the NVP API. You can use [this library](includes/paypal.php) as a drop in for your project.

## Technology

This demo uses

* PHP

## Running the demo

* Run `php -S 127.0.0.1:8080` to start the app (requires PHP 5.4 or above) or load it in your web server of choice.
* Visit `http://127.0.0.1:8080/` in your browser
* Click the __"Make a payment"__ link
* You will be redirected to PayPal
* Login using the following credentials:
  * Username: `us-customer@commercefactory.org`
  * Password: `test1234`
* Complete the payment instructions
* You will receive a message that says __"Payment completed"__

## Running the test

* Requirements:
  * [Firefox](http://getfirefox.com) with the [Selenium IDE](http://seleniumhq.org/projects/ide/plugins.html)
  * PHP 5.4
* Start the app by running `php -S 127.0.0.1:8080`
* Load the [test script](tests/payment.html) in the Selenium IDE and run the script. Note if you are running the webserver of your choice you will need to change the base url in the test script to match.

## Useful link

* [List of methods available on the Merchant API](https://developer.paypal.com/docs/classic/api/#merchant)
