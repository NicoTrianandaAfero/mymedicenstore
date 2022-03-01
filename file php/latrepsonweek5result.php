<!DOCTYPE html>
<html>
<head>
	<title>Calculated</title>
</head>
<body>
<?php
	$tanggal = $_POST["txttanggal"];
	$hari = $_POST["txtday"];
	echo "<p>";
	echo "Hasil : ".date ("d/m/Y", strtotime($tanggal)+($hari*86400))."<br>";
	echo "</p>";
?>
<p>
<a href="latrepsonweek5.php">Kembali</a>
</p>
</body>
</html>