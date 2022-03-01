<!DOCTYPE html>
<html>
<head>
	<title>Halaman 2</title>
</head>
<body>
<?php
if (isset($_POST['btnsubmit2'])) {
 	$nama = $_POST['txtnama'];
    $email = $_POST['txtemail'];
    $tanggal = $_POST['txttanggal'];

    if (isset($_POST['cbomakan'])) 
	     $makan =$_POST['cbomakan'];
    else
	     $makan= "-";

$tidur = (isset($_POST['cbotidur'])) ? $_POST['cbotidur'] : "-";

echo "Nama = " .$nama."<br>";
echo "Email = " .$email."<br>";
echo "Tanggal = ".$tanggal."<br>";
echo "Hobi1 = " .$makan."<br>";
echo "Hobi2 = " .$tidur."<br>";

 } 
?>
</body>
</html>