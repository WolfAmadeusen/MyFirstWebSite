<?php

session_start();

$connect = mysqli_connect('localhost', 'root', 'root', 'mywebsite');
$query   = "SELECT * FROM `bd_users`";
$result  = mysqli_query($connect, $query);

$_SESSION["info"]= "";
$_SESSION["message"]= "";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form action="Sing__up-right.php" method="post" enctype='multipart/form-data'>
        <h2>Логин</h2>
        <input class="input" type="text" name="login"><br>
        <h2>ФИО</h2>
        <input class="input" type="text" name="FIO"><br>
        <h2>Возраст</h2>
        <input class="input" min='0' name="age" type="number"><br>
        <h2>Пол</h2>
        <select name="sex">
            <option value="Мужчина">Мужчина</option>
            <option value="Женчина">Женчина</option>
            <option value="Другое">другое</option>
        </select>
        <h2>Про себя</h2>
        <textarea name="text"cols="50" rows="6"></textarea>
        <h2>Фото</h2>
        <input class="input" type="file" name="file"><br>
        <h2>Пароль</h2>
        <input class="input" name="password" type="password"><br>
        <h2>Повторный пароль</h2><br>
        <input class="input" name="password_confirm" type="password">
        <input class="button" type="submit" value="Зарегистрироваться">
        <?php
        if ($_SESSION['message']) {
            echo '<p>' . $_SESSION['message'] . '</p>';
        }
        unset($_SESSION['message']);
        if ($_SESSION["info"] == true) {
            header("Location: ../Sing_in/Sing__in.php");
        }else {
            $_SESSION["info"] = false;
        }
        ?>
    </form>
</body>
</html>