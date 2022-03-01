<?php
	session_start();
?>

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

			$user = addslashes($_POST['user']);
			$pass = $_POST['pass'];

			$sql = "SELECT * FROM users where iduser='$user'";
			$hasil = $koneksi->query($sql);

			if ($row = $hasil->fetch_assoc())
			{
				//echo "User Ada";
				$salt = $row['salt'];

				$md5pass = md5($pass);
				$finalpass = md5($salt.$md5pass.$salt);

				if ($row['password'] === $finalpass)
				{
					//echo "Login Berhasil";
					$_SESSION['user'] = $user;
					header("Location: home.php");
				}
				else
					echo "Login Gagal, Password Salah";

			}
			else
				echo "User Tidak Ada";

			$koneksi->close();	
		}
	?>
	<form method="post" action="">
		User: <input type="text" name="user" /><br>
		Pass: <input type="password" name="pass" /><br>
		<input type="submit" name="submit" value="Login" />
	</form>
</body>
</html>