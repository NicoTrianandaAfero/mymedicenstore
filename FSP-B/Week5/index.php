<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>FSP - WEEK 5</title>
</head>
<body>
</body>
<?php
	require("class/movie.php");

	$movie = new movie("localhost","fsp-b","root","");

	$hasil = $movie->getMovie("A");

	while($baris = $hasil->fetch_assoc())
	{
		echo $baris['judul']."<br>";
	}

?>
</body>
</html>