<!DOCTYPE html>
<html>
    <head>
        <title>КРБ "Витязь" - панель администратора</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style2.css">
    </head>
    <body>
        <h3>Панель администратора</h3>
        <hr>
        <p>Добавление сотрудника</p>
        <form method="post">
            <input type="text" name="lastname" placeholder="Введите фамилию" required><br>
            <input type="text" name="name" placeholder="Введите имя" required><br>
            <input type="text" name="su_name" placeholder="Введите отчество" required><br>
            <input type="tel" name="tel" placeholder="80000000000" required><br>
            <input type="text" name="dost" required><br>
            <input type="text" name="login" placeholder="Логин" required><br>
            <input type="text" name="pass" placeholder="Пароль" required><br>
            <input type="submit" name="submit" value="Зарегистрировать"><br>
        </form>
        <hr>
    </body>
</html>
<?php
require_once ('vityaz.php');
$lastname = $_POST['lastname'];
$name = $_POST['name'];
$suname = $_POST['su_name'];
$tel = $_POST['tel'];
$dost = $_POST['dost'];
$login = $_POST['login'];
$password = $_POST['pass'];
$query = "INSERT INTO `vityaz`.`dost` (`id`, `last_name`, `name`, `suname`, `login`, `pass`, `dost`, `tel`) VALUES (NULL, '$lastname', '$name', '$suname', '$login', '$password', '$dost', '$tel');";
if(($lastname)&&($name)&&($suname)&&($tel)&&($dost)&&($login)&&($password)){
    $result = mysqli_query($link,$query);
    echo 'Запись создана';
    header("refresh:1;url=admin.php");
}else {
    echo 'Что то не так';
}
?>
