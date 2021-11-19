<?php
//Initialize the session
session_start();

//Check if user is logged in, if not then redirect to login
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<h1>Welcome, <?php echo $_SESSION['username'];?></h1>
<a href='write'>Write</a>
<a href="logout" class="btn">Sign Out of Your Account</a>