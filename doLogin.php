<?php
	include('connect.php');
	session_start();
	$username = $_POST['txtUser'];
	$password = $_POST['txtPass'];
	
	$query = "SELECT * FROM tamu WHERE username='$username' AND password = '$password'";
	$result = mysql_query($query);
	
	
	if ($username=="")
	{
		header('location:login.php?msg=username must be filled');
	}
	else if ($password=="")
	{
		header('location:login.php?msg=password must be filled');
	}
	else if (mysql_num_rows($result) > 0)
	{
		$_SESSION['username'] = $username;
		header('location:Home.php');
	}
	else if ($username=="admin" && $password=="admin")
	{
		header('location:admin.php');
	}
	else
	{
		header('location:login.php?msg=invalid username or password');
	}
?>