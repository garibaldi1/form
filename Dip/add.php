<?php header("refresh:1;url=coach.php");?>
<?php
require_once ('vityaz.php');
$famil = $_POST['fio'];
$name = $_POST['name'];
$suname = $_POST['suname'];
$date = $_POST['date'];
$tel = $_POST['tel'];
$height = $_POST['height'];
$weight = $_POST['weight'];
$query = "INSERT INTO `vityaz`.`sportsman` (`id`, `last_name`, `name`, `suname`, `date_bith`, `tel`, `height`, `weight`) VALUES (NULL, '$famil', '$name', '$suname', '$date', '$tel', '$height', '$weight');";
$result = mysqli_query($link, $query);
echo 'Пользователь зарегистрирован';
?>
