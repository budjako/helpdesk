<?php
	require_once('connect.php');
	$ticketid = $_POST['id'];
	$description =$_POST['input'];
	$query = "INSERT INTO tickets (status) VALUES (2)";
	$result = mysql_query($query);
	if(!$result) die(mysql_error());
	$query = "INSERT INTO threads (t_id, respondent, datesubmit, body) VALUES ($ticketid, 0, NOW(), '$description')";
	$result = mysql_query($query);
		if($result){
			echo "Your reply has been sent!";
		}
?>	