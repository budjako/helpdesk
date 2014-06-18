<?php
	$to = "helpdesk.uplbosa@gmail.com";
	$subject = "TEST";
	$body = "Hi,\n\nDid you get this??";
	$headers = 'From: budjako@gmail.com';
	if (mail($to, $subject, $body, $headers)) {
		echo "<p>Message successfully sent to ".$to."!</p>";
	} else {
		echo "<p>Message delivery failed...</p>";
	}

?>