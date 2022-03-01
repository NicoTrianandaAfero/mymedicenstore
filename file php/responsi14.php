<!DOCTYPE html>
<html><head>
<title>Desain Web</title> <script src="http://code.jquery.com/jquery.js"></script>
<style type="text/css">
.row { clear: both; height: 30px; }
.kursi { border: 1px solid black; width: 30px; float: left; text-align: center; }
.merah { background-color: red; }
.hijau { background-color: green; }
</style>
</head>
<body>
<div class="row">
<label>Jumlah Kursi:</label>
<select id="cboJumlah">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
</select>
</div>
<div class="row">
<div class="kursi">A1</div>
<div class="kursi">A2</div>
<div class="kursi">A3</div>
<div class="kursi">A4</div>
<div class="kursi">A5</div>
<div class="kursi">A6</div>
</div>
<div class="row">
<div class="kursi">B1</div><div class="kursi">B2</div>
<div class="kursi merah" status="forbidden">B3</div>
<div class="kursi merah" status="forbidden">B4</div>
<div class="kursi">B5</div><div class="kursi">B6</div>
</div>
<div class="row">
<div class="kursi">C1</div><div class="kursi">C2</div><div class="kursi">C3</div>
<div class="kursi">C4</div><div class="kursi">C5</div><div class="kursi">C6</div>
</div>
<div class="row">
<div class="kursi">D1</div><div class="kursi">D2</div><div class="kursi">D3</div>
<div class="kursi">D4</div>
<div class="kursi merah" status="forbidden">D5</div>
<div class="kursi merah" status="forbidden">D6</div>
</div>
<div class="row">
<button type=’button’ id="btnSave">Save</button>
<button type=’button’ id="btnReset">Reset</button>
</div>
<script type="text/javascript">
	var jml_klik=0;
// tulis jawabanmu di bagian ini saja // tidak perlu menyalin sintaks HTML nya
$(".kursi").click(function(){
	// $(this).attr("class")!="kursi merah"
	if ($(this).attr("status")!="forbidden" && $(this).hasClass("merah")== false && $(this).hasClass("hijau")==false) {
		$(this).addClass("hijau");
		jml_klik++;
	}
	else{
		alert("harap memilih kursi lain");
	}
});
	$("#btnSave").click(function(){
		var jml_kursi = $("#cboJumlah").val();
		if (jml_klik==jml_kursi) {
			alert("pilihan kursi tersimpan");
		}
		else if (jml_klik<jml_kursi) {
			alert("pilihan kursi belum lengkap")
		}
		else{
			alert("pilihan kursi kelebihan")
		}
	});
	$("#btnReset").click(function(){
		$(".kursi.hijau").removeClass("hijau");
		$("#cboJumlah").val(1);
		jml_klik=0;
	});
</script>
</body>
</html>

