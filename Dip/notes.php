<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Мои заметки</title>
        <link rel="stylesheet" href="style2.css">
        <link rel="stylesheet" href="style3.css">
        <script language="javascript" src="script.js"></script>
    </head>
    <body>
        <h3>Мои заметки</h3>
        <hr>
        <ul>
            <li><a href = "lkspot.php">Назад</a></li>
                    <li><form method="post">
                            <input type="button" name="newnote" onclick="addnotes();" value = "Новая заметка">
                        </form>
                    </li>
        </ul>
        <form method="post" id = "add3" action="add3.php" autocomplete="off">
            <input type = "text" name="header" placeholder="Введите заголовок заметки" style = "width: 200px;" required><br>
            <input type ="hidden" name ="created" value="<?php echo date("Y-m-d");?>">
            <textarea name = "article" cols="120" rows="20" required></textarea><br>
            <input type="submit" name = "submit" value = "Сохранить">
            <input type ="button" name ="cancle" onclick="cancel3();" value = "Выход">
        </form>
        <hr>
        <h3>Заметки</h3>
        <?php
        require_once ('vityaz.php');
        $query = "SELECT * FROM `vityaz`.`notes`";
        $select_note = mysqli_query($link,$query);
        while ($note = mysqli_fetch_array($select_note)){
            echo $note['id'], "<br>";
            echo $note['created'],"<br>";
            echo $note['title'],"<br>";
            echo $note['article'],"<br>";
        }
        ?>
    </body>
</html>
