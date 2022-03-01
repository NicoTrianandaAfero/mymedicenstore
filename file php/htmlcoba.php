<!DOCTYPE html>
<html>
<head>
	<title>DATA PENJUALAN KUE </title>
</head>
<body>
<?php
/*$arr = array(5,8,3);
$arr = [4] = 10;
$arr["nama"] = "bejo";

$arr

foreach ($arr as $nilainya) {
	echo $nilainya."<br>";
}	

foreach ($arr as $key_nya => $nilainya) {
	echo "key ". $key_nya."=" .$nilainya."<br>";


$arr1= array("Ubaya"=>"http://www.ubaya.ac.id","Google"=>"https://google.com","Msn"=>"https://www.msn.com","Del" =>"https://www.dell.com");
echo "ul";
foreach ($arr1 as $key => $value) {
	echo "<li><a href= '$value' > $key</a></li>";
}
echo "</ul>";

$buah= array("jeruk","apel");
$sayur=array("bayam","sawi","selada");
$favoritku = array("buah" => $buah, "sayur" => $sayur)
$favoritku = array("buah" => array("jeruk","apel", "sayur", =>array("bayam","sawi","selada");

echo "$favoritku("buah")[0];	


$nilai=array("A"=>array("min"=>81, "max" =>100),
	"AB"=>array("min"=>73, "max" =>80),
	"B"=>array("min"=>66, "max" =>72),
	"BC" =>array("min"=>60, "max" => 65),
	"C" =>array("min" =>55, "max" => 59),
	"D"=>array("min" => 40, "max"=>54),
	"E"=>array("min" => 0, "max" = 39)
);
foreach ($nilai as $nisbi => $nilainya) {
	echo $nisbi;
	echo "[";
	foreach ($nilainya as $kategori => $poin)
	{	
		echo $kategori. "=".poin.",";
	}
	echo "]<";

}*/
$daftar_kue = array("Brownies"=> array("ukuran"=>"M","harga"=>50000,"terjual"=>30),
	"Spiku"=> array("ukuran"=>"S","harga"=>35000,"terjual"=>20),
	"Cheesecake"=> array("ukuran"=>"S","harga"=>35000,"terjual"=>55),
	"Lapis Legit"=> array("ukuran"=>"L","harga"=>250000,"terjual"=>22),
	"Chiffon"=> array("ukuran"=>"M","harga"=>30000,"terjual"=>31),
	"Tart"=> array("ukuran"=>"M","harga"=>150000,"terjual"=>15),
	"Tiramisu"=> array("ukuran"=>"S","harga"=>170000,"terjual"=>18),
	"Red Velvet"=> array("ukuran"=>"M","harga"=>200000,"terjual"=>30),
	"Black Forest"=> array("ukuran"=>"M","harga"=>210000,"terjual"=>33),
	"Strawberry Shortcake"=> array("ukuran"=>"L","harga"=>250000,"terjual"=>40)
);
echo "<h1>Data penjuala kue</h1>";
echo "<table border = 1 style = border-colappse:collapse;'>";
echo "<tr>";
echo "<td><b>Nama Kue</b></td>";
echo "<td><b>ukuran</b></td>";
echo "<td><b>Harga</b></td>";
echo "<td><b>Terjual</b></td>";
echo "</tr>";
foreach ($keterangan as $key => $value) {
	if ($key == "harga"){
		echo "<td> Rp. " number_format($value, 0
			, '.', '-') "</td>";
	}else {
		echo "<td>$value</td>";
	} 
	
}
echo "</tr>";

echo "</table>";



?>
</body>
</html>