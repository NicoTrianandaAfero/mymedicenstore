<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>FSP - WEEK 5</title>
</head>
<body>
</body>
<?php
	include("class/simple.php");

	echo "<h1>Testing...</h1>";

	$obj = new SimpleClass();
	$obj->display();

	$obj2 = new SimpleClass("A value from PHP");
	$obj2->display();


?>
</body>
</html>