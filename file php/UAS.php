<!DOCTYPE html>
<html>
<head>
    <title>Nomor 2</title>
      <script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>     
    <style type="text/css">
        th { min-width: 50px; }
        .background-merah { background: red; }
    </style>
</head>
<body>
<table border="1">
    <tr>
        <th>1</th>    <th>2</th>    <th>3</th>    <th>4</th>    <th>5</th>
        <th>6</th>    <th>7</th>    <th>8</th>    <th>9</th>    <th>10</th>
    </tr>
    <tr>
        <td col="1">&nbsp;</td>    <td col="2">&nbsp;</td>
        <td col="3">&nbsp;</td>    <td col="4">&nbsp;</td>
        <td col="5">&nbsp;</td>    <td col="6">&nbsp;</td>
        <td col="7">&nbsp;</td>    <td col="8">&nbsp;</td>
        <td col="9">&nbsp;</td>    <td col="10">&nbsp;</td>
    </tr>
</table>
<div>
    <p>
        <label>Kolom </label>
        <select id="selkolom">
            <option value="1">1</option>    <option value="2">2</option>
            <option value="3">3</option>    <option value="4">4</option>
            <option value="5">5</option>    <option value="6">6</option>
            <option value="7">7</option>    <option value="8">8</option>
            <option value="9">9</option>    <option value="10">10</option>
        </select>
    </p>
    <p>
        <label>Nama </label>
        <input type="text" id="txtnama">
    </p>
    <p>
        <input type="button" id="btnsubmit" value="Submit">
        <input type="button" id="btnreset" value="Reset">
    </p>
</div>
<script type="text/javascript">

 $("#btnsubmit").click(function(){
    var klk_nama = $("#txtnama").val();
    var klk_angka = $("#selkolom").val(); 
    $("td[col="+ klk_angka +"]").addClass("background-merah");
    $("td[col="+ klk_angka +"]").html(klk_nama);
});
 $("#btnreset").click(function(){
        $("td").removeClass();
        $("td").html("&nbsp;"); 
         $("#selkolom").val(1)      
    });



</script>
</body>
</html>