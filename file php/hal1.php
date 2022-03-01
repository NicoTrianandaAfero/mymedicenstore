<!-- <!DOCTYPE html>
<html>
<head>
	<title>table heading</title>
<style type="text/css">
	
</style>	
</head>
<body>
<table style="width: 100" >
	<tr>
		<th>first name</th>
		<th>last name</th>
		<th>Points</th>
	</tr>
	<tr>
		<td>jill</td>
		<td>smith</td>
		<td>50</td>
	</tr>
	<tr>
		<td>eve</td>
		<td>jokson</td>
		<td>94</td>
	</tr>
	<tr>
		<td>john</td>
		<td>doe</td>
		<td>80</td>
	</tr>
</table>	

</body>
</html> -->


<!-- <!DOCTYPE html>
<html>
<head>
	<title>position</title>	
<style type="text/css">
	div {
		width: 200px;
		height: 200px
	}
	.satu {
		background: green;
	}
	.dua {
		background: orange;
		position: relative;
		top: 30px;
		left: 50px;
	
	}
	.tiga {
		background: red;
	}
</style>	
</head>
<body>
	<div class="satu"></div>
	<div class="dua"></div>
	<div class="tiga"></div>
</body>
</html> -->

<!DOCTYPE html>
<html>
<head>
	<title>Upload gambar</title>
<style type="text/css">
	
</style>	
</head>
<body>
<form method="post" action="Upload.php">
	<P>Nama gambar : </P><input type="text" name="nama">
	<br>
	<p>Tipe gambar : </p><input type="radio" name="tipe" value="public"><input type="radio" name="tipe" value="public">
	<br>
	<p>File gambar : </p><input type="file" name="namafile">
	<br>
	<input type="submit" name="submit" value="Upload gambar">		
</form>	

</body>
</html>