<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Tic Tac Toe</title>
	<script type="text/javascript" src="jquery-3.5.1.min.js"></script>
	<style type="text/css">
		*{
			font-family: 'bahnschrift',cursive;
		}
		body{
			margin: 0;
		}

		.container{
			display: grid;
			min-height: 100vh;
			grid-template-columns: 1fr 1fr 1fr;
			grid-template-rows: 0.5fr 1fr 0.5fr;
			grid-template-areas: 	"area-header area-header area-header"
									"area-side1 area-content area-side2"
									"area-footer area-footer area-footer";
			text-align: center;
			justify-content: center;
		}
		.header{
			grid-area: area-header;
		}
		.side1{
			grid-area: area-side1;
		}
		.content{
			grid-area: area-content;
		}
		.side2{
			grid-area: area-side2;
		}
		.footer{
			grid-area: area-footer;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="header"><h1>Ready Player Tic Tac Toe?</h1></div>
		<div class="side1"></div>
		<div class="content">
			<form action="index.php" method="post">
				Your Name:<br>
				<input type="text" name="username"><br><br>
				Your choice:<br>
				<input type="radio" name="item" value="O">Circle<br>
				<input type="radio" name="item" value="X">Cross<br><br>
				<button type="submit" name="btnSubmit">Go!!!</button>
			</form>
		</div>
		<div class="side2"></div>
		<div class="footer"></div>
	</div>
</body>
</html>