<?php
	session_start();

	if (isset($_SESSION['user'])){

		$koneksi = new mysqli("localhost", "root", "fsp-b")
	}
		
	else
		header ("Location: login.php");

?>