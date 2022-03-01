<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		input[type=text]{
			background-color: #c5fcb1;
		}
		input[type=text]focus{
			background-color: #b1e4fc;
			font-style: italic;
		}
	</style>
</head>
<body>
	<form action="catcherResponsi5.php" method="POST">
		<label>Nama</label>
		<input type="text" name="nama"><br><br>
		<label>Hobi</label>
		<input type="text" name="hobi"><br><br>
		<input type="radio" name="gender" value="perempuan">
		<label>perempuan</label>
		<input type="radio" name="gender" value="pria" checked>
		<label>pria</label><br>
		<input type="submit" name="btnsubmit" value="submit">
	</form>

</body>
</html>