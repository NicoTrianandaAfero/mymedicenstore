<!DOCTYPE html>
<html>
<head>
	<title>Cather</title>
</head>
<body>
<?php
	date_default_timezone_set("asia/jakarta");
	if (isset($_POST['btnsubmit2'])){
		$nama =$_POST['txtname'];
		$jabatan =$_POST['rdojbt'];
		$tanggal = date("d-m-Y");
		$mulai = $_POST["txttanggal"];
		$lamakerja = (strtotime($tanggal)-strtotime($mulai))/86400;
		$tahun = 365;
		$bonus = 0;
		
		if ($jabatan == "manager")
			if ($lamakerja > $tahun)
				$bonus = 20 /100 * $lamakerja * 50000;
			else
				$bonus = 10 / 100 * $lamakerja * 40000;
		else
			if ($lamakerja > $tahun)
				$bonus = 20 / 100 * $lamakerja * 40000;
			else
				$bonus = 10 / 100 * $lamakerja * 30000;		
						 

		echo "<p>"; 
		echo "Nama : ".$nama."<br>";
		echo "Jabatan : ".$jabatan."<br>";
		echo "Tgl bergabung : ".$mulai."<br>";
		echo "Lamanya bekerja : ".$lamakerja."<br>";
		echo "Bonus : ".$bonus."<br>";	
		echo "</p>";
}	


	?>
</body>
</html>
