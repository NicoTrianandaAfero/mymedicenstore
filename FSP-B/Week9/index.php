<!DOCTYPE html>
<html>

<head>
    <title>FSP - Database</title>
    <style type="text/css">
        table,
        td,
        th {
            border: 1px solid black;
        }
        ul {
            list-style-type: none;
        }
        li {
            display: inline-block;
            padding: 2px;
            margin: 2px;
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <?php
    $koneksi = new mysqli("localhost", "root", "", "fsp-b");

    if ($koneksi->connect_errno) {
        die("Failed to connect to MySQL: " . $koneksi->connect_error);
    }

    echo "<br>Ready to Process Database<br>";

    // if (isset($_GET['judul'])) {
    //     $judul = $_GET['judul'];
    //     $sql = "SELECT * FROM movie WHERE judul LIKE '%$judul%'";
    // } else
    //     $sql = "SELECT * FROM movie";
    // $hasil = $koneksi->query($sql);

    $judul = (isset($_GET['judul'])) ? $_GET['judul'] : '';
    $sql = "SELECT * FROM movie WHERE judul LIKE '%$judul%'";
    $hasil = $koneksi->query($sql);
    $jumdata = $hasil->num_rows;
    $perpage = (isset($_GET['datapage'])) ? $_GET['datapage'] : 2;

    //$baris = $hasil->fetch_assoc();
    //echo $baris["judul"]."<BR>";
    ?>
    <form method="get" action="">
        Keyword: <input type="text" name="judul" value="<?= $judul ?>" /> | 
        Data Page: 
        <select name="datapage">
            <option value="2" <?php if ($perpage==2) echo "selected"; ?> >2</option>
            <option value="3" <?php if ($perpage==3) echo "selected"; ?> >3</option>
            <option value="4" <?php if ($perpage==4) echo "selected"; ?> >4</option>
            <option value="5" <?php if ($perpage==5) echo "selected"; ?> >5</option>
        </select>
        <input type="submit" name="submit" value="Apply">
    </form>
    <br>
    <?php
        
        $jumpage = ceil($jumdata/$perpage);
        //echo "$perpage $jumdata $jumpage";
        echo "<ul>";
        
        for($i=1;$i<=$jumpage;$i++)
        {
            echo "<li><a class='page' href='?judul=$judul&datapage=$perpage&p=$i'>$i</a></li>";
        }

        echo "</ul>";
    ?>
    <br>
    <?php
    $p = (isset($_GET['p'])) ? $_GET['p'] : 1;
    $awal = ($p-1) * $perpage;

    $sql = "SELECT * FROM movie WHERE judul LIKE '%$judul%' LIMIT $awal,$perpage";
    $hasil = $koneksi->query($sql);

    echo "<table>";
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

    echo "</table>";

    $koneksi->close();
    ?>
    <br>
    <a href="insertform.php">Tambah Movie</a>

    <script src="jquery-3.5.1.min.js"></script>
    <script>

        $(".page").click(function(event) {
            event.preventDefault();

            alert("Test");
        });

    </script>

</body>

</html>