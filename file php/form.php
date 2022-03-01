<!DOCTYPE html>
<html>
<head>
	<title>week 5</title>
</head>
<body>
	<form method = "post" action="halaman2.php">
	<label>nama :</label><input type="text" name="txtnama"
	maxlength="40" placeholder="Masukan nama" autofocus><br>
	<label>pasword :</label><input type="pasword" name="txtpasword" required=""><br>
	<label>email :</label><input type="email" name="txtemail" required=""><br>
	<label>website : </label><input type="url" name="txtwebsite"><br>
	<label>IPK :</label> <input type="Number" name="txtipk" min="0" max="4"step ="any"><br>
	<label>Tanggal : </label><input type="date" name="txttanggal"><br>
	<label>gender :</label>
	<label><input type="radio" name="rdogender" id="rdopria" checked value="p"> pria</label>
	<input type="radio" name="rdogender" value="w" id="rdowanita"><label>wanita</label>
	<br>
	<label>Hobby : </label>
	<label><input type="checkbox" name="cbomakan" checked value="makan" id="cbomakan">Makan</label>
	<input type="checkbox" name="cbotidur" value="tidur" id="cbotidur"><label>Tidur</label>
	<input type="checkbox" name="cbomain" value="main" id="cbomain"><label>Main</label>
	<label> Alamat : </label><textarea name="txtalamat"></textarea><br>
	<label>Kota asal : </label>
	<select name="selkota" required="">
		<option value="">-- pilih kota --<</option>
		<option value="sby">Surabaya</option>
		<option value="jkt">Jakarta</option>
		<option value="dps">denpasar</option>
	</select>
	
	<br>
	<input type="submit" name="btnsubmit1" value="submit 1">
	<button type="submit" name="btnsubmit2" value="sub">Submit 2</button>
	<button type="reset" name="btnreset" value="res">Reset</button>
	<button type="button" name="tombolku" value="t">tombolku</button>

		
	</form>

</body>
</html>