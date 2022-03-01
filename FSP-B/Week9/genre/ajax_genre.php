<option value="0">-</option>
<?php
	$con = new mysqli("localhost","root","","fsp-b");

	$idmovie = $_POST['id'];

	$sql = "SELECT G.* FROM genre AS G INNER JOIN genre_movie AS GM ON G.idgenre=GM.idgenre WHERE GM.idmovie=$idmovie";
	$res = $con->query($sql);

	while ($row=$res->fetch_assoc())
	{
		$id = $row["idgenre"];
		$judul = $row["nama"];
		echo "<option value='$id'>$judul</option>";
	}

	$con->close();
?>