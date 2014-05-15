<?php
	include_once("header.php");
	include_once("connect.php");

	if(isset($_POST['faqedit'])){
		$query = "UPDATE faqs SET question='".$_POST['editquestion']."', answer='".$_POST['editanswer']."', tag='".$_POST['edittags']."' WHERE faqno=".$_POST['editfaqno']."";

		$result = mysql_query($query);
		if (!$result) die(mysql_error());
		echo "Updated data successfully<br />";
	}

	echo "<a href='home.php'>Back to Home</a>";
	include_once("close.php");
	include_once("footer.php");
?>