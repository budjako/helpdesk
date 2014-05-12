<?php
	$do_return=0;  
	$inname=filter_var($_POST["inname"], FILTER_SANITIZE_STRING);
	if(!filter_var($inname, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\ \.\-\,]+$/")))){
		$do_return=1;
		echo "Invalid name";
	}
	else echo "okay name";
	$insex=filter_var($_POST["insex"], FILTER_SANITIZE_STRING);
	if(!filter_var($insex, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^male$/")))){
		if(!filter_var($insex, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^female$/")))){
			$do_return=1;
			echo "Invalid sex";
		}
		else echo "okay sex";
	}
	else echo "okay sex";
	$inemail=filter_var($_POST["inemail"], FILTER_SANITIZE_EMAIL);
	if(!filter_var($inemail, FILTER_VALIDATE_EMAIL)){
		$do_return=1;
		echo "Invalid email";
	}
	else echo "okay email";
	$inusername=filter_var($_POST["inusername"], FILTER_SANITIZE_STRING);
	if(!filter_var($inusername, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z][a-zA-Z0-9_]{3,11}$/")))){
		$do_return=1;
		echo "Invalid username";
	}
	else echo "okay username";
	
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Exercise</title>
		<link rel="stylesheet" type="text/css" href="css/styles.css">
	</head>
	<body>
		<div id="status">
		</div>
	</body>
</html>