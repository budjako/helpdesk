<!DOCTYPE html>
<html>
	<head>
		<title>Create New Staff Account</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<script>
			function viewByDivision(){
				<?php
					$query = "SELECT DISTINCT * FROM concern where view='0'";

					$result = mysql_query($query);

					if (!$result) die(mysql_error());

					$query = "SELECT * FROM concern where view='0'";

					$result = mysql_query($query);

					if (!$result) die(mysql_error());

					echo "<table>";
					echo "<tr><th>Concern Number</th><th>Subject</th><th>Body</th><th>Source</th><th>Sender</th></tr>";
					while ($row = mysql_fetch_assoc($result)) {
						echo "<tr>";
						echo "<td>".$row['c_no']."</td>";
						echo "<td>".$row['subject']."</td>";
						echo "<td>".$row['body']."</td>";
						echo "<td>".$row['source']."</td>";
						echo "<td>".$row['sender']."</td>";
						echo "</tr>";
					}
					echo "</table>";

					mysql_free_result($result);  
				?>
			}
		</script>
	</head>
	<body>
		<h1>Concerns</h1>
		<h2>All Concerns</h2>
		<?php
			include_once("connect.php");

			$query = "SELECT * FROM concern";

			$result = mysql_query($query);

			if (!$result) die(mysql_error());
			
			echo "<table>";
			echo "<tr><th>Concern Number</th><th>Subject</th><th>Body</th><th>Source</th><th>Sender</th></tr>";
			while ($row = mysql_fetch_assoc($result)) {
				echo "<tr>";
				echo "<td>".$row['c_no']."</td>";
				echo "<td>".$row['subject']."</td>";
				echo "<td>".$row['body']."</td>";
				echo "<td>".$row['source']."</td>";
				echo "<td>".$row['sender']."</td>";
				echo "</tr>";
			}
			echo "</table>";

			mysql_free_result($result);
		?>
		<h2>New Concerns</h2>
		<?php

			$query = "SELECT * FROM concern where view='0'";

			$result = mysql_query($query);

			if (!$result) die(mysql_error());

			echo "<table>";
			echo "<tr><th>Concern Number</th><th>Subject</th><th>Body</th><th>Source</th><th>Sender</th></tr>";
			while ($row = mysql_fetch_assoc($result)) {
				echo "<tr>";
				echo "<td>".$row['c_no']."</td>";
				echo "<td>".$row['subject']."</td>";
				echo "<td>".$row['body']."</td>";
				echo "<td>".$row['source']."</td>";
				echo "<td>".$row['sender']."</td>";
				echo "</tr>";
			}
			echo "</table>";

			mysql_free_result($result);  
		?>
		<h2>By Division</h2>
		<select>
			<option value="COMMIT">COMMIT</option>
			<option value="CTD">CTD</option>
			<option value="DO">DO</option>
			<option value="EXECOM">EXECOM</option>
			<option value="ISS">ISS</option>
			<option value="SDT">SDT</option>
			<option value="SFAD">SFAD</option>
			<option value="SOAD">SOAD</option>
		</select>
		<button type="button" onclick="viewByDivision()">View</button>

		<?php
			$query = "SELECT DISTINCT * FROM concern where view='0'";

			$result = mysql_query($query);

			if (!$result) die(mysql_error());

			$query = "SELECT * FROM concern where view='0'";

			$result = mysql_query($query);

			if (!$result) die(mysql_error());

			echo "<table>";
			echo "<tr><th>Concern Number</th><th>Subject</th><th>Body</th><th>Source</th><th>Sender</th></tr>";
			while ($row = mysql_fetch_assoc($result)) {
				echo "<tr>";
				echo "<td>".$row['c_no']."</td>";
				echo "<td>".$row['subject']."</td>";
				echo "<td>".$row['body']."</td>";
				echo "<td>".$row['source']."</td>";
				echo "<td>".$row['sender']."</td>";
				echo "</tr>";
			}
			echo "</table>";

			mysql_free_result($result);  
		?>
		<?php 
			include_once("close.php");
		?>
	</body>
</html>