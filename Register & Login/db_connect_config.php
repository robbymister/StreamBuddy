<?php

	//$dbServername = "localhost";
    $dbServername = "XXX.XXX.X.XX";
	$dbUsername = "streamie-db";
	$dbPassword = "XXXXXXXXXXXX";
    $dbName = "csc301_db";
    
    $dbconn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

    if(!$dbconn){
        die(" db Connection failed: " . mysqli_connect_error());

        echo ' failed <br> ';
    }else{
        //echo ' connected successfully <br> ';
    }
    
?>
