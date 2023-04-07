
<?php

session_start(); // Starting Session
$error=''; // Variable To Store Error Message

require('main.php');


if (isset($_POST['submit'])) {
if (empty($_POST['email']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
}
else
{
// Define $username and $password

$email = $_POST['email'];  
$password = $_POST['password'];  
  
    //to prevent from mysqli injection  
    $email = stripcslashes($email);  
    $password = stripcslashes($password);  
    $email = mysqli_real_escape_string($handler, $email);  
    $password = mysqli_real_escape_string($handler, $password);  
  
    $sql = "select * from user_list where email = '$email' and pwd = '$password'";  
    $result = mysqli_query($handler, $sql);  
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result); 

if ($count == 1) {
$_SESSION['login_user']=$email; // Initializing Session
header("location: profile.php"); // Redirecting To Other Page
} else {
$error = "Username or Password is invalid";
}
mysqli_close($handler); // Closing Connection
}
}
?>
