<!DOCTYPE html>
<html>
<head>
	<title>cookies week 8 </title>
</head>
<body>
<?php
$user = ""; $chk = "";
if(isset($_COOKIE['userku'])){
	$user = $_COOKIE['userku'];
	$chk = "checked";
} 
 ?>
<form method="post" action="login_prosesCookie.php">
 <p>
 	<label>Username </label><br>
 	<input type="text" name="txtusername">
 </p>
<p>
	<label>Password</label><br>
	<input type="Password" name="txtpassword">
</p>
<p>
	<label > <input type="checkbox" value="1" name="chkremember" <?php echo $chk; ?>>Remember username</label>
</p>
<p>
	<button type="submit" name="btnlogin" value="login">login</button>
</p>
</form>	

</body>
</html>