<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Вход</title>
</head>

<body>
    <form action="handling.php" method="post">
        <h1>Вход</h1>
        <h2>Логин</h2>
        <input type="text" name="login">
        <h2>Пароль</h2>
        <input type="password" name="password">
        <p>У вас нету аккаунта? - <a href="../Sing_up/Sing__up.php">Зарегестрируйтесь</a></p>
        <input class="i" type="submit" value="Вход">
        <p>
            <?php
                if ($_SESSION['message']) {
                    echo $_SESSION['message'];
                    unset($_SESSION['message']);
                }
            ?>
        </p><br>
    </form>
</body>

</html>