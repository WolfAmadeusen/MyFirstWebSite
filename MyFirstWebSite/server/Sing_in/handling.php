<?php
session_start();
require_once "Sing__in.php";
$login    = $_POST["login"];
$password = $_POST["password"];
$password = md5($password);

$connect  = mysqli_connect('localhost', 'root', '', 'myFirstWebsite');
$query    = "SELECT * FROM `bd_users`";
$result   = mysqli_query($connect, $query);

if ($_POST) {
    if (!$login || trim($login) == '') {
        $_SESSION['message'] = 'Нет логина';
        header("Location: Sing__in.php");
        exit();
    } elseif (!$password || trim($password) == '') {
        $_SESSION['message'] = 'Нет пароля';
        header("Location: Sing__in.php");
        exit();
    } else {
        $connection = mysqli_query($connect, "SELECT * FROM `bd_users` WHERE `login` = '$login'");
        if (mysqli_num_rows($connection) !== 0) {
            connectAccount($connect, $login, $password);
        } else {
            $_SESSION['message'] = 'Нет такого аккаунта';
            header("Location: Sing__in.php");
        }
    }
};

function connectAccount($connect, $login, $password)
{
    $connection = mysqli_query($connect, "SELECT * FROM `bd_users` WHERE `login` = '$login' AND `password` = '$password'");

    if ($connection && mysqli_num_rows($connection) > 0) {
        $user = mysqli_fetch_assoc($connection);
        $_SESSION["data"] = [
            "login" => $user['login'],
            "fio" => $user["FIO"],
            "age" => $user['age'],
            "gender" => $user['gender'],
            "about__me" => $user['about__me'],
            "file"  => $user['photo'],
        ];
        header("Location: ../admin/adminka.php");
        exit();
    } else {
        $_SESSION['message'] = 'Упс. Что-то пошло не так';
        header("Location: Sing__in.php");
    }
}
?>