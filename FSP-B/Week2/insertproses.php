<!DOCTYPE html>
<html>
<head>
	<title>FSP - Database</title>
</head>
<body>
<?php
	$koneksi = new mysqli("localhost","root","","fsp-b");

	if ($koneksi->connect_errno)
	{
		die ("Failed to connect to MySQL: ". $koneksi->connect_error);
	}
	
	echo "<br>Ready to Process Database<br>";

	$judul = $_POST['judul'];
	$rilis = $_POST['rilis'];
	$skor = $_POST['skor'];
	$sinopsis = $_POST['sinopsis'];
	$serial = $_POST['serial'];
	$genre = $_POST['genre'];
	$gambar = $_FILES['gambar'];

	//$sql = "INSERT INTO movie VALUES(null,'$judul','$rilis',$skor,'sinopis movie nya',1,'jpg','genre nya')";
	//$hasil = $koneksi->query($sql);

	$sql = "INSERT INTO movie(judul,rilis,skor,sinopsis,serial) VALUES (?,?,?,?,?)";
	$hasil = $koneksi->prepare($sql);
	$hasil->bind_param("ssdsi",$judul,$rilis,$skor,$sinopsis,$serial);
	$hasil->execute();

	if ($hasil->error != true)
	{
		echo "Insert Success : " . $hasil->affected_rows . "<br>";
		$idmovie = $hasil->insert_id; 
		echo "Movie ID Baru : ". $idmovie;

		$sql = "INSERT INTO genre_movie VALUES (?,?)";
		$hasil = $koneksi->prepare($sql);

		foreach ($genre as $idgenre) 
		{
			$hasil->bind_param("ii",$idmovie,$idgenre);
			$hasil->execute();
		}
		

		$ext = substr($gambar['name'], -3);
		move_uploaded_file($gambar['tmp_name'], "gambar/$idmovie.$ext");

		$sql = "UPDATE movie SET extention=? WHERE idmovie=$idmovie";
		$hasil = $koneksi->prepare($sql);
		$hasil->bind_param("s",$ext);
		$hasil->execute();

	}
	else
		echo "Insert Failed : " . $koneksi->error;

	$koneksi->close();
?>
<br>
<a href="index.php">Back</a>
</body>
</html>