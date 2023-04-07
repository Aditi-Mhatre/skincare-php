
<?php
include('index.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: profile.php");
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Login | Pure Fusion</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="/skincare/styles.css">
        <link rel="shortcut icon" type="image/png" href="/skincare/img/favicon.png"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="animation.js" async></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <?php
        include('navbar-main.php');
    ?>
    <body>
        <div class="form">
            <h2>LOGIN</h2>
            <form action="" method="post">
                <label for="email">Email Address</label><br>
                <input type="email" name="email" id="email" required><br><br>
                <label for="password">Password</label><br>
                <input type="password" name="password" id="password" required><br>
                <span><a href="#forgot">Forgot password?</a></span><br><br>
                <input type="submit" name="submit" id="submit-btn" value="Login"><br><br>
            </form>
            <div class="create-account">
                <span>Don't have an account yet?</span><br>
                <p><a href="/skincare/register-form.php">Create Account</a></p>
            </div>
        </div>
    </body>
    <?php
     include('footer.php');
    ?>
</html>