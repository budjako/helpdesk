<?php
	session_start();
	if(!empty($_SESSION['username'])){
		echo "Welcome".$_SESSION['username']."<br />";
		echo "<a href='logout.php'>logout</a>";
	}
	else{
		header("location:login.php");
	}
?>

	