<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/project.css">
</head>
<body>

	<?php echo file_get_contents("html/header.html"); ?>

	<?php 

	$url = $_SERVER['REQUEST_URI'];
		
	switch(true){
		case ($url == "/test/login"):
			echo file_get_contents("html/login.html");
		break;
		case ($url == "/test/register"):
			echo file_get_contents("html/register.html");
		break;
	}

	?>

	<?php echo file_get_contents("html/footer.html"); ?>

</body>
</html>

