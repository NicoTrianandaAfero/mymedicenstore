<?php 

	require_once("parent.php");

	class Movie extends ParentCls{

		public function __construct($server, $db, $user, $pwd){
			parent::__construct($server,$db,$user,$pwd);
			parent::status();
		}

		public function getMovie($keyword=""){
			$sql= "SELECT * FROM MOVIE WHERE judul LIKE '%$keyword%'";
			$hasil = $this->koneksi->query($sql);

			/*
			$sql= "SELECT * FROM MOVIE WHERE judul LIKE ?";
			$stmt = $this->koneksi->prepare($sql);
			$keyword = "%".$keyword."%";
			$stmt->bind_param("s",$keyword);
			$stmt->execute();
			$hasil = $stmt->get_result();*/


			return $hasil;
		}
	}


?>