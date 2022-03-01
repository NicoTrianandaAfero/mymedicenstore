<?php 
    session_start();
    $valid = true;

    if(isset($_POST['btnsubmit'])) {
        unset($_SESSION['data']);
        unset($_SESSION['error']);
        $nama = $_POST['nama'];
        $nrp = $_POST['nrp'];
        $gender = $_POST['gender'];
        $divisi1 = $_POST['divisi1'];
        $divisi2 = $_POST['divisi2'];

        if(!empty($nama)) {
            $_SESSION['data']['nama'] = $nama;
        } else {
            $_SESSION['error']['nama'] = "Nama tidak boleh kosong";
            $valid = true;
        }

        if(!empty($gender)) {
            $_SESSION['data']['gender'] = $gender;
        } else {
            $_SESSION['error']['gender'] = "Gender tidak boleh kosong";
            $valid = false;
        }

        if(substr($nrp, 2, 2) == "04" || substr($nrp, 2, 2) == "07" || substr($nrp, 2, 2) == "08") 
        {
            $_SESSION['data']['nrp'] = $nrp;
        }
        else 
        {
            $_SESSION['error']['nrp'] = "Khusus jurusan Informatika, SI, dan Multimedia";
            $valid = false;
        }

        if($divisi1 == $divisi2){
            $_SESSION['error']['divisi'] = "Pilih 2 divisi yang berbeda";
            $valid = false;
        } else {
            $_SESSION['data']['divisi1'] = $divisi1;
            $_SESSION['data']['divisi2'] = $divisi2;
        }

        if($valid) {
            echo "<h2>Pendaftaran Berhasil</h2>";
            echo "<p>Halo $nama, terima kasih sudah mendaftar panitia ILPC. Berikut ini data pendaftaran yang telah kami terima:</p>";
            echo "<p>Nama: $nama</p></p>";
            echo "<p>NRP: $nrp</p>";
            echo "<p>Divisi 1: $divisi1</p>";
            echo "<p>Divisi 2: $divisi2</p>";
            echo "<p>Silakan menunggu pengumuman berikutnya untuk jadwal wawancara. Semangat, semoga sukses!</p>";
            unset($_SESSION['data']);
            unset($_SESSION['error']);
        } else {
            header("location: 160819024_sender.php");
        }  
    }
 ?>