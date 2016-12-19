<?php header("refresh:1; url=notes.php");?>
<?php
require_once ("vityaz.php");
$header = $_POST['header'];
$date = $_POST['created'];
$article = $_POST['article'];
$query = "INSERT INTO `vityaz`.`notes` (`id`, `created`, `title`, `article`) VALUES (NULL, '$date', '$header', '$article');";
$result = mysqli_query($link,$query);
echo 'Запись создана';
echo $date;
?>
