<?php
session_start();

if(isset($_POST['btnsubmit'])){
	$username = $_POST['username'];
	$password = $_POST['password'];

	if ($username == 'bejo' && $password == '123')
	{
		$_SESSION['username'] = $username;
		header("location: memberarea.php" );
	}	
	else
	{
		$_SESSION['error'] = 1;
		header("location: login.php");	
	}
}		
?>