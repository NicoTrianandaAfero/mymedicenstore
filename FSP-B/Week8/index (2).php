<!DOCTYPE html>
<html>
<head>
	<title>FSP Week 8</title>
	<script type="text/javascript" src="https://code.jquery.com/jquery.js"></script>
</head>
<body>
	<?php 
	date_default_timezone_set("Asia/Jakarta");

	echo date("h:i:s"); 
	?>
	<br>
	First: <input type="text" id="first">
	<br>
	Last: <input type="text" id="last">
	<br>
	<input type="checkbox" id="tebal">Tebal
	<br>
	<button type="submit" id="btnSubmit">Klik Me</button>
	<br>
	FullName: <label id="lblFull"></label>
	<br>
	Timer JS: <label id="lblTime"></label>

	<script type="text/javascript">
		setInterval(function() {

			var d = new Date();
			var h = d.getHours();
			var m = d.getMinutes();
			var s = d.getSeconds();

			$("#lblTime").html(h + ":" + m + ":" + s);

		}, 1000);

		$("#btnSubmit").click(function() {

			var fn = $("#first").val();
			var ln = $("#last").val();
			var bd = $("#tebal").prop("checked");

			$.post("ajax_test.php", 
			{
				first: fn,
				last: ln,
				tebal: bd
			})
			.done(function(x) {

				$("#lblFull").html(x);
				//clearInterval(timer);
				//$("#txtTest").val(x);
				//alert(x);

			});
		});
	</script>
</body>
</html>