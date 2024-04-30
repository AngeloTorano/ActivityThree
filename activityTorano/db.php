<?php

    //setting
    $host = "localhost"; //server name - localhost
    $user = "root"; //user - root
    $pass = ""; //password - null
    $database = "2205torano"; //databasename
    //connection

    $connection = mysqli_connect($host, $user, $pass, $database);

    //error message
    if(!$connection){
        die("Connection failed!" . mysqli_connect_error());
    }

?>