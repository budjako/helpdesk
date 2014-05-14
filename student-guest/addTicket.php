<?php
// TYPE can be:
	// -Inquiry 0
	// -Feedback 1
	include_once('connect.php');
	session_start();
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$email = $_POST['email'];
		$type = $_POST['type'];
		$subject = $_POST['subject'];
		$division = $_POST['division'];
		$tags = $_POST['tags'];
		$description = $_POST['description'];
	if($type=='Inquiry') $type=0; else $type=1;
	if(!empty($_SESSION['username'])){
		$username = $_SESSION['username'];
		$sql = "INSERT INTO tickets VALUES ('','$subject',NOW(),'tags', '$division', 0, NOW(), '$type', '$username', NULL, NULL)";
		var_dump($sql);
	}
	else{
		$sql = "INSERT INTO tickets VALUES ('','$subject', NOW(), 'tags', '$division', 0, NOW(), '$type', NULL, NULL, NULL )";
	}
	$result = mysql_query($sql);
	var_dump($result);
	if($result)
		echo "Successfully Added! ";
	else
		echo "There's something wrong OH ow!"
	
?>