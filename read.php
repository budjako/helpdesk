<!DOCTYPE html>
<html>
	<head>
		<title>Email Processing</title>
	</head>
	<body>
<?php
 ini_set('max_execution_time', 300);
// 	echo "testing";
// 	$to = "budjako@gmail.com";
// 	$subject = "TEST";
// 	$body = "Hi,\n\nDid you get this??";
// 	$headers = 'From: budjako@gmail.com' . "\r\nReceived by: ".$to;
// 	if (mail($to, $subject, $body, $headers)) {
// 		echo "<p>Message successfully sent to".$to."!</p>";
// 	} else {
// 		echo "<p>Message delivery failed...</p>";
// 	}

// 	echo $fetch=new MailFetcher(1);
// 
	$hostname='{imap.gmail.com:993/imap/ssl}INBOX';
	$username='helpdesk.uplbosa@gmail.com';
	$password='helpdesk2014';
	/* try to connect */
	if(function_exists('imap_timeout')) imap_timeout(1,20);
	$inbox = imap_open($hostname,$username,$password) or die('Cannot connect to Gmail: ' . imap_last_error());
	$emails = imap_search($inbox,'UNSEEN');
	/* if emails are returned, cycle through each... */
	if($emails) {
		
		/* begin output var */
		$output = '';
		
		/* put the newest emails on top */
		rsort($emails);
		// $output.= var_dump($emails);
		/* for every email... */
		foreach($emails as $email) {
				echo "email ".$email."</br>";
				$overview = imap_fetch_overview($inbox,$email,0);
				$message = imap_fetchbody($inbox,$email,2);
				// $header = imap_header($inbox, $email);
				
				// if($overview[0]->seen==0){
					// echo "<br/>";
					// $output.= '<div class="toggler '.($overview[0]->seen ? 'read' : 'unread').'">';
					// $output.= var_dump($overview[0]);
					// $output.= '<span class="subject">'.$overview[0]->subject.'</span> ';
					// $output.= '<span class="from">'.$overview[0]->from.'</span>';
					// $output.= '<span class="date">on '.$overview[0]->date.'</span>';
					// $output.= "<input type='button' value='Reply'></input>";
					// note: pwedeng import answer, forward, close, reply, mark as read
					// $output.= '</br>';
					// $output.= '</div>';
    				$status = imap_setflag_full($inbox, $email, "\\Seen");
    				// echo gettype($status) . "\n";
					// echo $status . "\n";
					// $overview[0]->seen=1;
					// $output.= var_dump($overview[0]);
					// $output.= '</br>';
					// $output.= '<div class="body">'.$message.'</div>';
				// }
				// echo count((array)$emails);
					// var_dump($header);
					var_dump($overview[0]);
					echo '</br>';
		}
		
		echo $output;
	} 

	imap_close($inbox);

	// echo "testing";
	// $to = "budjako@gmail.com";
	// $subject = "TEST";
	// $body = "Hi,\n\nDid you get this??";
	// $headers = 'From: budjako@gmail.com' . "\r\nReceived by: ".$to;
	// if (mail($to, $subject, $body, $headers)) {
	// 	echo "<p>Message successfully sent to ".$to."!</p>";
	// } else {
	// 	echo "<p>Message delivery failed...</p>";
	// }

?>
</body>
</html>