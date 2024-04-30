<?php
session_start();
require_once "adminka.php";

$name = $_POST["name_section"];
$text = $_POST["text"];
$news__location  = $_POST["news__location"];
$date = $_POST["date"];
$author = $_SESSION['data']['login'];
$file = trim(strtolower($_FILES['file']['name']));
$file = md5($file);

if ($name == '') {
    $_SESSION["message"] = "Нету названия статьи";
    echo"<meta http-equiv='refresh' content='.25; url=adminka.php'>";
} elseif ($text == '') {
    $_SESSION["message"] = "Вы не написали текст к  статье";
    echo"<meta http-equiv='refresh' content='.25; url=adminka.php'>";
} elseif ($_FILES["file"]["error"] !== UPLOAD_ERR_OK) {
    $_SESSION["message"] = "Вы не загрузили файл к статье";
    echo"<meta http-equiv='refresh' content='.25; url=adminka.php'>";
} elseif ($date == '') {
    $_SESSION["message"] = "Вы не указали дату";
    echo"<meta http-equiv='refresh' content='.25; url=adminka.php'>";
} else {
    //Подключение и отправка файла в бд для мировых новостей
    $query   = "INSERT INTO `database_for_newa_world`(`id_articles`, `author`, `category`, `title`, `text`, `img`, `data`) VALUES (NULL,'$author','$news__location','$name','$text','$file.jpeg','$date')";
    $result  = mysqli_query($connect, $query);

    if ($news__location == "Мировые новости") {
        $tmp_name = $_FILES['file']['tmp_name'];
        move_uploaded_file($tmp_name, "../images/news__world/$file.jpeg");
        echo"<meta http-equiv='refresh' content='.25; url=adminka.php'>";
    } else {
        $tmp_name = $_FILES['file']['tmp_name'];
        move_uploaded_file($tmp_name, "../images/News__gaming/$file.jpeg");
        echo"<meta http-equiv='refresh' content='.25; url=adminka.php'>";
    }
    mysqli_close($connect);
}


?>
