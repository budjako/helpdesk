<!DOCTYPE html>
<html>
	<head>
		<title>Create New Staff Account</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<script type="text/javascript" src="js/jquery-2.0.3.js"></script>
		<script type="text/javascript">
			
			function studenttickets(){	
				var student_no=document.getElementById('selectstdno').selectedOptions[0].text;
				$.ajax({
					url: 'query.php',
					type: 'POST',
					async: false,
					data: {"student_no":student_no, "option": "studentticket"},
					success: function(result){
						$('.divticketstud').html(result);
					}
				});
			}

		</script>
	</head>
	<body>
		<?php
			include_once("connect.php");

			echo "<h1>Tickets</h1>";

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

			// print("haha");

			echo "<input type='button' value='View Tickets' onclick='studenttickets();'/>";
			echo "<div class='divticketstud'></div>";
		?>

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
				echo "</tr>";
			}
			echo "</table>";

			mysql_free_result($result);


		$query = "SELECT * FROM tickets where student_no='2011-29712'";
		$result = mysql_query($query);
		while ($row = mysql_fetch_assoc($result)) {
			echo $row['student_no'];
		}

		?>

		<?php 
			include_once("close.php");
		?>
	</body>
</html>