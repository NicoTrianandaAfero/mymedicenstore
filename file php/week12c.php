<!DOCTYPE html>
<html>
<head>
	<title>latihan 13</title>
	<script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
</head>

<body>
<p>
	<p><input type="button" name="btn" id="btnku1"  value="klik aku1"> </p>
	
</p>
<p>
	<a href="no-where" id="link">website</a>
</p>
		

<script type="text/javascript">

		$("#btnku1").click(function(){
			var temp = $("#txt1").val();
			alert(temp);
			$("#txt1").attr("href", temp) }
</script>
	

</body>
</html>