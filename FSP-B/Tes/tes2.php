<!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title>Tes</title>
 	<style type="text/css">
 		table, td, th 
 		{
 			border: 1px solid black;
 		}

 	</style>
 </head>
 <body>
 <?php 
 	$koneksi = new mysqli("localhost", "root","","latihan" );  
 	if($koneksi->connect_errno) 	 
 	{
 	 	die ( "Failed to connect to MySQL ". $koneksi->connect_error);  
  	}

  	echo "<br>Ready to Process Database<br>";
 


 	$sql = "SELECT * FROM movie"; 
 	$hasil = $koneksi->query($sql);
	
	//$baris = $hasil->fetch_assoc();
	//echo $baris[""]."<br>"; 

 	//echo "<table style='border: 1px solid black'>";  membuat kotak tanpa border, perhatikan petik 1 dan petik 2.

 	echo "<table>";
 	echo "<tr><th>Judul</th><th>Tgl Rilis</th><th>Sinopsis</th><th>Serial</th><th>Genre</th></tr>";

	while ($baris = $hasil->fetch_assoc())
	{
		echo "<tr>";
		echo "<td>".$baris["judul"]."</td>";
		echo "<td>".date("d F Y",strtotime($baris["rilis"]))."</td>"; //penggunaan date 
		echo "<td>".$baris["sinopsis"]."</td>";
		echo "<td>";
		if ($baris["serial"] == 0)
		{
			echo "tidak";
		}
		else {
			echo "Ya";
		}
		echo "</td>";
		echo "<td>".$baris["genre"]."</td>";
		echo "</tr>"; 
	}
	echo "</table>";


 	$koneksi->close();  
?>	
</body>
</html>