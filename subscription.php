<?php


include 'main.php';
    // Create connection
    if(isset($_POST['subscribe'])) {
        $sub_email = $_POST['sub_email'];

        $sql_query = "INSERT INTO subscriber_list(email) VALUES('$sub_email')";

        if ($handler->query($sql_query) === FALSE) {
        echo "Error: " . $sql_query . "<br>" . $handler->error;
        }else{
            echo '<div id="success">Your contact information is received successfully!</div>';
        }
    }

?>