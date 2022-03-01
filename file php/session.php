<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
</body>
<?php 

if(isset($_SESSION['view']))
	$_SESSION['view']++;
else
	$_SESSION['view'] = 1;
echo "Halaman ini sudah dilihat " .$_SESSION['view']." kali";
?>

</body>
</html>