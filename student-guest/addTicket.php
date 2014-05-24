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
	$tageach="";
	foreach($tags as $select)
		$tageach .= $select.',';

	if(!isset($_SESSION['username'])){ // guest
		//check first if email already exist
		$query = "SELECT gid FROM guests WHERE email = $email";
		$result_query = mysql_query($query); 
		if(!$result_query){ //register new guest 
			$query = "INSERT INTO guests (firstname, lastname, email )VALUES ('$firstname', '$lastname', '$email')";
			$result_query = mysql_query($query);
			$query = "SELECT gid FROM guests WHERE email = '$email'";
			$result_query = mysql_query($query); 
		}
		$row = mysql_fetch_array($result_query);
		$gid = intval($row['gid']);

		$_SESSION['user'] = 'guest';
	}

	if($_SESSION['user'] == 'student'){ //student and staff registration of Ticket
		$username = $_SESSION['username'];
		$sql = "INSERT INTO tickets VALUES (NULL,'$subject',NOW(),'$tageach', '$division', 0, NOW(), '$type', '$username', NULL, NULL, 0)";
	}
	else if($_SESSION['user']== 'staff'){
		$username = $_SESSION['username'];
		$sql = "INSERT INTO tickets VALUES (NULL,'$subject',NOW(),'$tageach', '$division', 0, NOW(), '$type', NULL, NULL, '$username', 0)";
	}
	else{		// guest registration of ticket
		$sql = "INSERT INTO tickets VALUES (NULL,'$subject', NOW(), '$tageach', '$division', 0, NOW(), '$type', NULL, $gid, NULL , 0)";
	}
	
	$result = mysql_query($sql);
	if($result){ // registration of thread
		$sql = "SELECT tid FROM tickets WHERE subject='$subject'";
		$result = mysql_query($sql);
		if(mysql_num_rows($result)){
			$row = mysql_fetch_array($result);
			$ticketid = intval($row['tid']);			
			$query = "INSERT INTO threads (t_id, respondent, datesubmit, body) VALUES ($ticketid, 0, NOW(), '$description')";
			$result = mysql_query($query);
			if($result){
			echo "<p>Your concern is now delivered. Reply will be send to ".$email." with a reference number: Q-".$ticketid."</p>";
			}
		}
	}	
	else
		echo "There's something wrong OH ow!"
	
?>