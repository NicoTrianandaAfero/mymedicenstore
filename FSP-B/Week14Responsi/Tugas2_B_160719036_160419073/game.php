<?php
    header("Access-Control-Allow-Origin: *");
    $koneksi = new mysqli("localhost", "root", "", "fsp_uas");

    if ($koneksi->connect_errno) {
        die("Failed to connect to MySQL: " . $koneksi->connect_error);
    }

    $pemain = $_POST['pemain'];
    $item = $_POST['item'];
    $position = $_POST['position'];

    $sql = "INSERT INTO game(pemain,item, position) VALUES (?,?,?)";
    $hasil = $koneksi->prepare($sql);
    $hasil->bind_param("ssi", $pemain, $item, $position);
    $hasil->execute();
    print_r($hasil);

    if ($hasil->error != true) {
        $sql = "SELECT * FROM game";
        $hasil = $koneksi->query($sql);

        while ($baris = $hasil->fetch_assoc()) {
                $position = $baris['position'];
                if($position==1 && $position==2 && $position==3){
                    echo "Coba berhasil";
                }
            }

    } else{

    }
?>