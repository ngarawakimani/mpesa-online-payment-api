<?php

    include ("connect.php");
     
    $url = 'https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest';
    $Bearer = '6kDGVSY12tqA0zZRZA8RZAp1gD5b';
    $Passkey = 'bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919';
    $BusinessShortcode = '174379';
    $CallBackURL ='https://legibratest.com/apitest/mpesa/callback.php';

    $amount = "20";
    $phone_number = '254'.substr($_POST['phone'], 1); //"254708374149"; 
    $AccountReference = 'DW43FDF43';
    $TransactionDesc = 'A description of the transaction.';

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json','Authorization:Bearer '.$Bearer)); //setting custom header

    $timestamp = date("YmdHis", time());

    //base 64 encode BusinessShortcode, Passkey and Timestamp.
    //$password = base64_encode(hash_hmac('sha1', '174379', 'bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919',$timestamp));
    $password = \base64_encode($BusinessShortcode . $Passkey . $timestamp);

    $curl_post_data = array(
      //Fill in the request parameters with valid values
      'BusinessShortCode' => $BusinessShortcode,
      'Password' => $password,
      'Timestamp' => $timestamp,
      'TransactionType' => 'CustomerPayBillOnline',
      'Amount' => $amount,
      'PartyA' => $phone_number,
      'PartyB' => $BusinessShortcode,
      'PhoneNumber' => $phone_number,
      'CallBackURL' => $CallBackURL,
      'AccountReference' => $AccountReference,
      'TransactionDesc' => $TransactionDesc
    );

    $data_string = json_encode($curl_post_data);

    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);

    $curl_response = curl_exec($curl);
    //print_r($curl_response);
    $data = json_decode($curl_response, true);
    //print_r($data);
    $error = "";
    @$error = $data["errorMessage"];

    @$msg = $data["ResponseDescription"];

    @$checkoutRequestID = $data["CheckoutRequestID"];

    if ($msg=="Success. Request accepted for processing" && $error=="") {
      echo $msg;
      //echo $data["CheckoutRequestID"];
      
      $query = "INSERT INTO `online` (`id`, `checkoutRequestID`) VALUES (NULL, '".$checkoutRequestID."');";
      
      $result = mysqli_query($connection,$query);
      
      if($result){
          echo "<br/>successs";
      }else{
          echo "fail";
      }
    } else {
      echo $error;
    }


?>
