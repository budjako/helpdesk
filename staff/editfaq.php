<?php
	include_once("header.html");
?>


<?php
	echo $_POST['faqno'];
	if(isset($_POST['faqno'])){

	}
	else{
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
			</td></tr>";
		}
		echo "</table>";

		mysql_free_result($result);
	}
?>


<?php
	include_once("footer.html");
?>