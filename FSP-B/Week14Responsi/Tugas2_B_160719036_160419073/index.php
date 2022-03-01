<?php
	$username;
	$item;

	if(isset($_POST['btnSubmit'])){
		$username=$_POST['username'];
		$item=$_POST['item'];
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tugas 2 Tic Tac Toe</title>
	<script type="text/javascript" src="jquery-3.5.1.min.js"></script>
	<style type="text/css">
		*{
			font-family: 'bahnschrift',cursive;
		}

		body{
			margin: 0;
		}
		table{
			grid-area: area-content;
			background-color: lightgreen;
			border: 2px solid black;
			padding: 5px;
		}
		td{
			border: 1px solid black;
		}

		.container{
			display: grid;
			min-height: 100vh;
			grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
			grid-template-rows: 1fr 1fr 1fr 1fr 1fr;
			grid-template-areas: 	"area-header area-header area-header area-header area-header"
									"area-side1 area-content area-content area-content area-side2"
									"area-side1 area-content area-content area-content area-side2"
									"area-side1 area-content area-content area-content area-side2"
									"area-footer area-footer area-footer area-footer area-footer";
			text-align: center;
			justify-content: center;
		}

		.head{
			grid-area: area-header;
			background-color: green;
		}
		.side1{
			grid-area: area-side1;
			background-color: lightblue;
		}
		.side2{
			grid-area: area-side2;
			background-color: lightblue;
		}
		.foot{
			grid-area: area-footer;
			background-color: lightsteelblue;
		}
		.pemain1{
			background-image: url(/img/circle.png);
		}
		.pemain2{
			background-image: url(/img/cross.png);
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="head">
			<h1>TIC TAC TOE</h1>
			<h3>Player (<?= $item ?>) <?= $username ?></h3>
		</div>
		<div class="side1"></div>
		<table>
        	<tr>
            	<td class="content" item="1"></td>
            	<td class="content" item="2"></td>
            	<td class="content" item="3"></td>
        	</tr>
        	<tr>
            	<td class="content" item="4"></td>
            	<td class="content" item="5"></td>
            	<td class="content" item="6"></td>
        	</tr>
        	<tr>
            	<td class="content" item="7"></td>
            	<td class="content" item="8"></td>
            	<td class="content" item="9"></td>
        	</tr>
    	</table>
		<div class="side2"></div>
		<div class="foot">
			Player <?= $username?>'s turn<br>
			<input type="hidden" class="pemain" name="pemain" value="<?= $username?>">
		</div>
	</div>
	<script>
		$('.content').click(function() {
			var pemain = $(.pemain).val();
            var item = "Test";
            var position = $(this).attr('item');
            $.post('http://localhost:8080/FSP/Tugas2/game.php', {
                pemain: pemain,
                item: item,
                position: position,
            }).done(function(data) {
                if (data == "berhasil") {
                    alert("Test");
                }
            });
        });
	</script>
</body>
</html>