<?php
	require_once('connect.php');
	$username = $_POST['username'];
	$password = $_POST['password'];
	$password = sha1($password);
	$stud = "SELECT * from students where studentno='$username' and password='$password'";
	$staff = "SELECT * from staff where staffid='$username' and password='$password'";
	$result = mysql_query($stud);
	session_start();
	$_SESSION['user'] = 'student';
	if(empty($result)){
		$result = mysql_query($staff);
		$_SESSION['user'] = 'staff';
	}
	$count = mysql_num_rows($result);
	if($count==1){
		$_SESSION['username']=$username;
		header('location:user-form.php');	
	}
	else{
		echo "Username and Password does not match!";
	}
?>