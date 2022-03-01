<!DOCTYPE html>
<html>
<head>
	<title>week 13</title>
	<script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
<style type="text/css">
	.tebal {font-weight: bold;}
	.miring { font-style: italic; }
</style>
</head>

<body>
<p id="par1">
	lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eusimod tenpor licindut
</p>	
<p>
	<input type="text" id = "txt1" nomer ="123"> <br> 
	<input type="text" id="txt2">
</p>
<P>
	<input type="button" name="btn1" id="btnku1"  value="klik aku1"> 
	<input type="button" name="btn2" id="btnku2"  value="klik aku2">
	<input type="button" name="btn3" id="btnku3"  value="klik aku3"> 

</P>
	
<script type="text/javascript">
	<script type="text/javascript">
	$("#btnku1").click(function(){
		var nomerku = $("#txt1").attr("nomer");
		alert("Nomor rahasia" + nomerku);
		$("#txt1").attr("nomer", "765");
		// $("#btnku1").click(function(){
		// 	var temp = $("#txt1").attr("nomer");
		// 	alert(temp);
			// $("par1").addClass("tebal");
			// $("par1").removeClass("tebal");
			// alert($(#par2).css("color"));
			//var nomerku = $("#txt1").attr("nomor");
			//alert("Nomor rahasia " + nomerku);
			//$("#txt1").attr("nomer", "765");
		});

		$("#btnku2").click(function(){
			$("txt3").attr("nomor");
			$("par1").addClass("tebal");
			$("par1").removeClass("tebal");
			alert($(#par2).css("color"));
		})	
</script>
	

</body>
</html>