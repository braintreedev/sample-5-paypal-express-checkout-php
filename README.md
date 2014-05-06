# Using the PayPal Express Checkout API in PHP to make a PayPal payment

This is an example of the PayPal Express Checkout API using plain PHP to make a PayPal payment.

This code does not use an SDK although it uses a basic wrapper to handle the PHP NVP api.

## Technology

This demo uses

* PHP

## Running the demo

* Run `php -S 127.0.0.1:8080` to start the app (requires PHP 5.4 or above) or load it in your web server of choice.
* Visit `http://127.0.0.1:8080/` in your browser
* You will be redirected to PayPal
* Login using the following credentials:
  * Username: `us-customer@commercefactory.org`
  * Password: `test1234`
* Complete the payment instructions
* You will receive a message that says __"Payment completed"__