<?php

session_start();
require_once 'Sing__up.php';

$login = $_POST["login"];
$FIO = $_POST["FIO"];
$age = $_POST["age"];
$gender = $_POST["sex"];
$about__me = $_POST["text"];
$file = $_FILES["file"];
$password = $_POST["password"];
$password_confirm = $_POST["password_confirm"];


// Проверка наличия логина в базе данных и проверки все ли записал пользователь
$username = mysqli_query($connect, "SELECT * FROM `bd_users` WHERE `login` = '$login'");
$name     = mysqli_query($connect, "SELECT * FROM `bd_users` WHERE `FIO` = '$FIO'");

//Обработчики
if ($login == "" && $FIO == "" && $age == "" && $about__me == "" && $file == "" && $password == "" && $password_confirm == "") {
    $_SESSION["message"] = "Вы не заполнили форму";
    header("Location: Sing__up.php");
    exit;
} elseif ($password !== $password_confirm) {
    $_SESSION["message"] = "Пароль не савпадает, повторите папытку";
    header("Location: Sing__up.php");
    exit;
} elseif (!$login || trim($login) == '') {
    $_SESSION['message'] = 'Нету логина';
    header("Location: Sing__up.php");
    exit;
} elseif (!$FIO || trim($FIO) == '') {
    $_SESSION['message'] = 'Нету ФИО';
    header("Location: Sing__up.php");
    exit;
} elseif (!$age || trim($age) == '') {
    $_SESSION['message'] = 'Нету возраста';
    header("Location: Sing__up.php");
    exit;
} elseif (!isset($_FILES['file']) || $_FILES['file']['error'] !== UPLOAD_ERR_OK) {
    $_SESSION['message'] = 'Файл не был загружен или произошла ошибка при загрузке';
    header("Location: Sing__up.php");
    exit;
} elseif (!$about__me || trim($about__me) == '') {
    $_SESSION['message'] = 'Вы не рассказали про себя';
    header("Location: Sing__up.php");
    exit;
} elseif (mysqli_num_rows($name) > 0 || mysqli_num_rows($username) > 0) {
    $_SESSION['message'] = 'Такой пользователь уже есть <a href="../Sing_in/Sing__in.php"> войдите </a>';
    header("Location: Sing__up.php");
    exit;
} elseif (!isset($_FILES['file']) || $_FILES['file']['error'] !== UPLOAD_ERR_OK) {
    $_SESSION['message'] = 'Файл не был загружен или произошла ошибка при загрузке';
    header("Location: Sing__up.php");
    exit;
} else {
    Sing__up($connect, $FIO, $login, $age, $gender, $about__me, $file, $password);
}

function Sing__up($connect, $FIO, $login, $age, $gender, $about__me, $file, $password)
{
    $password = md5($password);
    $filename = $_FILES['file']['name'];
    $file_tmp = $_FILES['file']['tmp_name'];
    move_uploaded_file($file_tmp, "../image_from_users/" . $filename);

    //Хешируем пароль и кидаем в БД
    mysqli_query($connect, "INSERT INTO `bd_users`(`id`, `FIO`, `login`, `age`, `gender`, `about__me`, `photo`, `password`) VALUES (NULL,'$FIO','$login','$age','$gender','$about__me','$filename','$password')");
    $_SESSION["data"] = [
        "login" => $login,
        "fio" => $FIO,
        "age" => $age,
        "gender" => $gender,
        "about__me" => $about__me,
        "file" => $filename,
        "password" => $password
    ];
    header("Location: ../admin/adminka.php");
    exit;
}
