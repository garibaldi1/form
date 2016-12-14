<?php header("refresh:1; url=coach.php");?>
<?php
require_once ("vityaz.php");
$header = $_POST['header'];
$date = $_POST['date'];
$place = $_POST['place'];
$query = "INSERT INTO `vityaz`.`competition`(`id`,`competition`,`date`)VALUES (NULL,'$place','$date');";
$result = mysqli_query($link,$query);
echo 'Событие создано';
?>
