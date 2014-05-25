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
	echo "<p> Date Posted: ".$row['datesubmit']."<br />";
	echo "Source: ";
	if($row['source']==0) echo "Web"; 
	else if($row['source']==1) echo "Email";
	else echo "Phone";
	echo "<br />";

	echo "Status: ";
	if($row['status'] == 0) echo "New Email";
	else if($row['status'] == 1) echo "Staff Replied";
	else if($row['status'] == 2) echo "User Replied";
	else if($row['status'] == 3) echo "Forwarded";
	else echo "Closed";
	echo "<br />";

	echo "Last Updated: ";
	echo $row['datelastupdate'];
	

	echo "</p>";
	echo "</div>";

	//display threads
	$query = "SELECT * FROM threads WHERE t_id = $id ORDER BY thid";
	$result = mysql_query($query);

	if(!$result)die(mysql_error());

	echo "<div id='thread-container'>";
	while($row = mysql_fetch_assoc($result)){
		echo "<div class='thread'>";
		echo "<div class='th-date'>";
		echo $row['datesubmit'];
		echo "</div>";
		echo "<div class='th-details'>";
		echo "<table><tr>";
		if($row['respondent']==0)
			echo "<td>".$_SESSION['fname'].": </td>";
		else
			echo "<td>STAFF: </td>";
		echo "<td>".$row['body']."</td>";
		echo "</tr></table>";
		echo "</div>";
		echo "</div>";
	}
	
	echo "</div>";

	//reply option and clode option
	echo "<h3>Post a reply</h3>";
	echo "<textarea id ='reply-area' placeholder='Type your response here'></textarea>";
	echo "<button id='submit' name='submit' onclick='submit_reply(".$id.")'>Submit</button>";
	echo "<button id='close-ticket'>Close the ticket</button>";
?>
