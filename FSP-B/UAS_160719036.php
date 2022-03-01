<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Walrus Login</title>
	<og "Walrus Login">
	<og "Site that provide you with anything you want">
	<og "https://piscum.photos/id/1084/110/110">
	<og "https://www.walrus.com/login">

	<style type="text/css">
		body {
			margin: 0px;
			background-color: cyan;
		}
		.image{
			width: 100%;
			height: 100%;	
		}
		.container {
			height: 100vh;

			display: grid;

			grid-template-columns: 1fr 1fr 1fr;

			grid-template-areas: "main main aside"


		}
		section {
			grid-area: main;

		}

		aside {
			grid-area: aside;
			text-align: center;
			margin-top: auto;
			margin-bottom: auto;
		}
		@media (min-width: 1000px) {

		body{
			height: 100%; 
		}
		}
		@media (max-width: 540px) {
			section{
				display: none;
			}
			body{
				background-color: white;
			}
			aside {
				background-color: cyan;
				grid-area: aside;
				text-align: center;
				margin: 10px;
				margin-bottom: auto;
				width: 70%;
				margin-left: auto;
				margin-right: auto;

			}
			.container {
			height: 100vh;

			display: grid;

			grid-template-columns: 1fr;

			grid-template-areas: "aside"


		}
		}
		@media (max-width: 500px) {
			input{
				width: 80%;
			}
			
		}

	</style>

</head>
<body>
	<div class="container">
		<section>
			<img src='https://picsum.photos/id/1084/1024/790' class="image">
		</section>
		<aside>
			<form class="side">
				<h2>Sign In</h2>
				<input type="text" name="username"><br><br>
				<input type="text" name="password"><br><br>
				<button type="submit">Sign In</button>
			</form>
		</aside>
	</div>
</body>
</html>