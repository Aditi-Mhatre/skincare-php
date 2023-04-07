<?php
    include('main.php');
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    $firstname = $_POST['first-name'];
    $lastname = $_POST['last-name'];
    $email = $_POST['email'];
    $pwd = $_POST['password'];

    $sql_query = "INSERT INTO user_list(firstname, lastname, email, pwd)
            VALUES('$firstname', '$lastname', '$email', '$pwd')";

    if ($conn->query($sql_query) === FALSE) {
    echo "New record created successfully";
    } else {
    echo "Error: " . $sql_query . "<br>" . $conn->error;
    }

?>