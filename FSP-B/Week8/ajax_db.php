<?php
	$s = $_POST["search"];

	$con = new mysqli("localhost","root","","fsp-b");

	$sql = "SELECT judul FROM movie WHERE idmovie=$s";
	$res = $con->query($sql);

	if ($row = $res->fetch_assoc())
		echo $row["judul"];
	else
		echo "Judul Tidak Ditemukan";
	
	$con->close();
?>