<?php
require_once('parent.php');

class User extends ParentClass
{
    public function __construct($server, $user, $pass, $db)
    {
        parent::__construct($server, $user, $pass, $db);
    }

    public function GenerateSalt()
    {
        return substr(session_id(), 0, 5); //Generate 5 String random 
    }

    public function GetSaltedPassword($password, $salt)
    {
        $saltedPassword = md5(md5($password) . $salt);
        return $saltedPassword;
    }

    public function Register($iduser, $fullname, $password)
    {
        $salt = $this->GenerateSalt();
        $saltedPassword = $this->GetSaltedPassword($password, $salt);

        $sql = 'INSERT INTO users (iduser,nama,password,salt) VALUES (?,?,?,?)';
        $stmt = $this->mysqli->prepare($sql);
        $stmt->bind_param("ssss", $iduser, $fullname, $saltedPassword, $salt);
        $stmt->execute();

        return $stmt->affected_rows; //jumlah baris yang terpengaruh
    }

    public function GetSalt($iduser)
    {
        $sql = "select salt from users where iduser = ?";
        $stmt = $this->mysqli->prepare($sql);
        $stmt->bind_param("s", $iduser);
        $stmt->execute();
        $res = $stmt->get_result();
        $row = $res->fetch_assoc();
        $salt = "";
        if ($row != false) {
            $salt = $row['salt'];
        }
        return $salt;
    }

    public function DoLogin($iduser, $password)
    {
        $salt = $this->GetSalt($iduser);
        $saltedPwd = $this->GetSaltedPassword($password, $salt);

        $sql = "SELECT * FROM users WHERE iduser = ? AND password = ?";
        $stmt = $this->mysqli->prepare($sql);
        $stmt->bind_param("ss", $iduser, $saltedPwd);
        $stmt->execute();
        $res = $stmt->get_result();
        $row = $res->fetch_assoc();
        if ($row != false) {
            $_SESSION['username'] = $iduser;
            $_SESSION['nama'] = $row['nama'];
            return 1;
        } else {
            return "salah";
        }
    }
}
