<?php 
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: welcome");
    exit;
}
?>

<a href='login'>Sign In</a>
<a href='register'>Register</a>