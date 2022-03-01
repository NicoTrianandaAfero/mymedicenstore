<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		input[type=text]{
			background-color: #acfaf6;
		}	
		input[type=text]:focus{
			background-color: #f2e6aa;
		}
		#btnsubmit2 {
			background-color: #c5f7ab;
		}	
		#btnsubmit2:hover{
			background-color: #c8bbfa; 
			font-weight: bold; width: 100px;
		}								
	</style>
</head>
<body>
	<h1>Hitung Bonus</h1>
	<form method = "post" action="catcher.php" autocomplete="off">
	<label>Name : </label><input type="text" name="txtname"><br><br>
	<label>Jabatan :</label>
	<label><input type="radio" name="rdojbt" id ="rdoManager" value = "Manager">Manager</label>
	<input type="radio" name="rdojbt" value="Staff" id="rdostaff" checked><label>Staff</label><br>
	<br>
	<label>Bekerja sejak : </label><input type="date" name="txttanggal"><br>
	<br>
	<button type="submit" name="btnsubmit2" value="n"
	id ="btnsubmit2">Submit 
	</button>

</body>
</html>