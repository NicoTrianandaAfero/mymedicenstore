<!DOCTYPE html>
<html>
<head>
	<title>halaman 3</title>
</head>
<body>
<?php
date_default_timezone_set("Asia/Jakarta");

	echo strtotime("11 September 2020")."<br>";
	echo strtotime("12 September 2020")."<br>";
	//86400 ==> jumlah detik dalam 1 hari
	echo strtotime("now")."<br>";
	$tgl_akhir = "30 September 2020"; $tglawal = "2020/09/14";
	//berapa hari selisihnya?
	echo "Selisih = " .((strtotime($tgl_akhir)-strtotime($tglawal))/86400).
		"hari<br>";

	echo date("d/m/Y H:i:s")."<br>";
	echo date("Y/m/d", strtotime($tgl_akhir))."<br>";

	echo date("d-M-Y H:i:s", mktime(9,56,13,9,31,2020))."<br>";

	$tgl = "25 September 2020";
	echo date("d-m-Y", strtotime($tgl) + (12*86400))."<br>";

	$bulan = date("m", strtotime($tgl));
	$tanggal=date("d", strtotime($tgl));
	$tahun = date("Y",strtotime($tgl));
	echo date("d-m-Y", mktime(0,0,0,bulan,tgl,thn))."<br>";
?>
</body>
</html>