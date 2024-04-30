<?php

session_start();

if (!$_SESSION['data']) {
    header("Location: ../Sing__out.php");
}

$name = $_GET['id'];
$connect = mysqli_connect("localhost", "root", "", "myFirstWebsite");
$query   = "SELECT * FROM `bd_users` WHERE `login`='$name';";
$result = mysqli_query($connect, $query);
$info = mysqli_fetch_all($result);

if ($name == $_SESSION['data']['login']) {
    header("Location: ../admin/adminka.php");
}

foreach ($info as $key => $value) {
    $_SESSION["frand"] = [
        "login" => $value[2],
        "fio" => $value[1],
        "age" => $value[3],
        "gender" => $value[4],
        "about__me" => $value[5],
        "file"  => $value[6]
    ];
    break;
}

class Section
{
    static public function frand_Section()
    {
        $identifier = $_SESSION["frand"]["login"];
        $connect = mysqli_connect('localhost', 'root', '', 'myFirstWebsite');;
        $query = "SELECT * FROM `database_for_newa_world` WHERE `author`= '$identifier'";
        $result = mysqli_query($connect, $query);
        $article = mysqli_fetch_all($result);
        foreach ($article as $key => $value) {
            if ($value[2] == "Мировые новости") {
                echo "<form action='corected.php' method='post' class='block'>
                   <h3 name='Title'>Название: $value[3]</h3>
                   <strong name='category'>Категория:$value[2]</strong>
                   <strong name='date'>Дата: $value[6]</strong>
                   <img src='../images/news__world/$value[5]' class='section__img'>
                   <p name='text'>$value[4]</p>
                   </form><br>";
            } else {
                echo "<form action='corected.php' method='post' class='block'>
                        <h3 name='Title'>Название: $value[3]</h3>
                        <strong name='category'>Категория:$value[2]</strong>
                        <strong name='date'>Дата: $value[6]</strong>
                        <img src='../images/News__gaming/$value[5]' class='section__img'>
                        <p name='text'>$value[4]</p>
                   </form><br>";
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
    <title>Страничка: <?= $name ?></title>
    <link rel="stylesheet" href="../style/styler.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,50..200" />
</head>

<body>
    <!-- Шапка -->
    <div class="wripper__menu">
        <a href="../admin/adminka.php" class="b material-symbols-outlined">
            <span>
                person
            </span>
        </a>
        <a href="home.php">Главная страница</a>
        <a href="../news_of_game/news_of_game.php">Новости про игры</a>
        <a href="../news_of_world/world_news.php">Новости про Мир</a>

        <a href="../Sing__out.php">
            <span class="material-symbols-outlined">
                logout
            </span>
        </a>
    </div><br>
    <div class="body">
        <div class="header">
            <div class="profile__photo">
                <img src="../image_from_users/<?= $_SESSION['frand']["file"]; ?>" alt="У этого человека нету фотографии">
            </div>
            <div class="profile__info">
                <h2>Логин: <?= $_SESSION["frand"]["login"] ?></h2>
                <h2>ФИО: <?= $_SESSION["frand"]["fio"] ?></h2>
                <p>Возраст: <?= $_SESSION["frand"]["age"] ?></p>
                <p>Пол: <?= $_SESSION["frand"]["gender"] ?></p>
                <p>Про себя: <?= $_SESSION["frand"]["about__me"] ?></p>
            </div><br>
        </div>
        <!-- Мои статьи -->
        <article class="corected__article">
            <h2 class="title">Статьи:</h2>
            <?php
            $articles = new Section;
            $articles->frand_Section();
            ?>
        </article>
    </div>
</body>