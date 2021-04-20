<?php

    $db['db_host']="localhost";
    $db['db_user']="root";
    $db['db_pass']="123";
    $db['db_name']="sms";

    
    foreach($db as $key => $value){
        define(strtoupper($key),$value);
    }

    $conection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
  
    if(!$conection){
        echo "we are not connected";
    }
?>