<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Личный кабинет спортсмена</title>
        <link rel="stylesheet" href="style2.css">
    </head>
    <body>
        <h3>Личный кабинет</h3>
        <hr>
        <p>Ближайшее мероприятия</p>
         <table border = "2px">
            <thead>
                <tr>
                    <th>Название мероприятия</th>
                    <th>Место проведения</th>
                    <th>Дата проведения</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require_once ('vityaz.php');
                $query = "SELECT*FROM `vityaz`.`competition` ORDER BY `date`;";
                $result = mysqli_query($link,$query);
                while($row = mysqli_fetch_array($result)){
                    $id = $row['id'];
                    $competition = $row['competition'];
                    $place = $row['place'];
                    $date = $row['date'];
                    echo "<tr><td>$competition</td><td>$place</td><td>$date</td><td><a href = ''>Записаться</a></td></tr>";
                }
                ?>
            </tbody>
        </table>
    </body>
</html>
