<?php 
session_start();
$buah = $_post['buah'];

$arr_buah = array();
if(isset($_SESSION['buah_buahan']))
{
	$arr_buah = $_SESSION['buah_buahan'];
}
$arr_buah[]= $buah;
$_SESSION['buah_buahan'] = $arr_buah[];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Page 2</title>
</head>
<body>
<<?php 
foreach ($arr_buah as $namabuah) {
	echo $nama_buah. "<br>";
}	
?>
<br><a href="page1Buah.php">&lt; kembali</a>	

</body>
</html>
