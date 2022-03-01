<?php

if(isset($_POST['btnlogin'])) {
  $user = $_POST['txtusername'];
  $pwd = $_POST['txtpassword'];


  if (isset($_POST['chkremember'])) {
  	setcookie("userku", $user, time() + 120);
  }else {
  	setcookie("userku", "", time()-1);
  }
  header("location: home.php");
}	

?>