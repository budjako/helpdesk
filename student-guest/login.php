<?php
	session_start();
	if(empty($_SESSION['username'])){
		require_once('connect.php');
		$username = $_POST['uname'];
		$password = $_POST['pword'];
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
		$row = mysql_fetch_assoc($result);
		if($count==1){
			$_SESSION['username']=$username;
			$_SESSION['fname'] = $row['firstname'];
			header('location:index.php');	
		}
		else{
			echo "Username and Password does not match!";
		}
	}
	else{
		header('location:index.php');
	}
?>