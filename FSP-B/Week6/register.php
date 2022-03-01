<!DOCTYPE html>
<html>
<head>
	<title>FSP - Week 6 - Register</title>
</head>
<body>
	<?php
		if (isset($_POST['submit']))
		{
			$koneksi = new mysqli("localhost","root","","fsp-b");

			$user = $_POST['user'];
			$nama = $_POST['nama'];
			if ($_POST['pass'] === $_POST['kpass'])
			{
				$pass = $_POST['pass'];
				$salt = str_shuffle("FullPrograming");

				$md5pass = md5($pass);
				$finalpass = md5($salt.$md5pass.$salt);
				
				$sql = "INSERT INTO users VALUES(?,?,?,?)";
				$hasil = $koneksi->prepare($sql);
    			$hasil->bind_param("ssss", $user, $nama, $finalpass, $salt);
    			$hasil->execute();

    			if ($hasil->error != true) 
    				echo "Pendaftaran User Berhasil<br><br>";
    			else
    				echo "Pendaftaran User Gagal<br><br>";
			} 
			else
				echo "Password Tidak Sama<br><br>";

			$koneksi->close();	
		}
	?>
	<form method="post" action="">
		User: <input type="text" name="user" /><br>
		Nama: <input type="text" name="nama" /><br>
		Pass: <input type="password" name="pass" /><br>
		Konfirmasi Pass: <input type="password" name="kpass" /><br>
		<input type="submit" name="submit" value="Register" />
	</form>
</body>
</html>