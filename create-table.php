<?php
    include 'main.php';

    //Check connection
    if (!$handler){
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully";

    $the_query = "CREATE TABLE user_list(
        id INT(6) AUTO_INCREMENT NOT NULL UNIQUE PRIMARY KEY,
        firstname VARCHAR(30) NOT NULL,
        lastname VARCHAR(30) NOT NULL,
        email VARCHAR(50) NOT NULL UNIQUE,
        pwd VARCHAR(30) NOT NULL)";

    $the_query1 = "CREATE TABLE subscriber_list(
        sub_id INT(6) AUTO_INCREMENT NOT NULL UNIQUE PRIMARY KEY,
        email VARCHAR(50) NOT NULL UNIQUE)";

    mysqli_query($handler, $the_query);
    mysqli_query($handler, $the_query1);
?>