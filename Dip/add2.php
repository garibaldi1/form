<?php header("refresh:1; url=coach.php");?>
<?php
require_once ("vityaz.php");
$header = $_POST['header'];
$date = $_POST['date'];
$place = $_POST['place'];
$query = "INSERT INTO `vityaz`.`competition` (`id`, `competition`, `date`, `place`) VALUES (NULL, '$header', '$date', '$place');";
$query2 = "CREATE TABLE `vityaz`.`table` (id SMALLINT NOT NULL AUTO_INCREMENT, PRIMARY KEY (id), last_name INT, name INT, weigth INT, height INT);";
$result = mysqli_query($link,$query);
$result2 = mysqli_query($link,$query2);
echo 'Событие создано';
?>
