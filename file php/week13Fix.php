<!DOCTYPE html>
<html>
<head>
	<title>Week13</title>
	<script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
</head>
<body>
<p>
	<input type="text" id="txt1" nomer="123"> <br> <input type="text" id="txt2">
</p>
<p>
	<input type="button" name="btn" id="btnku1" class="buttonku" value="Klik Aku 1">
	<input type="button" name="btn" id="btnku2" class="buttonku" value="Klik Aku 2">
</p>
<script type="text/javascript">
	$("#btnku2").click(function(){
		var nomerku = $("#txt1").attr("nomer");
		alert("Nomor rahasia" + nomerku);
		$("#txt1").attr("nomer", "765");
  	});
  	$("#btnku1").click(function(){
		var temp = $("#txt1").val();
		alert(temp);
		$("#txt2").val(temp);
  	});
</script>
</body>
</html>