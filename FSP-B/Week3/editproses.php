<!DOCTYPE html>
<html>

<head>
    <title>FSP - Database</title>
</head>

<body>
    <?php
    $koneksi = new mysqli("localhost", "root", "", "fsp-b");

    if ($koneksi->connect_errno) {
        die("Failed to connect to MySQL: " . $koneksi->connect_error);
    }

    echo "<br>Ready to Process Database<br>";

    $idmovie = $_POST['idmovie'];
    $judul = $_POST['judul'];
    $rilis = $_POST['rilis'];
    $skor = $_POST['skor'];
    $sinopsis = $_POST['sinopsis'];
    $serial = $_POST['serial'];
    $genre = $_POST['genre'];
    $gambar = $_FILES['gambar'];

    // echo "<pre>";
    // print_r($gambar);
    // echo "</pre>";


    $sql = "UPDATE movie SET judul=?, rilis=?, skor=?, sinopsis=?, serial=? WHERE idmovie=$idmovie";
    $hasil = $koneksi->prepare($sql);
    $hasil->bind_param("ssdsi", $judul, $rilis, $skor, $sinopsis, $serial);
    $hasil->execute();

    if ($hasil->error != true) {
        echo "Update Success : " . $hasil->affected_rows . "<br>";
        //$idmovie = $hasil->insert_id;
        //echo "Movie ID Baru : " . $idmovie;

        $sql = "DELETE FROM genre_movie WHERE idmovie=$idmovie";
        $hasil = $koneksi->prepare($sql);
        $hasil->execute();

        $sql = "INSERT INTO genre_movie VALUES (?,?)";
        $hasil = $koneksi->prepare($sql);
        $hasil->bind_param("ii", $idmovie, $idgenre);

        foreach ($genre as $idgenre) {
            $hasil->execute();
        }
 
    } else
        echo "Insert Failed : " . $koneksi->error;

    $koneksi->close();
    ?>
    <br>
    <a href="index.php">Back</a>
</body>

</html>