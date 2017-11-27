<?php
$url = 'https://sandbox.safaricom.co.ke/mpesa/stkpushquery/v1/query';

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json','Authorization:Bearer SPbeJtcEOUSvsn4tniNcy5lyUEHk')); //setting custom header

$timestamp = date("YmdHis", time());

//base 64 encode BusinessShortcode, Passkey and Timestamp.
//$password = base64_encode(hash_hmac('sha1', '174379', 'bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919',$timestamp));
$password = \base64_encode('174379' . 'bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919' . $timestamp);

$curl_post_data = array(
  //Fill in the request parameters with valid values
  'BusinessShortCode' => '174379',
  'Password' => $password,
  'Timestamp' => $timestamp,
  'CheckoutRequestID' => 'ws_CO_27112017125441861'
);

$data_string = json_encode($curl_post_data);

curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);

$curl_response = curl_exec($curl);
print_r($curl_response);

//echo $curl_response;
?>
