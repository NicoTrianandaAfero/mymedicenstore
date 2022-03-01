<!DOCTYPE html>
<html>
<head>
	<title>wwek 13</title>
	<script type="text/javascript"></script>
</head>
<body>
<p id="par1"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut 
	
</p>	
<p>
	<input type="button" name="btnhide" value="hide">
	<input type="button" name="btnshow" value="show">
</p>

<script type="text/javascript">
	$("#btnhide").click(function(){
		$("#par1").slideDown()
	
	
	});

	$("#btnshow").click(function(){
		$("#par1").slideUp()
	
	})	
</script>

<body>
	<select id="cbochoice">
		<option value="">pict one fruit</option>
		<option value="1">mango</option>
		<option value="2">orange</option>
		<option value="3">melom</option>
		<option value="4">other fruit</option>
	</select>
<input type="text" id="txtfruit" style="display: none;">
<input type="button" class="buttonku" value="satu">
<input type="button" class="buttonku" value="dua">

<script type="text/javascript">
	$(".buttonku").click(function()){
		var choice
	}
</script>
	
</body>


</body>
</html>