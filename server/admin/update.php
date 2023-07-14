<?php
session_start();

if (!$_SESSION['data']) {
    unset($_SESSION['data']);
    header("Location: ../home.html");
}

class Update
{
    public function update_file()
    {
        //Получение данных для изменнения
        $login_corected = $_POST['login'];
        $fio_corected   = $_POST['fio'];
        $age_corected   = $_POST['age'];
        $gender   = $_POST['sex'];
        $text_corected  = $_POST['text'];
        $files = $_POST['file'];
        if ($login_corected == '') header("Locate: corected.php");
        if ($fio_corected == '') header("Locate: corected.php");
        if ($text_corected == '') header("Locate: corected.php");
        if ($files == '') header("Locate: corected.php");

        //Удаление фото
        $files = $_SESSION['data']['file'];
        $file_path = "../image_from_users/$files";
        unlink($file_path); // - удаление файла

        //Добавить фото
        $name_file = trim(mb_strtolower($_FILES['file']['name']));
        $tmp_name  = $_FILES["file"]["tmp_name"];
        move_uploaded_file($tmp_name, "../image_from_users/$name_file");

        //Дополнительные данные
        $file = $name_file;
        $users = $_SESSION['data']['login'];
        $password = $_SESSION['data']['password'];

        //получение id 
        $connect = mysqli_connect('localhost', 'root', 'root', 'mywebsite');
        $query = "SELECT * FROM `bd_users` WHERE `login`= '$users'";
        $result = mysqli_query($connect, $query);
        $id_in_db = mysqli_fetch_all($result);
        $id = $id_in_db[0];


        //Oбновление базы данных сo статьями
        $connect1 = mysqli_connect('localhost', 'root', 'root', 'mywebsite');
        $query1 = "UPDATE `database_for_newa_world` SET `author`='$login_corected' WHERE `author` ='$users'";
        $result = mysqli_query($connect1, $query1);
        mysqli_close($connect1);

        //Подключение
        $connect = mysqli_connect('localhost', 'root', 'root', 'mywebsite');
        $query  = "UPDATE `database_for_newa_world` SET `author`='Morpech babushka Olha' WHERE `author` ='login'";
        $result = mysqli_query($connect, $query);
        mysqli_close($connect);

        //Передача данных в session
        $_SESSION["data"] = [
            "login" => $login_corected,
            "fio" => $fio_corected,
            "age" => $age_corected,
            "gender" => $gender,
            "about__me" => $text_corected,
            "file"  => $file,
            "password" => $password
        ];
        header("Location: adminka.php");
    }
};
$up = new Update;
$up->update_file();
?>