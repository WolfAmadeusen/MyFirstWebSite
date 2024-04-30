<?php

session_start();

$connect = mysqli_connect('localhost', 'root', '', 'myFirstWebsite');
$query   = "SELECT * FROM `bd_users`";
$result  = mysqli_query($connect, $query);

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
        <input required class="input" type="text" name="login"><br>
        <h2>ФИО</h2>
        <input required class="input" type="text" name="FIO"><br>
        <h2>Возраст</h2>
        <input required class="input" min='0' name="age" type="number">
        <h2>Пол</h2>
        <select name="sex">
            <option value="Мужчина">Мужчина</option>
            <option selected value="Женчина">Женчина</option>
            <option value="Другое">другое</option>
        </select>
        <h2>Про себя</h2>
        <textarea name="text" cols="50" rows="6"></textarea>
        <h2>Фото</h2>
        <input required class="input" type="file" name="file"><br>
        <h2>Пароль</h2>
        <input required class="input" name="password" type="password"><br>
        <h2>Повторный пароль</h2><br>
        <input required class="input" name="password_confirm" type="password"><br>
        <input required class="button" type="submit" value="Зарегистрироваться">
        <p><?php
            if ($_SESSION['message']) {
                echo $_SESSION['message'];
                unset($_SESSION['message']);
                echo"<meta http-equiv='refresh' content='3'>";
                exit;
            }
            ?>
        </p>
    </form>
</body>
</html>