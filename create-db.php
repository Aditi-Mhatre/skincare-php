<?php
    //MySQLi
    $servername = "127.0.0.1";
    $username = "username";
    $password = "password";

    //Create connection
    $handler = mysqli_connect($servername, $username, $password);

    //Check connection
    if (!$handler){
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully<br>";

    if (mysqli_query($handler, 'CREATE DATABASE mydb')){
        echo "Database created successfully";
    }else{
        echo "Error creating database: " .mysqli_error($handler);
    }
?>