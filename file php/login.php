<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	

</head>
<body>
<form method="post" action="loginproses.php">
	<?php
	if (isset($_SESSION['error'])) {
		echo "<p> username atau password salah</p>";
		unset($_SESSION['error']);
	}
	?>
	<label>username : </label>
	<input type="text" name="username"><br>
	<br>
	<label>password: </label>
	<input type="password" name="password"><br>
	<input type="submit" name="btnsubmit" value="login">
</form>
</body>
</html>