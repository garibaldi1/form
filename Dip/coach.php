<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Тренерская</title>
        <link rel="stylesheet" href="style2.css">
        <link rel="stylesheet" href="style3.css">
        <script language="javascript" src="script.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
        <script>
        $( function() {
        $( "#datepicker").datepicker({changeYear: true, changeMonth: true, dateFormat: "yy-mm-dd"});
        } );
        </script>
        <script>
        $( function() {
        $( "#datepicker2").datepicker({changeYear: true, changeMonth: true, dateFormat: "yy-mm-dd"});
        } );
        </script>
    </head>
    <body>
        <h3>Тренерская</h3>
        <hr>
        <p>Карточка спортсмена</p>
        <form>
            <input type="button" name ="add1" value="Добавить спортсмена" onclick="addsport();">
            <input type="button" name="add2" value="Создать мероприятие" onclick="addcompetition();">
        </form>
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
                    $coach = $row['coach'];
                    echo "<tr><td>$lastname</td><td>$name</td><td>$suname</td><td>$date</td><td>$tel</td><td>$height</td><td>$weight</td><td>$coach</td><td><a href = 'delete.php'>Удалить</a></td><td><a href='edit.php'>Редактировать</a></td></tr>";
                }
                ?>
            </tbody>
        </table>
        <br>
        <form method="post" id = "add" action = "add.php">
            <p>Регистрация</p>
            <input type="text" name="fio" placeholder="Введите фамилию" required><br>
            <input type="text" name="name" placeholder="Введите Имя" required><br>
            <input type="text" name="suname" placeholder="Введите Отчество" required><br>
            <input type="text" id="datepicker" name="date" placeholder="ДДММГГГГ" required><br>
            <input type="tel" name="tel" placeholder="81234567890" required><br>
            <input type ="number" name ="height" placeholder="Введите рост" required><br>
            <input type ="number" name="weight" placeholder="Введите вес" required><br>
            <input type ="submit" id="reg" name="reg" value="Зарегистрировать">
            <input type ="button" name ="cancle" value ="Отмена" style="margin-left: 28%;" onclick="cancle1();">
        </form>
        <form method="post" id="add2" action="add2.php">
            <p>Создать мероприятие</p>
            <input type="text" name="header" placeholder="Название мероприятия" style="margin-left: 5%;" required><br>
            <input type="text" id="datepicker2" name="date" style="margin-left: 5%;" placeholder="выберите дату" required><br>
            <textarea name="place" style="margin-left: -4%;" placeholder="место проведения" required></textarea>
            <input type ="submit" id="reg2" name="reg" value="Зарегистрировать" style="margin-left: 10%;">
            <input type ="button" name ="cancle" value ="Отмена" style="margin-left: 29%;" onclick="cancle2();">
        </form>
    </body>
</html>
