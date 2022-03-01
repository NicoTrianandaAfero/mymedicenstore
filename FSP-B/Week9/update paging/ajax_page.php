<?php
    $koneksi = new mysqli("localhost","root","","fsp-b");

    $p = $_POST['p'];
    $perpage = $_POST['perpage'];
    $judul = $_POST['judul'];

    $awal = ($p-1) * $perpage;

    $sql = "SELECT * FROM movie WHERE judul LIKE '%$judul%' LIMIT $awal,$perpage";
    $hasil = $koneksi->query($sql);

    echo "<tr><th>Gambar</th><th>Judul</th><th>Tgl Rilis</th><th>Serial</th><th>Genre</th><th>Aksi</th></tr>";

    while ($baris = $hasil->fetch_assoc()) {
        echo "<tr>";

        $idmovie = $baris['idmovie'];
        // $gambar = "gambar/" . $baris["idmovie"] . "." . $baris['extention'];
        $sql = 'SELECT * FROM gambar WHERE idmovie = ?';
        $stmt = $koneksi->prepare($sql);
        $stmt->bind_param("i", $idmovie);
        $stmt->execute();
        $result = $stmt->get_result();
        echo "<td>";
        while ($row = $result->fetch_assoc()) {
            $idgambar = $row['idgambar']; //10
            $ext = $row['extention']; //.jpg
            $fullname = $idgambar . "." . $ext;
            echo "<img src='gambar/$fullname'>";
        }
        echo "</td>";

        echo "<td>" . $baris["judul"] . "</td>";
        echo "<td>" . date("d F Y", strtotime($baris["rilis"])) . "</td>";
        echo "<td>";
        // if ($baris["serial"] == 0)
        //     echo "Tidak";
        // else
        //     echo "Ya";
        echo ($baris['serial'] == 0) ? 'TIDAK' : 'SERIAL';
        echo "</td>";

        $sql2 = "SELECT G.nama FROM genre_movie as GM INNER JOIN genre as G ON GM.idgenre=G.idgenre WHERE GM.idmovie=" . $baris['idmovie'];
        $hasil2 = $koneksi->query($sql2);
        echo "<td>";
        while ($baris2 = $hasil2->fetch_assoc()) {
            echo "|" . $baris2["nama"] . "|";
        }
        echo "</td>";
        echo "<td>";
        echo "<a href='editform.php?id=$idmovie'>Edit</a> ";
        echo "<a href='deleteform.php?id=$idmovie'>Delete</a> ";
        echo "</td>";
        echo "</tr>";
    }

    $koneksi->close();
?>