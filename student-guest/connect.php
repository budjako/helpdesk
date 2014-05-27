<?php
	$link = mysql_connect('localhost', 'OsamHelpDesk','*osamhelpdesk*' );

	if (!$link) {
		die('Could not connect: ' . mysql_error());
	}
	mysql_select_db("helpdesk");
	
?>