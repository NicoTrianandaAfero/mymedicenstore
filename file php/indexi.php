<!DOCTYPE html>
<html>
<head>
	<title>week 09</title>
</head>
<body>
<h1>Upload Image</h1>
<form method="post" action="file_uploader.php" enctype="multipart/form-data">
	<label>Nama file : </label>
	<input type="txt" name="txtname" required>
	<br><br>
	<label>Pilih gambar : </label>
	<input type="file" name="photo">
	<br><br>
	<input type="submit" name="btnsubmit" value="Upload file">
</form>	

</body>
</html>