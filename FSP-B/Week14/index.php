<?php
	/*
	koneksi ke php
	query: SELECT * FROM article WHERE id=297

	menjadi 

	query: SELECT * FROM article WHERE link='webminar-implementasi-data-science'
	*/

	echo $_SERVER["REQUEST_URI"];

	echo "<br>";


	$exp = explode("/", $_SERVER["REQUEST_URI"]);

	if (end($exp) !== "")
		echo end($exp);
	else
		echo $exp[count($exp)-2];
	//print_r($exp);




?>