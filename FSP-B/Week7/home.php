<?php  ?>


<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> FSP WEEK 7</title>
	<style type="text/css">
		header {
			background-color: lightyellow;
			height: 50px;
		}
		nav {
			background-color: lightblue;
			height: 100px;
			float: left;
			width: 50%;
		}
		section {
			background-color: lightgreen;
			height: 100px;
			float: right;
			width: 50%;
		}
	</style>
</head>
<body>
	<header>Header Page</header>
		<h2> Welcome <? = $_SESSION['user']?>, <a href='logout.php'>Logout</a> </h2> 
	<nav>Navigasi Page</nav>
		<p>Home</p>
		<ul>
			<li>Produk</li>
			<li>Customer</li>
			<li>Supplier</li>
		</ul>
	<section>Content Page</section>


</body>
</html>


