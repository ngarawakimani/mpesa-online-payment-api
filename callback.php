<?php

    include ("connect.php");

    $callbackJSONData = file_get_contents('php://input');
    $callbackData = json_decode($callbackJSONData);
    $resultCode = $callbackData->stkCallback->ResultCode;
    $resultDesc = $callbackData->stkCallback->ResultDesc;
    $merchantRequestID = $callbackData->stkCallback->MerchantRequestID;
    $checkoutRequestID = $callbackData->stkCallback->CheckoutRequestID;
    $amount = $callbackData->stkCallback->CallbackMetadata->Item[0]->Value;
    $mpesaReceiptNumber = $callbackData->stkCallback->CallbackMetadata->Item[1]->Value;
    $balance = $callbackData->stkCallback->CallbackMetadata->Item[2]->Value;
    $b2CUtilityAccountAvailableFunds = $callbackData->stkCallback->CallbackMetadata->Item[3]->Value;
    $transactionDate = $callbackData->stkCallback->CallbackMetadata->Item[4]->Value;
    $phoneNumber = $callbackData->stkCallback->CallbackMetadata->Item[5]->Value;

    
    // $resultCode = "fsdfs";
    // $resultDesc = "fsdfs";
    // $merchantRequestID = "fsdfs";
    // $checkoutRequestID = "ws_CO_27112017154942672";
    // $amount = "fsdfs";
    // $mpesaReceiptNumber = "fsdfs";
    // $balance = "fsdfs";
    // $b2CUtilityAccountAvailableFunds = "fsdfs";
    // $transactionDate = "fsdfs";
    // $phoneNumber = "fsdfs";


    //$query = "INSERT INTO `online` (`id`, `resultCode`, `resultDesc`, `merchantRequestID`, `checkoutRequestID`, `amount`, `mpesaReceiptNumber`, `balance`, `b2CUtilityAccountAvailableFunds`, `transactionDate`, `phoneNumber`) VALUES 
    //(NULL, '".$resultCode."', '".$resultDesc."', '".$merchantRequestID."', '".$checkoutRequestID."', '".$amount."', '".$mpesaReceiptNumber."', '".$balance."', '".$b2CUtilityAccountAvailableFunds."', '".$transactionDate."', '".$phoneNumber."');";
    
    $query = "UPDATE `online` SET `resultCode` = '".$resultCode."', `resultDesc` = '".$resultDesc."', `merchantRequestID` = '".$merchantRequestID."', `amount` = '".$amount."', `mpesaReceiptNumber` = '".$mpesaReceiptNumber."', `balance` = '".$balance."', `b2CUtilityAccountAvailableFunds` = '".$b2CUtilityAccountAvailableFunds."', `transactionDate` = '".$transactionDate."', `phoneNumber` = '".$phoneNumber."' WHERE `online`.`checkoutRequestID` = '".$checkoutRequestID."'";

    $result = mysqli_query($connection, $query);
    
    if($result){
        echo "successs";
    }else{
        echo "fail";
    }
?>