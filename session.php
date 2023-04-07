
<?php
// Establishing Connection with Server 
require('main.php');

session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysqli_query($handler, "select email from user_list where email='$user_check'");
$row = mysqli_fetch_assoc($ses_sql);
$login_session =$row['email'];
if(!isset($login_session)){
mysqli_close($handler); // Closing Connection
header('Location: main-page.php'); // Redirecting To Home Page
}
?>
