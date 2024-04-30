<?php
session_start();

if (!$_SESSION['data']) {
    unset($_SESSION['data']);
    header("Location: ../Sing__out.php");
}
class Update
{
    public function Update__profile()
    {
        //получение изменяемого файла
        $login = $_SESSION['data']['login'];
        $fio   = $_SESSION['data']['fio'];
        $age   = $_SESSION['data']['age'];
        $about__me = $_SESSION['data']['about__me'];
        $file = $_SESSION['data']['file'];
        echo "<form action='update.php'method='post' class='block' enctype='multipart/form-data'>
            <h3>Изменить логин</h3>
            <input type='text' name='login' value='$login'>
            <h3>Изменить полное имя</h3>
            <input name='fio' type='text' value='$fio'>
            <h3>Изменить возраст</h3>
            <input name='age' type='number' value='$age'>
            <h3>Изменить пол</h3>
            <select name='sex'>
                <option value='Мужчина'>Мужчина</option>
                <option value='Женчина'>Женчина</option>
                <option value='Другое'>Другое</option>
            </select>
            <h3>Изменить информацию про себя</h3>
            <textarea name='text' cols='50' rows='10'>$about__me</textarea>
            <h3>Выбирите иконку</h3>
            <input type='file' name='file' value='file'>
            <img name='../image_from_users/$file' >
            <br>";
    }
    public function Update__article()
    {
        $id = $_POST['id'];
        echo "$id";
    }
};
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $id ?></title>
    <link rel="stylesheet" href="../style/styler.css">
    <style>
        .block {
            border: none;
        }
    </style>
</head>

<body>
    <br>
    <div class="body">
        <a class="close" href="adminka.php">Отмена</a>
        <?php
        $location = $_GET['id'];
        $Update = new Update;
        if ($location == 'redact__article') {
            $Update->Update__article();
        }
        if ($location == 'redact__profile') {
            $Update->Update__profile();
        }
        if (!$_GET['id']) header("Location: adminka.php");
        // echo"<p>".$_SESSION['corect']."</p>";
        if ($_SESSION['corect']) {
            echo "<p>" . $_SESSION['corect'] . "</p>";
            unset($_SESSION['corect']);
        }
        ?><br>
        <input type='submit' class='submit' value='Изменить'>
        </form>
    </div>
</body>

</html>