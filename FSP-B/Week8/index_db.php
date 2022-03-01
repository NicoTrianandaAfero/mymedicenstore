<!DOCTYPE html>
<html>
<head>
	<title>FSP Week 8 - Database</title>
	<script type="text/javascript" src="https://code.jquery.com/jquery.js"></script>
</head>
<body>
	<input type="text" id="search">
	<br><br>
	<button type="button" id="btnTunggal">Request Data Tunggal</button>
	<button type="button" id="btnJSON">Request With JSON</button>
	<button type="button" id="btnNonJSON">Request No JSON</button>
	<br>
	<div id="hasil"></div>

	<script type="text/javascript">
		$("#btnNonJSON").click(function() {
			var s = $("#search").val();

			$.post("ajax_nonjson.php", 
				{ 
					search: s 
				})
			.done(function(data) {
				$("#hasil").html(data);
			});
		});


		$("#btnJSON").click(function() {
			var s = $("#search").val();

			$.post("ajax_json.php", 
				{ 
					search: s 
				})
			.done(function(data) {
				var jResult = JSON.parse(data);
				$("#hasil").html("<strong>" + jResult.judul + "</strong><br>");
				$("#hasil").append("<em>" + jResult.sinopsis + "</em>");
			});
		});

		
		$("#btnTunggal").click(function() {
			var s = $("#search").val();

			$.post("ajax_db.php", 
				{ 
					search: s 
				})
			.done(function(data) {
				$("#hasil").html(data);
			});
		});


	</script>
</body>
</html>