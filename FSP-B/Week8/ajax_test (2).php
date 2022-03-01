<?php
	$first = $_POST["first"];
	$last = $_POST["last"];
	
	if ($_POST["tebal"] === "true")
		echo "<strong>$first $last</strong>";
	else
		echo "$first $last";

	//print_r($_POST);
?>
