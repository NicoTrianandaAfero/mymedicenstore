<!DOCTYPE html>
<html>

<head>
    <title>FSP - Database</title>
    <style type="text/css">
        .form-group {
            clear: both;
            padding: 2px;
        }

        .form-label {
            display: block;
            float: left;
            width: 20%;
        }

        div#file_upload {
            float: left;
        }

        div#file_upload input {
            display: block;
            margin-bottom: 5px;
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

    $idmovie = (isset($_GET['id'])) ? $_GET['id'] : '';
    $sql = "SELECT * FROM movie WHERE idmovie=$idmovie";
    $hasil = $koneksi->query($sql);

    if ($baris = $hasil->fetch_assoc()) 
    {
?>

    <form method="POST" enctype="multipart/form-data" action="editproses.php">
        <div class="form-group">
            <label class="form-label">Judul</label>
            <input type="text" name="judul" value="<?=$baris['judul']?>">
        </div>
        <div class="form-group">
            <label class="form-label">Rilis</label>
            <input type="date" name="rilis" value="<?=$baris['rilis']?>">
        </div>
        <div class="form-group">
            <label class="form-label">Skor</label>
            <input type="text" name="skor" value="<?=$baris['skor']?>">
        </div>
        <div class="form-group">
            <label class="form-label">Sinopsis</label>
            <input type="text" name="sinopsis" value="<?=$baris['sinopsis']?>">
        </div>
        <div class="form-group">
            <label class="form-label">Serial</label>
            <?php 
                if ($baris['serial'] == 0)
                {
                    $T = "";
                    $F = "checked";
                }
                else
                {
                    $T = "checked";
                    $F = "";
                }
            ?>
            <input type="radio" name="serial" value="1" <?=$T?> >Ya
            <input type="radio" name="serial" value="0" <?=$F?> >Tidak
        </div>
        <!-- combobox genre -->
        <div class="form-group">
            <label class="form-label">Genre</label>
            <?php

            $sql2 = "SELECT * FROM genre AS G LEFT JOIN (SELECT idgenre AS pilih FROM genre_movie WHERE idmovie=$idmovie) AS GM ON G.idgenre=GM.pilih";
            $hasil2 = $koneksi->query($sql2);

            while ($baris2 = $hasil2->fetch_assoc()) {
                $id = $baris2['idgenre'];
                $nama = $baris2['nama'];
                $pilih = (is_null($baris2['pilih'])) ? "" : "checked";
                echo "<input type='checkbox' name='genre[]' value='$id' $pilih>$nama";
            }
            ?>

        </div>
        <!-- end combobox -->
        <div class="form-group">
            <label class="form-label">Gambar</label>
            <div id=file_upload>
                <input type="file" name="gambar[]">
            </div>
        </div>
        <div class="form-group">
            <button type="button" id="tambahgambar">Tambah Gambar</button>
        </div>
        <div class="form-group">
            <input type="hidden" name="idmovie" value= "<?=$idmovie?>">
            <input type="submit" name="submit" value="Edit Movie">
        </div>
    </form>
<?php } ?>

    <script src="jquery-3.5.1.min.js"></script>
    <script>
        $('#tambahgambar').click(function() {
            $('#file_upload').append('<input type="file" name="gambar[]">');
        })
    </script>
<?php
    $koneksi->close();
?>
</body>

</html>