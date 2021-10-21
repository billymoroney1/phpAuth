<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="project.css">
</head>
<body>

	<?php echo file_get_contents("header.html"); ?>

	<?php 

	$url = $_SERVER['REQUEST_URI'];
	
	switch(true){
		case ($url == "/login"):
			echo file_get_contents("login.html");
		break;
		case ($url == "/register"):
			echo file_get_contents("register.html");
		break;
	}

	?>

	<?php echo file_get_contents("footer.html"); ?>

</body>
</html>

