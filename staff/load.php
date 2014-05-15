<?php
	include_once("header.html");
	include_once("connect.php");

	if(isset($_POST['faqedit'])){
		$query = "UPDATE faqs SET question='".$_POST['editquestion']."', answer='".$_POST['editanswer']."', tag='".$_POST['edittags']."', datelastupdate=CURRENT_DATE() WHERE faqno=".$_POST['editfaqno']."";
		$result = mysql_query($query);
		if (!$result) die(mysql_error());
		echo "Updated data successfully<br />";
	}

	if(isset($_POST['faqadd'])){
		$query="INSERT INTO `faqs` (`question`, `answer`, `tag`, `datelastupdate`) VALUES ('".$_POST['addquestion']."', '".$_POST['addanswer']."', '".$_POST['addtags']."', CURRENT_DATE())";
		$result = mysql_query($query);
		if (!$result) die(mysql_error());
		echo "Data added successfully<br />";
	}

	if(isset($_POST['faqdelete'])){
		$query="DELETE FROM faqs WHERE faqno=".$_POST['faqno'];
		$result = mysql_query($query);
		if (!$result) die(mysql_error());
		echo "Data deleted successfully<br />";
	}

	echo "<a href='home.php'>Back to Home</a>";
	include_once("close.php");
	include_once("footer.html");
?>

<!-- 
echo "<form action='load.php' method='POST'>";
echo "<label>Question: </label><input type='text' name='addquestion' required='required'></input></td></br>";
echo "<label>Answer: </label><input type='text' name='addanswer' required='required'></input></td></br>";
echo "<label>Tags: </label><input type='text' name='addtags'></input></td></br>";
echo "<input type='submit' name='faqadd' value='Add to FAQ'></input>";
echo "</form>"; -->
