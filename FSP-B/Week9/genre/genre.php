<!DOCTYPE html>
<html>
<head>
	<title>FSP B - Week 9</title>
	<script type="text/javascript" src="https://code.jquery.com/jquery.js"></script>
</head>
<body>
	<select name="movie" id="movie">
		<option value="0">-</option>
		<?php
			$con = new mysqli("localhost","root","","fsp-b");

			$sql = "SELECT idmovie, judul FROM movie";
			$res = $con->query($sql);

			while ($row=$res->fetch_assoc())
			{
				$id = $row["idmovie"];
				$judul = $row["judul"];
				echo "<option value='$id'>$judul</option>";
			}

			$con->close();
		?>
	</select>
	<select name="genre" id="genre"></select>

	<script type="text/javascript">

		$("#movie").change(function() {
			var idmovie = $(this).val();

			$.post("ajax_genre.php", 
			{
				id: idmovie
			})
			.done(function(data) {
				$("#genre").html(data);
			});
		});

	</script>
</body>
</html>
