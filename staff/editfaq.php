<?php
	include_once("header.html");
?>


<?php
	if(isset($_POST['faqno'])){
		$faqno=$_POST['faqno'];

		$query = "SELECT * FROM faqs where faqno=".$faqno;

		$result = mysql_query($query);

		if (!$result) die(mysql_error());
		
		while ($row = mysql_fetch_assoc($result)) {
			echo "<form action='load.php' method='POST'>";
			echo "<input type='hidden' name='editfaqno' value='".$faqno."'></input>";
			echo "<label>Question: </label><input type='text' name='editquestion' value='".$row['question']."'></input></td></br>";
			echo "<label>Answer: </label><input type='text' name='editanswer' value='".$row['answer']."'></input></td></br>";
			echo "<label>Tags: </label><input type='text' name='edittags' value='".$row['tag']."'></input></td></br>";
			echo "<input type='submit' name='faqedit' value='Save'></input>";
			echo "<input type='button' value='Cancel' onclick='redirectpagefaqs()'>";
			echo "</form>";
		}

		mysql_free_result($result);
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

		echo "<h1>Add item in FAQ</h1>";

		echo "<form action='load.php' method='POST'>";
		echo "<label>Question: </label><input type='text' name='addquestion' required='required'></input></td></br>";
		echo "<label>Answer: </label><input type='text' name='addanswer' required='required'></input></td></br>";
		echo "<label>Tags: </label><input type='text' name='addtags'></input></td></br>";
		echo "<input type='submit' name='faqadd' value='Add to FAQ'></input>";
		echo "</form>";


		echo "<br/><br/><a href='home.php'>Back to Home</a>";
	}
?>


<?php
	include_once("footer.html");
?>