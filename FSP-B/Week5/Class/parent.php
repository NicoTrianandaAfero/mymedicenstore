<?php 
	
	class ParentCls{

		protected $koneksi;

		public function __construct($server="localhost", $db="fsp-b", $user="root", $pwd=""){
			$this->koneksi = new mysqli($server,$user,$pwd,$db);
		}

		public function status(){
			echo "<br>Masuk DB<br>";
		}

		public function __destruct(){
			$this->koneksi->close();
		}

	}

?>