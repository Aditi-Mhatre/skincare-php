<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Sign Up | Pure Fusion</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="/skincare/styles.css">
        <link rel="shortcut icon" type="image/png" href="/skincare/img/favicon.png"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <?php
        include('navbar-main.php');
    ?>
    <body>
        <div class="form">
            <h2>CREATE AN ACCOUNT</h2>
            <form action="" method="post">
                <label for="first-name">First Name</label><br>
                <input type="text" name="first-name" id="first-name" required><br>
                <label for="last-name">Last Name</label><br>
                <input type="text" name="last-name" id="last-name" required><br>
                <label for="email">Email Address</label><br>
                <input type="email" name="email" id="email" required><br>
                <label for="password">Password</label><br>
                <input type="password" name="password" id="password" min-length="6" required><br>
                <span id="password-length">Must be at least 6 characters long</span><br><br>
                <label for="password-repeat">Re-enter Password</label><br>
                <input type="password" name="password-repeat" id="password-repeat" required><br><br>
                <span id="correct-msg" style="color: #00ffff; display: none;">Passwords match!</span>
                <span id="wrong-msg" style="color: #ff0000; display: none;">Passwords do not match!</span>
                <div id="disclaimer">By creating a PureFusion profile you consent to PureFusion's <u>Terms & Conditions</u> and <u>Privacy Policy</u></div>
                <input type="submit" name="submit" id="submit-btn" value="Create Account"><br><br>
            </form>
            <div class="create-account">
                <span>Already have an account?</span><br>
                <p><a href="/skincare/login.php">Login</a></p>
            </div>
        </div>
    </body>
    <?php
     include('footer.php');
    ?> 

</html>