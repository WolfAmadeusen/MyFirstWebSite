<?php

session_start();
$connect = mysqli_connect('localhost', 'root', '', 'myFirstWebsite');
$query   = "SELECT * FROM `bd`";
$result  = mysqli_query($connect, $query);

$login   = $_SESSION["data"]["login"];

$alt = '';
if ($_SESSION["data"]["file"] == NULL || !$_SESSION["data"]["file"]) {
    $alt = "Вы не загрузили фото";
}

if (!$_SESSION['data']) {
    unset($_SESSION['data']);
    header("Location: ../Sing__out.php");
}

//Добавление статей на страницу
class My_Section
{
    static public function Sections()
    {
        if (isset($_POST['my_button'])) {
            // Получаем значение из формы и сохраняем его в переменной
            $value = $_POST['my_input'];
        }
        $identifier = $_SESSION["data"]["login"];
        $connect = mysqli_connect('localhost', 'root', '', 'myFirstWebsite');;
        $query = "SELECT * FROM `database_for_newa_world` WHERE `author`= '$identifier'";
        $result = mysqli_query($connect, $query);
        $article = mysqli_fetch_all($result);

        foreach ($article as $value) {
            if ($value[1] !== $identifier) {
                echo "<h3>У вас нету статей</h3>";
                break;
            } else {
                if ($value[2] == "Мировые новости") {
                    echo "<form action='corected.php' method='post' class='block' enctype='multipart/form-data'>
                        <h3 name='title'>$value[3]</h3>
                        <strong name='category'>$value[2]</strong><br>
                        <strong name='date'>$value[6]</strong>
                        <img src='../images/news__world/$value[5]' class='section__img'>
                        <p name='text'>$value[4]</p><br>
                        <a href='delete.php?id=$value[0]' class='close'>Удалить</a>
                   </form></br>";
                } else {
                    $file_path = "../images/News__gaming/$value[5]";
                    echo "<form action='corected.php' method='post' class='block' enctype='multipart/form-data'>
                        <h3 name='Title'>$value[3]</h3>
                        <strong name='category'>$value[2]</strong><br>
                        <strong name='date'>$value[6]</strong>
                        <img name='images' value='image' src='$file_path' class='section__img'>
                        <p name='text'>$value[4]</p><br>
                        <a href='delete.php?id={$value[0]}&file_path=$file_path' class='close'>Удалить</a>
                   </form></br>";
                }
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Админка</title>
    <style>
        a {
            color: #000;
            text-decoration: none;
        }
    </style>
    <link rel="stylesheet" href="../style/styler.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,50..200" />
</head>

<body>
    <!-- Шапка -->
    <div class="wripper__menu">
        <a href="../home/home.php">Главная страница</a>
        <a href="../news_of_game/news_of_game.php">Новости про игры</a>
        <a href="../news_of_world/world_news.php" target="_blank">Новости про Мир</a>
        <a href="../Sing__out.php">
            <span class="material-symbols-outlined">
                logout
            </span>
        </a>
    </div><br>
    <!-- Данные про пользователя -->
    <div class="body">
        <div class="header" enctype='multipart/form-data'>
            <div class="profile__photo">
                
                <img src="../image_from_users/<?= $_SESSION['data']["file"]; ?>" alt="<?= $alt ?>">
            </div>
            <div class="profile__info">
                <h2>Логин: <?= $_SESSION['data']['login'] ?></h2>
                <h2>ФИО: <?= $_SESSION['data']["fio"] ?></h2>
                <p>Возраст: <?= $_SESSION['data']["age"] ?></p=>
                <p>Пол: <?= $_SESSION['data']["gender"] ?></pe=>
                <p>Про себя: <?= $_SESSION['data']["about__me"] ?></p><br>
                <a class="redact" href="corected.php?id=redact__profile">Редактировать профиль</a>
            </div>
        </div>
        <br>
        <!-- Делаем статьи -->
        <article>
            <form action="add.php" method="post" enctype='multipart/form-data'>
                <h2 class="title"> Создать новую статью</h2>
                <h3>Название статьи</h3>
                <input type="text" class="text" name="name_section">
                <h3>Cтатья</h3>
                <textarea class="text" name="text" cols="50" rows="10"></textarea>
                <p>Категория вашей статьи</p>
                <select name="news__location">
                    <option value="Мировые новости">Мировые новости</option>
                    <option value="Новости про игры">Новости про игры</option>
                </select>
                <p>Добавить файл</p>
                <input type="file" name="file" value="file">
                <p>Добавить дату</p>
                <input type="date" name="date">
                <input class="submit" type="submit" value="Написать">
                <p>
                    <?php
                    if ($_SESSION["message"]) {
                        echo $_SESSION["message"];
                        unset($_SESSION["message"]);
                    }
                    ?>
                </p>
            </form>
        </article>
        <br>
        <!-- Мои статьи -->
        <article class="corected__article">
            <h2 class="title">Ваши статьи</h2>
            <?php
            $articles = new My_Section;
            $articles->Sections();
            ?>
        </article>
    </div>
    <br><br>
</body>

</html>