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

	if(empty($_SESSION['username'])){ // guest
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

	if($_SESSION['user']!= 'guest'){
		$username = $_SESSION['username'];
		$sql = "INSERT INTO tickets VALUES ('','$subject',NOW(),'tags', '$division', 0, NOW(), '$type', '$username', NULL, NULL)";
	}
	else{		
		$sql = "INSERT INTO tickets VALUES ('','$subject', NOW(), 'tags', '$division', 0, NOW(), '$type', NULL, $gid, NULL )";

		var_dump($sql);
	}

	$result = mysql_query($sql);
	if($result){
		$sql = "SELECT tid FROM tickets WHERE subject='$subject'";
		$result = mysql_query($sql);
		if(mysql_num_rows($result)){
			$row = mysql_fetch_array($result);
			$ticketid = intval($row['tid']);			
			$query = "INSERT INTO threads (t_id, respondent, datesubmit, body) VALUES ($ticketid, 0, NOW(), '$description')";
			var_dump($query);
			$result = mysql_query($query);
			if($result){
			echo "Successfully Added! ";
			}
		}
	}	
	else
		echo "There's something wrong OH ow!"
	
?>