<!DOCTYPE html>
<html>
<head>
	<title>hal3</title>
<style type="text/css">
 div {
 	width: 200px; height: 150px;
 	border: 1px black solid;
 }	

</style> 
</head>
<body>
<<?php 
$arr_warna = $_POST['warna'];
foreach ($arr_warna as $hexa) {
	echo "<div style='background: #".
	$hexa."'></div>";

}
 ?>	

</body>
</html>