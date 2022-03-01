 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title>Tes</title>
 </head>
 <body>
 <?php 
 	$koneksi = new mysqli("localhost", "root","","latihan" ); //mengkonekkan database ke html ("")untk pasword

 	if($koneksi->connect_errno) 	//digunakan untuk mengecek, apabila terjadi kesalahan pada koneksinya(kalau nomornya 0 berarti ngga  eror)
 	{
 	 	die ( "Failed to connect to MySQL ". $koneksi->connect_error); //Fungsi die() adalah alias dari fungsi exit()
  	}

  	echo "<br>Ready to Process Database<br>";
 


 	$sql = "SELECT * FROM movie"; // selecet menghasilkan sebuah data , kumpulan data sesuai dengan jumlah field nya.
 	$hasil = $koneksi->query($sql);

	//kalau menggunakana SELECT pastikan ada lanjutannya dengan menggunakan fetch
 	//didalam php my sql untuk mengambil data dari databae cukup 1 perintah
 	$result = $hasil->fetch_assoc();  //untuk mengambil sebuah data yang dihasilkan dari query selectnya kita bisa menggunakan yang namanya fetch_assoc

 	//cara mengetahui arraynya isinya apa sih?, lebih baik menggunakanan prin r, kalau foreach kelamaan 
 	print_r($result);  




 	$koneksi->close(); // setiap ada new harus ada close
?>	
</body>
</html>