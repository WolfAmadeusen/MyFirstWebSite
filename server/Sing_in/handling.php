<?php
require_once "Sing__in.php";
session_start();

$connect = mysqli_connect('localhost', 'root', 'root', 'mywebsite');
$query   = "SELECT * FROM `bd_users`";
$result  = mysqli_query($connect, $query);
$login    = $_POST["login"];
$password = $_POST["password"];
$password = md5($password);

$_SESSION['data']=[
    "password"=>$password
];
if ($_POST) {
    if (!$login) {
        $_SESSION['message'] = 'Нету логина';
        echo "<meta http-equiv='refresh' content='1; url=Sing__in.php'>";
    };
    if (!$password) {
        $_SESSION['message'] = 'Нету пароля';
        echo "<meta http-equiv='refresh' content='1; url=Sing__in.php'>";
    };
    $connection = mysqli_query($connect, "SELECT * FROM `bd_users` WHERE `login` = '$login' AND `password` = '$password'");

    if (mysqli_num_rows($connection) > 0) {
        $user = mysqli_fetch_assoc($connection);
        $_SESSION["data"] = [
            "login" => $user['login'],
            "fio" => $user["FIO"],
            "age" => $user['age'],
            "gender" => $user['gender'],
            "about__me" => $user['about__me'],
            "file"  => $user['photo'],
            "password"=>$password
        ];
        echo" <h1>Вход прошел успешно</h1>";
        header("Location: ../admin/adminka.php");
    } else {
        echo "<meta http-equiv='refresh' content='1; url=Sing__in.php'>";
        echo'Вы не вошли в аккаунт';
    };
};
?>
