<?php
	$link = mysql_connect('localhost', 'OsamHelpDesk', '*osamhelpdesk*');

	if (!$link) {
		die('Could not connect: ' . mysql_error());
	}
	mysql_select_db("helpdesk");
	/*
	$query = "SELECT * FROM concern";

	$result = mysql_query($query);

	if (!$result) {
		$message  = 'Invalid query: ' . mysql_error() . "\n";
		$message .= 'Whole query: ' . $query;
		die($message);
	}*/
?>