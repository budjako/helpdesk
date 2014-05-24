<?php
	require_once('connect.php');
	session_start();
	$username = $_SESSION['username'];
	$id = $_POST['id'];

	$query = "SELECT * from tickets WHERE tid = $id";
	$result = mysql_query($query);

	if(!$result)die(mysql_error());
	$row = mysql_fetch_assoc($result);

	//diplay ticket details
	echo "<div id = 'ticket-details'>";
	echo "<div id ='ticket-header'>";
	echo "Q-".$row['tid'].": ".$row['subject'];
	echo "</div>";
	echo "<p>".$row['datesubmit'];
	echo "Source: ";
	if($row['source']==0) echo "Web"; 
	else if($row['source']==1) echo "Email";
	else echo "Phone";

	

	echo "</p>";
	echo "</div>";

	//display threads
	$query = "SELECT * FROM threads WHERE t_id = $id ORDER BY thid";
	$result = mysql_query($query);

	if(!$result)die(mysql_error());
	echo "<table>";
	echo "<tr><th>Ticket ID</th><th>Thread ID</th><th>Body</th><th>Date Submitted</th><th>Respondent</th></tr>";
	while($row = mysql_fetch_assoc($result)){
		echo "<tr>";
		echo "<td>".$row['t_id']."</td>";
		echo "<td>".$row['thid']."</td>";
		echo "<td>".$row['body']."</td>";
		echo "<td>".$row['datesubmit']."</td>";
		if($row['respondent']==0)
			echo "<td>".$_SESSION['fname']."</td>";
		else
			echo "<td>STAFF</td>";
		echo "</tr>";
	}
	echo "</table>";

	//reply option and clode option
	echo "<h3>Post a reply</h3>";
	echo "<textarea id ='reply-area' placeholder='Type your response here'></textarea>";
	echo "<button id='submit' name='submit' onclick='submit_reply(".$id.")'>Submit</button>";
	echo "<button id='close-ticket'>Close the ticket</button>";
?>
