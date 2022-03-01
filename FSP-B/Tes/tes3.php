<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tes</title>
</head>
<body>
<?php 
 	$koneksi = new mysqli("localhost", "root","","latihan" );  
 	if($koneksi->connect_errno) 	 
 	{
 	 	die ( "Failed to connect to MySQL ". $koneksi->connect_error);  
  	}

  	echo "<br>Ready to Process Database<br>";
?>  	
</body>
</html>