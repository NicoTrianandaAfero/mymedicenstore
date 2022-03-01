<?php 
function folder_exist($folder) {
    // Get canonicalized absolute pathname
    $path = realpath($folder);

    // If it exist, check if it's a directory
    if($path !== false AND is_dir($path)) {
        // Return canonicalized absolute pathname
        return $path;
    }

    // Path/folder does not exist
    return false;
}

 ?>
<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Panitia ILPC</title>
</head>
<body>
<!-- DILARANG MENGUBAH HTML -->
<h1>Pendaftaran Panitia ILPC</h1>
<form method="post" enctype="multipart/form-data">
    <p><label for="txtnama">Nama: </label>
        <input type="text" name="nama" id="txtnama" required>
    </p>
    <p><label for="txtnrp">NRP: </label>
        <input type="text" name="nrp" required>
    </p>
    <p>Jenis Kelamin: 
        <input type="radio" name="gender" id="lakilaki" value="Laki-laki"><label for="lakilaki">Laki-laki</label>
        <input type="radio" name="gender" id="perempuan" value="Perempuan" checked><label for="perempuan">Perempuan</label>
    </p>    
    <p><label for="divisi1">Divisi 1 yang diminati: </label>
        <select name="divisi1" id="divisi1">
            <option value="Acara">Acara</option>
            <option value="Pubreg">Pubreg</option>
            <option value="DDD">DDD</option>
            <option value="Soal">Soal</option>
            <option value="Keamanan">Keamanan</option>
            <option value="Sponsor">Sponsor</option>
            <option value="Perkap">Perkap</option>
            <option value="Konkes">Konkes</option>
        </select>
    </p>
    <p><label for="divisi2">Divisi 2 yang diminati: </label>
        <select name="divisi2" id="divisi2">
            <option value="Acara">Acara</option>
            <option value="Pubreg">Pubreg</option>
            <option value="DDD">DDD</option>
            <option value="Soal">Soal</option>
            <option value="Keamanan">Keamanan</option>
            <option value="Sponsor">Sponsor</option>
            <option value="Perkap">Perkap</option>
            <option value="Konkes">Konkes</option>
        </select>
    </p>
    <p><label>Upload Foto KTM (maks. 1 MB) :</label>
        <input type="file" name="gambar" accept=".jpg">
    </p>
    <p><input type="submit" name="btnsubmit" value="Submit"></p>
</form>

<?php 
if(isset($_POST['btnsubmit'])) {
    if($_FILES['gambar']['name']) {        
        if($_FILES['gambar']['size'] <= 1024000) {
            if($_FILES['gambar']['type'] == 'image/jpg' or $_FILES['gambar']['type'] == 'image/jpeg') {
                $path = "gambar";
                if(!folder_exist($path)) {
                    mkdir($path, 0777);
                }
                $nama = $_POST['nama'];
                $nrp = $_POST['nrp'];
                $gender = $_POST['gender'];
                $divisi1 = $_POST['divisi1'];
                $divisi2 = $_POST['divisi2'];
                $filename = $_FILES["gambar"]['name'].".jpg";
                $destination = $path."/".$filename;
                move_uploaded_file($_FILES['gambar']['tmp_name'], $destination);
                echo "<h2>Pendaftaran Berhasil</h2>";
                echo "<p>Halo ".$nama.", terima kasih sudah mendaftar panitia ILPC. Berikut ini data pendaftaran yang telah kami terima:</p>";
                echo "<p>Nama: $nama";
                echo "<p>NRP: $nrp";
                echo "<p>Divisi 1: $divisi1";
                echo "<p>Divisi 2: $divisi2";
                echo "<p>Foto: </p><img src='".$destination."' width='200px'>";
                echo "<p>Silakan menunggu pengumuman berikutnya untuk jadwal wawancara. Semangat, semoga sukses!</p>";
            } else {
                echo "<h3>Tipe file tidak sesuai</h3>";
            }
        } else {
            echo "<h3>Ukuran file terlalu besar</h3>";
        }
    } else {
        echo "<h3>Anda belum memilih foto</h3>";
    }
}
 ?>
</body>
</html>