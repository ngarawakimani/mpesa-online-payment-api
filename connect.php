<?php

    $dbname = "mpesa";
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";

	$connection = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
	//$connection = mysqli_select_db($conn,$dbname);
    $response = "";
    if ($connection) {
        //$response = "success";
    }else{
        //$response = "db fail";
    }

?>