<?php
$mysqli = new mysqli('localhost', 'root', '', 'projectuasfsp');
if ($mysqli->connect_errno !== 0) {
    echo $mysqli->error;
    die();
}
extract($_POST);
$player = $_POST['player'];
$box = $_POST['box'];
$sql = "INSERT INTO permainan(player,box) VALUES(?,?)";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param('si',$player,$box);
$stmt->execute();
if($stmt->affected_rows >0){
    echo "berhasil";
}
else{
    echo $mysqli->error;
}
$stmt->close();
$mysqli->close();
