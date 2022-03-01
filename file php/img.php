<!DOCTYPE html>
<html>
<head>
	<title> Ini gambar ku</title>
</head>
<body>
	<?php
		$random = mt_rand(1, 15);
			if($random <= 5){
				$hadiah ="pikachu";
				$gambar = "<img src= 'img/pikachu.jpg' style='width: 200px'>";
			}
			else if($random <= 10) {
				$hadiah="spongbob";
				$gambar = "<img src= 'img/spongbob.jpg' style='width: 200px'>";
			}
			elseif ($random <= 11){
				$hadiah = "patrik";
				$gambar = "<img src= 'img/patrik.jpg' style='width: 200px'>";
			}
			elseif ($random <= 15) {
				$hadiah = "bolang";
				$gambar = "<img src= 'img/bolang.jpg' style='width: 200px'>";
			}
			echo "<h1>Selamat! anda mendapatkan hadiah $hadiah</h1>";
			echo "<h2>Nomor keberuntunganmu $random</h2>";			
			echo "$gambar";
	?>		


</body>
</html>