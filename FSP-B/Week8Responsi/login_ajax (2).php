<?php
$koneksi = new mysqli('localhost', 'root', '', 'fsp-b');

$username = $_POST['uname'];
$password = $_POST['passwd'];

$sql = 'SELECT * FROM users WHERE iduser = ? AND password = ?';
$stmt = $koneksi->prepare($sql);
$stmt->bind_param('ss', $username, $password);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    echo 'sukses';
} else {
    echo 'gagal';
}
