<!DOCTYPE html>
<html>
<head>
	<title>Week 14 Exercise 3</title>
	<script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
</head>
<body>
<div>
	Barang 1 = Qty <input type="number" id="jumlah1" seq="1" class="jumlah">
	x Harga <input type="number" id="harga1" seq="1" class="harga">
	= <span class="subtotal" id="subtotal1" seq="1">0</span>
</div><br>
<div>
	Barang 2 = Qty <input type="number" id="jumlah2" seq="2" class="jumlah">
	x Harga <input type="number" id="harga2" seq="2" class="harga">
	= <span class="subtotal" id="subtotal2" seq="2">0</span>
</div><br>
<div>
	GRAND TOTAL <span class="grandtotal"></span>
</div>

<script type="text/javascript">
	$(".jumlah, .harga").keyup(function(){
		var seq = $(this).attr("seq");
		var jumlah = $(".jumlah[seq="+seq+"]").val();
		var harga = $(".harga[seq="+seq+"]").val();
		$(".subtotal[seq="+seq+"]").html(jumlah*harga);

		var grandtotal = 0;
		$(".subtotal").each(function(){
			grandtotal += $(this).html() * 1;
		});
		$(".grandtotal").html(grandtotal);
	});
</script>
</body>
</html>