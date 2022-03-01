<?php
session_start();

if(!isset($_SESSION['username']))
{
	header("location : login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Member area </title>
</head>
<body>
<?php 


	echo "<h1>Hallo,".$_SESSION['username']."</h1>";
?>	
<a href="logout.php"> logout </a>

</body>
</html>