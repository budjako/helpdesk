<?php 
	include_once("header.html");
?>

<!-- 
	TICKET STATUS:
		1 - NEW TICKET
		2 - STAFF REPLIED
		3 - STUDENT REPLIED
		4 - FORWARDED
		5 - CLOSED
 -->

<!-- ALL TICKETS -->
		<?php
			echo "<h1>All Tickets</h1>";

			$query = "SELECT * FROM tickets";
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
			}
			echo "</table>";

			mysql_free_result($result);
		?>

<!-- ALL TICKETS SORTED-->
		<h1>All Tickets Sorted</h1>
		<select id="selectsort">
			<option value="1">Ticket Number</option>
			<option value="2">Ascending Date Submitted</option>
			<option value="3">Descending Date Submitted</option>
			<option value="4">Number of Threads</option>
			<option value="5">Ascending Date Last Updated</option>
			<option value="6">Descending Date Last Updated</option>
			<option value="7">Division</option>
			<option value="8">Questions only</option>
			<option value="9">Feedbacks/Suggestions only</option>
		</select>
		<input type='button' value='View Tickets' onclick='sortedtickets();'/>
		<div class='divticketsort'></div>

<!-- CLOSED TICKETS -->
		<?php
			echo "<h1>Closed Tickets</h1>";

			$query = "SELECT * FROM tickets WHERE status=5";
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
			}
			echo "</table>";

			mysql_free_result($result);
		?>

<!-- OPEN TICKETS -->
		<?php
			echo "<h1>Open Tickets</h1>";

			$query = "SELECT * FROM tickets WHERE status!=5";
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
			}
			echo "</table>";

			mysql_free_result($result);
		?>

<!-- TICKETS BY STUDENT X -->
		<?php
			echo "<h1>Tickets by Student x</h1>";

			$query = "SELECT student_no FROM tickets where student_no IS NOT NULL";
			$result = mysql_query($query);
			if (!$result) die(mysql_error());
			
			echo "<select id='selectstdno'>";
			while ($row = mysql_fetch_assoc($result)) {
				echo "<option value=".$row['student_no'].">".$row['student_no']."</option>";
			}
			echo "</select>";

			echo "<input type='button' value='View Tickets' onclick='studenttickets();'/>";
			echo "<div class='divticketstud'></div>";
		?>

<!-- TICKETS BY GUEST X -->
		<?php
			echo "<h1>Tickets by Guest x</h1>";

			$query = "SELECT g_id FROM tickets where g_id IS NOT NULL";
			$result = mysql_query($query);
			if (!$result) die(mysql_error());
			
			echo "<select id='selectgid'>";
			while ($row = mysql_fetch_assoc($result)) {
				echo "<option value=".$row['g_id'].">".$row['g_id']."</option>";
			}
			echo "</select>";

			// print("haha");

			echo "<input type='button' value='View Tickets' onclick='guesttickets();'/>";
			echo "<div class='divticketguest'></div>";
		?>

<!-- FAQ -->
		<?php
			echo "<h1>FAQ</h1>";

			$query = "SELECT * FROM faqs";

			$result = mysql_query($query);

			if (!$result) die(mysql_error());
			
			echo "<table>";
			echo "<tr><th>FAQ no</th><th>Question</th><th>Answer</th><th>Tag</th><th>Last Update</th></tr>";
			while ($row = mysql_fetch_assoc($result)) {
				echo "<tr>";
				echo "<td>".$row['faqno']."</td>";
				echo "<td>".$row['question']."</td>";
				echo "<td>".$row['answer']."</td>";
				echo "<td>".$row['tag']."</td>";
				echo "<td>".$row['datelastupdate']."</td>";
				echo "<td>
					<form action='editfaq.php' method='POST'>
						<input type='hidden' name='faqno' value=".$row['faqno'].">
						<input type='submit' value='Edit item'>
					</form>
				</td>";
				echo "<td>
					<form action='load.php' method='POST'>
						<input type='hidden' name='faqno' value=".$row['faqno'].">
						<input type='submit' name='faqdelete' value='Delete item'>
					</form>
				</td>";
				echo "</tr>";
			}
			echo "</table>";

			mysql_free_result($result);
		?>

<?php include_once("footer.html"); ?>