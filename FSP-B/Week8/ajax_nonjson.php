<?php
	$s = $_POST["search"];

	$con = new mysqli("localhost","root","","fsp-b");

	$sql = "SELECT * FROM movie WHERE idmovie=$s";
	$res = $con->query($sql);

	if ($row = $res->fetch_assoc())
	{
		echo "<strong>".$row["judul"]."</strong><br>";
		echo "<em>".$row["sinopsis"]."</em>";
	}
	else
		echo "Judul Tidak Ditemukan";
	
	$con->close();
?>