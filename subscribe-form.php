<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<div class="container">
    <hr>
    <form action="" method="post" id="subscription-box" class="subscription-box">
        <h3 class="subscribe-label">Subscribe to our newsletter to get special offers!</h3>
        <input type="email" name="sub_email" id="sub_email" placeholder="someone@example.com" required>
        <input class="subscribe-btn" value="subscribe" type="submit" name="subscribe">
    </form>
</div>

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