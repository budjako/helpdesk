<?php
	require_once('connect.php');
	session_start();

	if(!isset($_SESSION['visit'])) $_SESSION['visit'] = array();
	$array = $_SESSION['visit'];
	$input = $_POST['input'];

	if(!in_array($input, $array)){		
		array_push($array, $input);
		$sql = "UPDATE faqs SET visit_count = visit_count + 1 WHERE faqno = $input";
		$result = mysql_query($sql);
		if (!$result) die(mysql_error());
		$_SESSION['visit'] = $array;
	}

?>
