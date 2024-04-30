<?php
session_start();

if (!$_SESSION['data']) {
    unset($_SESSION['data']);
    header("Location: ../Sing__out.php");
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
        $files = $_FILES['file'];

        if ($login_corected == '' || !$login_corected) {
            $_SESSION["corect"] = "вы не изменили логин";
            echo "<meta http-equiv='refresh' content='0.25 corected.php?id=redact__profile'>";
        }elseif ($fio_corected == '' || !$fio_corected) {
            $_SESSION["corect"] = "вы не изменили ФИО";
            echo "<meta http-equiv='refresh' content='0.25 corected.php?id=redact__profile'>";
        } elseif ($text_corected == '' || !$text_corected) {
            $_SESSION["corect"] = "вы не изменили текст про себя";
            echo "<meta http-equiv='refresh' content='0.25 corected.php?id=redact__profile'>";
        } elseif ($_FILES["file"]["error"] !== UPLOAD_ERR_OK) {
            $_SESSION["corect"] = "вы не вставили новый файл";
            echo "<meta http-equiv='refresh' content='0.25 corected.php?id=redact__profile'>";
        } else {

            //Удаление фото
            $files = $_SESSION['data']['file'];
            $file_path = "../image_from_users/$files";
            unlink($file_path); // - удаление файла

            //Добавить фото
            $name_file = trim(mb_strtolower($_FILES['file']['name']));
            $tmp_name  = $_FILES["file"]["tmp_name"];
            move_uploaded_file($tmp_name, "../image_from_users/$name_file");

            //Дополнительные данные
            $file = $_FILES["file"]['name'];
            $users = $_SESSION['data']['login'];
            $password = $_SESSION['data']['password'];

            $connect = mysqli_connect('localhost', 'root', '', 'myFirstWebsite');

            // Обновление базы со статьями
            mysqli_query($connect, "UPDATE `database_for_newa_world` SET `author`='$login_corected' WHERE `author`='$users'");

            // Обновление базы с пользователями
            mysqli_query($connect, "UPDATE `bd_users` SET `FIO`='$fio_corected',`login`='$login_corected',`age`='$age_corected',`gender`='$gender',`about__me`='$text_corected',`photo`='$file',`password`='$password' WHERE `login` = '$users'");

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
    }
};
$up = new Update;
$up->update_file();
