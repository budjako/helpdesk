<?php
// SORT BY NUMBER OF THREADS PA!

	include_once("connect.php");

	//TICKETS BY STUDENTS
			if($_POST['option']=="studentticket"){
				$student_no=$_POST['student_no'];
				$query = "SELECT * FROM tickets where student_no='".$student_no."'";
				$result = mysql_query($query);
				if (!$result) die(mysql_error());
				
				echo "<table>";
				echo "<tr><th>Ticket ID</th><th>Subject</th><th>Date Submitted</th><th>Tag</th><th>Division</th><th>Status</th><th>Last Update</th><th>Type</th><th>Student No</th><th>Staff_id</th></tr>";
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
					echo "<td>".$row['staff_id']."</td>";
					echo "</tr>";

					$query = "SELECT * FROM threads where t_id='".$row['tid']."'";
					$result = mysql_query($query);
					if (!$result) die(mysql_error());

					echo "<table>";
					echo "<tr><th>Thread ID</th><th>Ticket ID</th><th>Respondent</th><th>Date Submitted</th><th>Body</th></tr>";
					while ($row = mysql_fetch_assoc($result)) {
						echo "<tr>";
						echo "<td>".$row['thid']."</td>";
						echo "<td>".$row['t_id']."</td>";
						echo "<td>".$row['respondent']."</td>";
						echo "<td>".$row['datesubmit']."</td>";
						echo "<td>".$row['body']."</td>";
						echo "</tr>";
					}
					echo "</table>";
				}
				echo "</table>";
			}

	// TICKETS BY GUESTS
			if($_POST['option']=="guestticket"){
				$g_id=$_POST['g_id'];
				$query = "SELECT * FROM tickets where g_id='".$g_id."'";
				$result = mysql_query($query);
				if (!$result) die(mysql_error());
				
				echo "<table>";
				echo "<tr><th>Ticket ID</th><th>Subject</th><th>Date Submitted</th><th>Tag</th><th>Division</th><th>Status</th><th>Last Update</th><th>Type</th><th>G_id</th><th>Staff_id</th></tr>";
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
					echo "<td>".$row['g_id']."</td>";
					echo "<td>".$row['staff_id']."</td>";
					echo "</tr>";

					$query = "SELECT * FROM threads where t_id='".$row['tid']."'";
					$result = mysql_query($query);
					if (!$result) die(mysql_error());

					echo "<table>";
					echo "<tr><th>Thread ID</th><th>Ticket ID</th><th>Respondent</th><th>Date Submitted</th><th>Body</th></tr>";
					while ($row = mysql_fetch_assoc($result)) {
						echo "<tr>";
						echo "<td>".$row['thid']."</td>";
						echo "<td>".$row['t_id']."</td>";
						echo "<td>".$row['respondent']."</td>";
						echo "<td>".$row['datesubmit']."</td>";
						echo "<td>".$row['body']."</td>";
						echo "</tr>";
					}
					echo "</table>";
				}
				echo "</table>";
			}

			if($_POST['option']=="sortticket"){
				$sortby=$_POST['sortby'];

				$query = "SELECT * FROM tickets ORDER BY tid";
				if($sortby==2) $query = "SELECT * FROM tickets ORDER BY datesubmit ASC";
				else if($sortby==3) $query = "SELECT * FROM tickets ORDER BY datesubmit DESC";
				else if($sortby==4) $query = "SELECT * from tickets LEFT JOIN (
													select t_id, count(*) N from threads
													group by t_id) t ON tid=t_id
												order by N desc";
				else if($sortby==5) $query = "SELECT * FROM tickets ORDER BY datelastupdate ASC";
				else if($sortby==6) $query = "SELECT * FROM tickets ORDER BY datelastupdate DESC";
				else if($sortby==7) $query = "SELECT * FROM tickets ORDER BY division";
				else if($sortby==8) $query = "SELECT * FROM tickets WHERE type=0";
				else if($sortby==9) $query = "SELECT * FROM tickets WHERE type=1";

				$result = mysql_query($query);
				if (!$result) die(mysql_error());
				
				echo "<table>";
				echo "<tr><th>Ticket ID</th><th>Subject</th><th>Date Submitted</th><th>Tag</th><th>Division</th><th>Status</th><th>Last Update</th><th>Type</th><th>G_id</th><th>Staff_id</th></tr>";
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
					echo "<td>".$row['g_id']."</td>";
					echo "<td>".$row['staff_id']."</td>";
					echo "</tr>";
				}
				echo "</table>";
			}


	include_once("close.php");
?>


<!-- // <h1>All Tickets Sorted</h1>
// <select>
// 	<option value="1">Ticket Number</option>
// 	<option value="2">Ascending Date Submitted</option>
// 	<option value="3">Descending Date Submitted</option>
// 	<option value="4">Number of Threads</option>
// 	<option value="5">Ascending Date Last Updated</option>
// 	<option value="6">Descending Date Last Updated</option>
// 	<option value="7">Division</option>
// 	<option value="8">Questions only</option>
// 	<option value="9">Feedbacks/Suggestions only</option>
// </select>
// <input type='button' value='View Tickets' onclick='sortedtickets();'/>
// <div class='divticketsort'></div> -->
