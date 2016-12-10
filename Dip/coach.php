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
                $query = "SELECT * FROM `sportsman`"
                ?>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
        <br>
        <form>
            <input type="button" name ="add1" value="Добавить спортсмена" onclick="addsport();">
        </form>
        <form method="post" id = "add">
            <input type="text" name="fio" placeholder="Введите фамилию" required><br>
            <input type="text" name="name" placeholder="Введите Имя" required><br>
            <input type="text" name="suname" placeholder="Введите Отчество" required><br>
            <input type="date" name="date" required><br>
            <input type="tel" name="tel" placeholder="81234567890" required><br>
            <input type ="number" name ="height" placeholder="Введите рост" required><br>
            <input type ="number" name="weight" placeholder="Введите вес" required><br>
            <input type="submit" name="reg" value="Зарегистрировать">
            <input type ="button" name ="cancle" value ="Отмена" style="margin-left: 25%;" onclick="cancle();">
        </form>
    </body>
</html>
