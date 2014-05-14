<?php
	include_once("connect.php");
	// var_dump($_POST);
	if($_POST['option']=="studentticket"){
		$student_no=$_POST['student_no'];
		$query = "SELECT * FROM tickets where student_no='".$student_no."'";
		$result = mysql_query($query);
		if (!$result) die(mysql_error());
		
		echo "<table>";
		echo "<tr><th>Ticket ID</th><th>Subject</th><th>Date Submitted</th><th>Tag</th><th>Division</th><th>Status</th><th>Last Update</th><th>Type</th><th>Student No</th><th>G_id</th><th>Staff_id</th></tr>";
		while ($row = mysql_fetch_assoc($result)) {
			echo "<tr>";
			echo "<td>".$row['tid']."</td>";
			echo "<td>".$row['subject']."</td>";
			echo "<td>".$row['datesubmit']."</td>";
			echo "<td>".$row['tag']."</td>";
			echo "<td>".$row['division']."</td>";
			echo "<td>".$row['status']."</td>";
			echo "<td>".$row['datelastupdate']."</td>";
			echo "<td>".$row['type']."</td>";
			echo "<td>".$row['student_no']."</td>";
			echo "<td>".$row['g_id']."</td>";
			echo "<td>".$row['staff_id']."</td>";
			echo "</tr>";

			$query = "SELECT * FROM threads where t_id='".$row['tid']."'";
			$result = mysql_query($query);
			if (!$result) die(mysql_error());

			echo "<table>";
			echo "<tr><th>Thread ID</th><th>Respondent</th><th>Date Submitted</th><th>Body</th></tr>";
			while ($row = mysql_fetch_assoc($result)) {
				echo "<tr>";
				echo "<td>".$row['thid']."</td>";
				echo "<td>".$row['respondent']."</td>";
				echo "<td>".$row['datesubmit']."</td>";
				echo "<td>".$row['body']."</td>";
				echo "</tr>";
			}
			echo "</table>";
		}
		echo "</table>";
	}
	include_once("close.php");
?>