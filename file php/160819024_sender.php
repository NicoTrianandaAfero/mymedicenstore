<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Panitia ILPC</title>
    <style type="text/css">
        .form-group {
            padding: 5px;
        }
        .form-label {
            display: inline-block;
            float: left;
            text-align: right;
            width: 18%;
            padding: 2px;
        }
        .form-field {
            float: left;
            width: 78%;
            padding: 2px;       
        }
        .form-button {
            float: left;
            width: 78%;
            padding: 2px;
            padding-left: 6px;
            margin-left: 18%;
        }
        .form-warning {
            float: left;
            width: 78%;
            padding: 2px;
            padding-left: 6px;
            margin-left: 18%;
            color: red;
        }
    </style>
</head>
<body>
<h1 style="margin-left: 100px;">Pendaftaran Panitia ILPC</h1>
<form method="post" action="160819024_catcher.php">
    <div class="form-group">
        <label for="txtnama" class="form-label">Nama: </label>
        <div class="form-field"><input type="text" name="nama" id="txtnama" value="<?php if(isset($_SESSION['data']['nama'])) echo $_SESSION['data']['nama'] ?>"></div>
        <div class='form-warning'><?php if(isset($_SESSION['error']['nama'])) echo "*".$_SESSION['error']['nama']?></div>
    </div>

    <div class="form-group">
        <label for="txtnrp" class="form-label">NRP: </label>
        <div class="form-field"><input type="text" name="nrp" value="<?php if(isset($_SESSION['data']['nrp'])) echo $_SESSION['data']['nrp'] ?>"></div>
        <div class='form-warning'><?php if(isset($_SESSION['error']['nrp'])) echo "*".$_SESSION['error']['nrp']?></div>
    </div>

    <div class="form-group">
        <div class="form-label">Jenis Kelamin: </div>
        <div class="form-field"><input type="radio" name="gender" id="lakilaki" value="Laki-laki" <?php if (isset($_SESSION['data']['gender']) && $_SESSION['data']['gender'] == "Laki-laki") echo "checked"; else echo ""; ?>><label for="lakilaki">Laki-laki</label>
        <input type="radio" name="gender" id="perempuan" value="Perempuan" <?php if (isset($_SESSION['data']['gender']) && $_SESSION['data']['gender'] == "Perempuan") echo "checked"; else echo ""; ?>><label for="perempuan">Perempuan</label></div>
        <div class='form-warning'><?php if(isset($_SESSION['error']['gender'])) echo "*".$_SESSION['error']['gender']?></div>
    </div> 

    <div class="form-group">
        <label for="divisi1" class="form-label">Divisi 1 yang diminati: </label>
        <div class="form-field"><select name="divisi1" id="divisi1">
            <option value="Acara" <?php if (isset($_SESSION['data']['divisi1']) && $_SESSION['data']['divisi1'] == "Acara") echo "selected"; else echo ""; ?>>Acara</option>
            <option value="Pubreg" <?php if (isset($_SESSION['data']['divisi1']) && $_SESSION['data']['divisi1'] == "Pubreg") echo "selected"; else echo ""; ?>>Pubreg</option>
            <option value="DDD" <?php if (isset($_SESSION['data']['divisi1']) && $_SESSION['data']['divisi1'] == "DDD") echo "selected"; else echo ""; ?>>DDD</option>
            <option value="Soal" <?php if (isset($_SESSION['data']['divisi1']) && $_SESSION['data']['divisi1'] == "Soal") echo "selected"; else echo ""; ?>>Soal</option>
            <option value="Keamanan" <?php if (isset($_SESSION['data']['divisi1']) && $_SESSION['data']['divisi1'] == "Keamanan") echo "selected"; else echo ""; ?>>Keamanan</option>
            <option value="Sponsor" <?php if (isset($_SESSION['data']['divisi1']) && $_SESSION['data']['divisi1'] == "Sponsor") echo "selected"; else echo ""; ?>>Sponsor</option>
            <option value="Perkap" <?php if (isset($_SESSION['data']['divisi1']) && $_SESSION['data']['divisi1'] == "Perkap") echo "selected"; else echo ""; ?>>Perkap</option>
            <option value="Konkes" <?php if (isset($_SESSION['data']['divisi1']) && $_SESSION['data']['divisi1'] == "Konkes") echo "selected"; else echo ""; ?>>Konkes</option>
        </select></div>
    </div>

    <div class="form-group">
        <label for="divisi2" class="form-label">Divisi 2 yang diminati: </label>
        <div class="form-field"><select name="divisi2" id="divisi2">
            <option value="Acara" <?php if (isset($_SESSION['data']['divisi2']) && $_SESSION['data']['divisi2'] == "Acara") echo "selected"; else echo ""; ?>>Acara</option>
            <option value="Pubreg" <?php if (isset($_SESSION['data']['divisi2']) && $_SESSION['data']['divisi2'] == "Pubreg") echo "selected"; else echo ""; ?>>Pubreg</option>
            <option value="DDD" <?php if (isset($_SESSION['data']['divisi2']) && $_SESSION['data']['divisi2'] == "DDD") echo "selected"; else echo ""; ?>>DDD</option>
            <option value="Soal" <?php if (isset($_SESSION['data']['divisi2']) && $_SESSION['data']['divisi2'] == "Soal") echo "selected"; else echo ""; ?>>Soal</option>
            <option value="Keamanan" <?php if (isset($_SESSION['data']['divisi2']) && $_SESSION['data']['divisi2'] == "Keamanan") echo "selected"; else echo ""; ?>>Keamanan</option>
            <option value="Sponsor" <?php if (isset($_SESSION['data']['divisi2']) && $_SESSION['data']['divisi2'] == "Sponsor") echo "selected"; else echo ""; ?>>Sponsor</option>
            <option value="Perkap" <?php if (isset($_SESSION['data']['divisi2']) && $_SESSION['data']['divisi2'] == "Perkap") echo "selected"; else echo ""; ?>>Perkap</option>
            <option value="Konkes" <?php if (isset($_SESSION['data']['divisi2']) && $_SESSION['data']['divisi2'] == "Konkes") echo "selected"; else echo ""; ?>>Konkes</option>
        </select></div>
        <div class='form-warning'><?php if(isset($_SESSION['error']['divisi'])) echo "*".$_SESSION['error']['divisi']?></div>
    </div>
    <div class="form-group">
        <div class="form-button"><input type="submit" name="btnsubmit" value="Daftar"></div>
    </div>
</form>
</body>
</html>