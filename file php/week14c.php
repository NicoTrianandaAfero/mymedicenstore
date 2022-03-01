<!DOCTYPE html>
<html>
<head>
	<title>week 14</title>
	<script type="text/javascript" src="js/jquery-3.5.1.min.js"> </script>
</head>
<body>
<p id="par1"></p>
<p>
	<input type="text" id="teks1"> <br>
	<input type="button" id="btnBefore" value="Before">
	<input type="button" id="btnAfter" value="After">
	<input type="button" id="btnAppend" value="Append">
	<input type="button" id="btnSethtml" value="Set HTML">
	<input type="button" id="btnGethtml" value="Get HTML">
</p>	

<script type="text/javascript">

	$("#btnafter").click(function(){
	var isi_teks = $("#teks1").val();
	$("#par1").After(isi_teks);	
	});

	$("#btnBefore").click(function(){
	var isi_teks = $("#teks1").val();
	$("#par1").Before(isi_teks);	
	});

	$("#btnAppend").click(function(){
	var isi_teks = $("#teks1").val();
	$("#par1").Append(isi_teks);	
	});

	$("#btnSethtml").click(function(){
	var isi_teks = $("#teks1").val();
	$("#par1").html(isi_teks)	
	});


	$("#btnGethtml").click(function(){
	alert($("#par1").html());
	});


</script>

</body>
</html>