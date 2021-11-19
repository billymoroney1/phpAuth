<?php

// Initialize the session
session_start();
 
// Include config file
$conf = $_SERVER['DOCUMENT_ROOT']."/test";
$conf .= "/config.php";

include_once($conf);

//define variables
$title = $body = "";

IF($_SERVER["REQUEST_METHOD"] == "POST"){
    //Check if title is empty
    if(empty(trim($_POST["title"]))){
        $title_err = "Please enter title.";
    } else {
        $title = trim($_POST["title"]);
    }

    //Check if body is empty
    if(empty(trim($_POST["body"]))){
        $body_err = "Please enter body.";
    } else {
        $body = trim($_POST["body"]);
    }

    if(empty($title_err) && empty($body_err)){
        //Prepare a select statement
        $sql = "INSERT INTO content (title, body) VALUES (?, ?)";
        if($stmt = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param($stmt, "ss", $title, $body);
            $stmt->execute();
            $stmt->close();
            mysqli_close($link);
            header("location: welcome");
        }
        
    }
}

?>



<h1>Write Document</h1>
<div class="form-wrapper">
    <form action="" method="post">
        <div class="form-group">
            <label>Title</label>
            <input type="text" name="title">
        </div>
        <div class="form-group">
            <label>Text</label>
            <textarea name="body">
                Write here....
            </textarea>
        </div>
        <div class='form-group'>
            <input type="submit" class='btn' value="write">
        </div>
    </form>
</div>