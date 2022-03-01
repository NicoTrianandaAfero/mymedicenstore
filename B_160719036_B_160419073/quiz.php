<?php 
session_start();
$p = (isset($_GET['p'])) ? $_GET['p'] : 1;
?>


<!DOCTYPE html>
<html>
<head>
    <script src="jquery-3.5.1.min.js"></script>
    <meta charset="utf-8">
    <title>BoBoiBoy Fun Quiz</title>
  </head>
<body>
    <h1>BoBoiBoy Fun Quiz</h1>
    <?php
        $soalKey = "soal".($p-1);
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if(isset($_POST['jawaban'])) {
                $_SESSION[$soalKey] = $_POST['jawaban'];
            }
        }
    ?>
    <form action="" method="post">
        <?php
        // Ini buat koneksi ke mysql. {OOP,Mysql-php}
        $koneksi = new mysqli("localhost", "root", "", "fsp_uts");


        // Ini ngecek koenneksi error atau gak. {Mysql-php}
        if ($koneksi->connect_errno) {
            die("Failed to connect to M ySQL: " . $koneksi->connect_error);
        }

        $pertanyaan = (isset($_GET['pertanyaan'])) ? $_GET['pertanyaan'] : '';
        //mencari tabel pertanyaan yang lebih spesifik
        // ini query. {Query Mysql}
        $sql = "SELECT * FROM soal WHERE pertanyaan LIKE '%$pertanyaan%'";
        $hasil = $koneksi->query($sql);
        // belajar koneksi mysql di php
        $jumlahdata = $hasil->num_rows;
        $perpage =(isset($_GET['datapage'])) ? $_GET['datapage'] : 1;

      
        //ceil ini membulatkan ke atas
        $jumlahpage = ceil($jumlahdata/$perpage);
        //echo "$perpage $jumlahdata $jumlahpage";

        
        $prev = $p - 1;
        $next = $p + 1;

        
    
        $awal= ($p-1) *$perpage; //offset
        $sql = "SELECT * FROM soal WHERE pertanyaan LIKE '%$pertanyaan%' LIMIT $awal,$perpage";
        $hasil = $koneksi->query($sql);

        // ini manggil hasil datanya satu per satu
        while ($baris = $hasil->fetch_assoc()) {

            $idsoal = $baris['idsoal'];
            $_SESSION["soal"] = $idsoal;
            $sql = 'SELECT * FROM jawaban WHERE idsoal = ?';
            $stmt = $koneksi->prepare($sql);
            $stmt->bind_param("i", $idsoal);
            $stmt->execute();
            $result = $stmt->get_result();

            echo $baris['idsoal']. "." . $baris["pertanyaan"] . "<br>";

            while ($hasil2 = $result->fetch_assoc()) {
                $checked = (isset($_SESSION["soal".$p]) && $_SESSION["soal".$p] == $hasil2['idjawaban']) ? "checked" : "";
               echo "<input type='radio' $checked name='jawaban' value='".$hasil2['idjawaban']."' >";
               echo "<label>".$hasil2['isi_jawaban']."</label> <br>";
            }
        }
       

        if ($p > 1) {
            // code...
            echo "<input type='submit' formaction='?pertanyaan=$pertanyaan&datapage=$perpage&p=$prev' name='actionPrev' value='Previous'/>";
        }

        if($p < $jumlahpage){
            // code...
            echo "<input type='submit' formaction='?pertanyaan=$pertanyaan&datapage=$perpage&p=$next' name='actionNext' value='Next'>";
        }

        if($p == $jumlahdata){
            echo "<input type='submit' formaction='kesimpulan.php' name='actionDone' value='Submit'>";
        }

        $koneksi->close();
        ?>
    <br>
</form>
</body>
</html>