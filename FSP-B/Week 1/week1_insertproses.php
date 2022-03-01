<!DOCTYPE html>
<html>
<head>
	<title>FSP Week 1 - Database</title>
</head>
<body>
<?php
	$koneksi = new mysqli("localhost","root","","fsp-b");

	if ($koneksi->connect_errno)
	{
		die ("Failed to connect to MySQL: ". $koneksi->connect_error);
	}
	
	echo "<br>Ready to Process Database<br>";

	$judul = "Movie 4";
	$rilis = "2021-08-21";
	$skor = 7.5;
	$sinopsis = "sinopsis nya";
	$serial = false;
	$genre = "genre nya";

	//$sql = "INSERT INTO movie VALUES(null,'$judul','$rilis',$skor,'sinopis movie nya',1,'jpg','genre nya')";
	//$hasil = $koneksi->query($sql);

	$sql = "INSERT INTO movie(judul,rilis,skor,sinopsis,serial,genre) VALUES (?,?,?,?,?,?)";
	$hasil = $koneksi->prepare($sql);
	$hasil->bind_param("ssdsis",$judul,$rilis,$skor,$sinopsis,$serial,$genre);
	$hasil->execute();

	if ($hasil == true)
		echo "Insert Success : " . $koneksi->affected_rows;
	else
		echo "Insert Failed : " . $koneksi->error;

	$koneksi->close();
?>

</body>
</html>