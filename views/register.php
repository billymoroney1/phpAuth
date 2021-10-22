<?php 
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/util/auth/register_script.php";

    $conf = $_SERVER['DOCUMENT_ROOT'];
    $conf .= "/config.php";

    include_once($path);
    include_once ($conf);

    //Define variables
    $username = $password = $confirm_password = "";
    $username_err = $password_err = $confirm_password_err = "";

    //Process form data when submitted
    if($_SERVER["REQUEST_METHOD"] == "POST"){

        //Validate username
        if(empty(trim($_POST["username"]))){
            $username_err = "please entera username.";
        } elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["username"]))){
            $username_err = "username can only contain letters, numbers, and underscores.";
        } else{
            //Prepare select statement
            $sql = "SELECT id FROM users WHERE username = ?";

            if($stmt = mysqli_prepare($link, $sql)){
                //Bind variables to the prepared statement as parameters
                mysqli_stmt_bind_param($stmt, "s", $param_username);

                //Set parameters
                $param_username = trim($_POST["username"]);

                //Attempt to execute the prepared statement
                //https://www.tutorialrepublic.com/php-tutorial/php-mysql-login-system.php
            }
        })
    }

?>

<form>
    <input id="username" type="text" placeholder="Username..."></input>
    <input id="password" type="text" placeholder="Password..."></input>
    <input id="re-password" type="text" placeholder="Re-Enter Password..."></input>
    <input type="submit" value="Register">
</form>