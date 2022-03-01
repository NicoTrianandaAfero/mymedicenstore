<!DOCTYPE html>
<html>
<head>
	<title></title>
<style type="text/css">
	.item-makanan {
		float: left;
		width: 120px;
		padding : 5px;
		margin: 5px;
		border: 1px solid black;
	}
	.item-gambar {
		margin: 5px;
		width: 110px;
		height: 110px;
	}
	.gambar {
		object-fit: cover;
		width: 100%;
		height: 100%;

	}
	.item-keterangan{
		padding: 2px;
		text-align: center;
	}
	.item-nama{
		font-weight: bold;
	}
	.item-tombol{
		text-align: center;
		margin: 5px;
	}
</style>	
</head>
<body>
	<?php 
	 $makanan = array(
	 	array("nama"=>"bakso", "harga" =>15000),
	 	array("nama"=>"soto", "harga" =>20000),
	 	array("nama"=>"sate ayam", "harga" =>20000),
	 	array("nama"=>"rawon", "harga" =>25000),
	 	array("nama"=>"rujak cingur", "harga" =>18000),
	 	array("nama"=>"batagor", "harga" =>15000),
	 	array("nama"=>"nasi goreng", "harga" =>15000),
	 	array("nama"=>"mie ayam", "harga" =>18000),

	 );

	 foreach($makanan as $id =>$item){
	 	echo "<div class = 'item-makanan'>
	 			<div class = 'item-gambar'>
	 				<img src = 'img/$id.jpg' class ='gambar'>
	 				</div>
	 				<div class = 'item-keterangan'>
	 					<p class = 'item-nama'>".$item['nama']."</p>
	 					<p class = 'item-nama'>".$item['harga']."</p>
	 				</div>
	 				<div class = 'item-tombol'>
	 					<input type = 'button' value = 'tambah' class = 'btn-tambah'>
	 				</div>
	 			</div>";				
	 				
	 }
	 ?>

</body>
</html>