<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Тренерская</title>
        <link rel="stylesheet" href="style2.css">
        <link rel="stylesheet" href="style3.css">
        <script text="javascript" src="script.js"></script>
    </head>
    <body>
        <h3>Тренерская</h3>
        <hr>
        <p>Карточка спортсмена</p>
        <table border="2px">
            <thead>
                <tr>
                    <th>Фамилия</th>
                    <th>Имя</th>
                    <th>Отчество</th>
                    <th>Год рождения</th>
                    <th>Телефон</th>
                    <th>Рост</th>
                    <th>Вес</th>
                    <th>Тренер</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require_once ('vityaz.php');
                $query = "SELECT*FROM `vityaz`.`sportsman` ORDER BY `last_name`;";
                $result = mysqli_query($link,$query);
                while($row=mysqli_fetch_array($result)){
                    $id = $row['id'];
                    $lastname = $row['last_name'];
                    $name = $row['name'];
                    $suname = $row['suname'];
                    $date = $row['date_bith'];
                    $tel = $row['tel'];
                    $height = $row['height'];
                    $weight = $row['weight'];
                    echo "<tr><td>$lastname</td><td>$name</td><td>$suname</td><td>$date</td><td>$tel</td><td>$height</td><td>$weight</td></tr>";
                }
                ?>
            </tbody>
        </table>
        <br>
        <form>
            <input type="button" name ="add1" value="Добавить спортсмена" onclick="addsport();">
        </form>
        <form method="post" id = "add" action = "add.php">
            <p>Регистрация</p>
            <input type="text" name="fio" placeholder="Введите фамилию" required><br>
            <input type="text" name="name" placeholder="Введите Имя" required><br>
            <input type="text" name="suname" placeholder="Введите Отчество" required><br>
            <input type="date" name="date" placeholder="ДДММГГГГ" required><br>
            <input type="tel" name="tel" placeholder="81234567890" required><br>
            <input type ="number" name ="height" placeholder="Введите рост" required><br>
            <input type ="number" name="weight" placeholder="Введите вес" required><br>
            <input type ="submit" id="reg" name="reg" value="Зарегистрировать">
            <input type ="button" name ="cancle" value ="Отмена" style="margin-left: 28%;" onclick="cancle1();">
        </form>
    </body>
</html>
