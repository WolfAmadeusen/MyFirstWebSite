<?php
session_start();
require_once 'Sing__up.php';

$login   = $_POST["login"];
$FIO     = $_POST["FIO"];
$age     = $_POST["age"];
$gender  = $_POST["sex"];
$about__me    = $_POST["text"];
$file    = $_POST["file"];
$password= $_POST["password"];
$password_confirm = $_POST["password_confirm"];

//Если пароль совпадает с повторным паролем
if ($password !== $password_confirm) {
    $_SESSION["message"] = "Пароль  не верный повторите папытку";
    header('Location: Sing__up.php');
} else {
    //Проверка на пустое место
    $i = false;
    while ($i !== true) {
        if ($login == '') {
            $_SESSION['message'] = 'Нету логина';
            header("Location: Sing__up.php");
        }
        if ($FIO == '') {
            $_SESSION['message'] = 'Нету ФИО';
            header("Location: Sing__up.php");
        }
        if ($age == '') {
            $_SESSION['message'] = 'Нету возраста';
            header("Location: Sing__up.php");
        }
        if ($file == '') {
            $_SESSION['message'] = 'Нету фото';
            header("Location: Sing__up.php");
        }
        $i = true;
    };

    /*Отправка файла в папку
    В form нужно добавить enctype='multipart/form-data' если нету то не будет работать*/
    $name_file = trim(mb_strtolower($_FILES['file']['name']));
    $tmp_name  = $_FILES["file"]["tmp_name"];
    move_uploaded_file($tmp_name,"../image_from_users/$name_file");
    $file = $name_file;

    //хешируємо пароль та кидаємо данні в бд
    $password = md5($password);
    mysqli_query($connect, "INSERT INTO `bd_users`(`id`, `FIO`, `login`, `age`, `gender`, `about__me`, `photo`, `password`) VALUES (NULL,'$FIO','$login','$age','$gender','$about__me','$file','$password')");
    $_SESSION["data"] =[
        "login"=>$login,
        "fio"=>$FIO,
        "age"=>$age,
        "gender"=>$gender,
        "about__me"=>$about__me,
        "file"  =>$file,
        "password" => $password
    ];
    header("Location: ../admin/adminka.php");
}
