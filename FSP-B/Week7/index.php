<?php

$str = "A 'quote' is <b>bold</b>";

// Outputs: A 'quote' is &lt;b&gt;bold&lt;/b&gt;
echo htmlentities($str)."<br>";
echo addslashes($str)."<br>";
echo strip_tags($str)."<br>";


$mypass = "123456";
$salt = "randomtext";

$md5pass = md5($mypass);
$finalpass = md5($salt.$md5pass);
$finalpass2 = md5($finalpass.$salt);

echo $finalpass2."<br>";

?>