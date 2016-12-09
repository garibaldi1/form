<?php
require_once ('vityaz.php');
$login = $_POST['login'];
$password = $_POST['pass'];
if (($login)&&($password)){
    $query = "SELECT * FROM `vityaz`.`dost` WHERE login = '$login' AND pass = '$password'";
    $send_query = mysqli_query($link, $query);
    $user_array = mysqli_fetch_array($send_query);
    $login = $user_array['login'];
    $dost = $user_array['dost'];
    $count = mysqli_num_rows($send_query);
    if ($count > 0){
        session_start();
        $_SESSION['login'] = $login;
        $_SESSION['dost'] = $dost;
        header("refresh:1;url=registration.php");
        echo "Произодейт переход на старницу регистрации";
    }
    else {
        echo "Нет логина";
        
    }
}
?>
