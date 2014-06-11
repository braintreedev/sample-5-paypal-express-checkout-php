<?php

class PayPal {
  private $config;

  private $urls = array(
    "sandbox" => array(
      "api"  => "https://api-3t.sandbox.paypal.com/nvp",
      "redirect"  => "https://www.sandbox.paypal.com/webscr",
    ),
    "live" => array(
      "api"  => "https://api-3t.sandbox.paypal.com/nvp",
      "redirect"  => "https://www.sandbox.paypal.com/webscr",
    )
  );

  public function __construct($config) {
    $this->config = $config;
  }

  public function call($options = []) {
    $options = array_merge($options, $this->config);
    return $this->_curl($this->api_url(), $options);
  }

  public function redirect($response) {
    $redirect_url = sprintf("%s?cmd=_express-checkout&token=%s", $this->redirect_url(), $response["TOKEN"]);
    header("Location: $redirect_url");
  }

  private function redirect_url() {
    return $this->urls[$this->config["environment"]]["redirect"];
  }

  private function api_url() {
    return $this->urls[$this->config["environment"]]["api"];
  }

  private function _curl($url, $values) {
    $curl = curl_init($url);

    $options = array(
      CURLOPT_VERBOSE  => true,
      CURLOPT_RETURNTRANSFER  => true,
      CURLOPT_POSTFIELDS  => http_build_query($values),
      CURLOPT_CUSTOMREQUEST  => "POST",
      CURLOPT_TIMEOUT  => 10
    );

    curl_setopt_array($curl, $options);
    $rep = curl_exec($curl);

    parse_str($rep, $response);
    curl_close($curl);

    return $response;
  }
}
