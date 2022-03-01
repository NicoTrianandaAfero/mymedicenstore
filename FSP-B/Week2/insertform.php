<!DOCTYPE html>
<html>
<head>
	<title>FSP - Database</title>
	<style type="text/css">
		.form-group { clear: both; padding: 2px; }
		.form-label { display: block; float:left; width:20%; }
	</style>
</head>
<body>
	<form method="POST" enctype="multipart/form-data" action="insertproses.php">
		<div class="form-group">
			<label class="form-label">Judul</label>
			<input type="text" name="judul">
		</div>
		<div class="form-group">
			<label class="form-label">Rilis</label>
			<input type="date" name="rilis">
		</div>
		<div class="form-group">
			<label class="form-label">Skor</label>
			<input type="text" name="skor">
		</div>
		<div class="form-group">
			<label class="form-label">Sinopsis</label>
			<input type="text" name="sinopsis">
		</div>
		<div class="form-group">
			<label class="form-label">Serial</label>
			<input type="radio" name="serial" value="1">Ya
			<input type="radio" name="serial" value="0">Tidak
		</div>
		<div class="form-group">
			<label class="form-label">Gambar</label>
			<input type="file" name="gambar">
		</div>
		<div class="form-group">
			<label class="form-label">Genre</label>
			<?php
				$koneksi = new mysqli("localhost","root","","fsp-b");

				$sql = "SELECT * FROM genre";
				$hasil = $koneksi->query($sql);

				while($baris = $hasil->fetch_assoc())
				{
					$id = $baris['idgenre'];
					$nama = $baris['nama'];
					echo "<input type='checkbox' name='genre[]' value='$id'>$nama";
				}
		
				$koneksi->close();
			?>

		</div>
		<div class="form-group">
			<input type="submit" name="submit" value="Tambah Movie">
		</div>
	</form>
</body>
</html>