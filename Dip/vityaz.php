<?php
$localhost = "localhost";
$db = "vityaz";
$user = "admin";
$password = "admin";
$link = mysqli_connect($localhost,$user,$password) or trigger_error(mysql_error(),E_USER_ERROR);
mysqli_query($link,"SET NAMES UTF8;") or die(mysql_error());
mysqli_query($link,"SET CHARACTER SET UTF8;") or die(mysql_error());
?>
