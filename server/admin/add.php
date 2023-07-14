<?php
session_start();
$name = $_POST["name_section"];
$text = $_POST["text"];
$news__location  = $_POST["news__location"];
$date = $_POST["date"];
$autor = $_SESSION['data']['login'];
$file = trim(strtolower($_FILES['file']['name']));
$file = md5($file);
if ($name == '') {
    session_start();
    $_SESSION["message"] = "Нету названия статьи";
    header("adminka.php");
}

if ($text == '') {
    session_start();
    $_SESSION["message"] = "Вы не написали текст к  статье";
    header("adminka.php");
}

if ($file == '') {
    session_start();
    $_SESSION["message"] = "Вы не загрузили файл к статье";
    header("adminka.php");
}

if ($date == '') {
    session_start();
    $_SESSION["message"] = "Вы не указали дату";
    header("adminka.php");
}


//Подключение и отправка файла в бд для мировых новостей
$connect = mysqli_connect("localhost", "root", "root", "mywebsite");
$query   = "INSERT INTO `database_for_newa_world`(`id_articles`, `author`, `category`, `title`, `text`, `img`, `data`) VALUES (NULL,'$autor','$news__location','$name','$text','$file.jpeg','$date')";
$result  = mysqli_query($connect, $query);
mysqli_close($connect);
if ($news__location == "Мировые новости") {
    $tmp_name = $_FILES['file']['tmp_name'];
    move_uploaded_file($tmp_name, "../images/news__world/$file.jpeg");
    header("Location: adminka.php");
} else {
    $tmp_name = $_FILES['file']['tmp_name'];
    move_uploaded_file($tmp_name, "../images/News__gaming/$file.jpeg");
    header("Location: adminka.php");
}
