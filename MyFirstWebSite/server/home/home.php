<?php
session_start();

if (!$_SESSION['data']) {
    header("Location: ../Sing__out.php");
}

$connect = mysqli_connect('localhost', 'root', '', 'myFirstWebsite');
$query = "SELECT * FROM `database_for_newa_world`";
$result = mysqli_query($connect, $query);
$article = mysqli_fetch_all($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная страница</title>
    <style>
        a {
            color: #000;
            text-decoration: none;
            margin: 5px;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
    <link rel="stylesheet" href="../style/styler.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,50..200" />
</head>

<body>
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
        <?php

        foreach ($article as $key => $value) {
            if ($value[2] == "Мировые новости") {
                echo "<div method='post' class='block'>
                   <h3 name='Title'>Название: $value[3]</h3>
                   <strong name='category'>Категория:$value[2]</strong><br>
                   <div>Статью написал: <a href='frand.php?id=$value[1]' target='_blank'  class='redact'>$value[1]</a></div>
                   <img src='../images/news__world/$value[5]' class='section__img' alt='Вы не загрузили фото'>
                   <p name='text'>$value[4]</p>
                   <p>Дата: $value[6]</p>
                   </div>";
            } else {
                echo "<div action='corected.php' method='post' class='block'>
                        <h3 name='Title'>Название: $value[3]</h3>
                        <strong name='category'>Категория:$value[2]</strong>
                        <div>Статью написал: <a href='frand.php?id=$value[1]' target='_blank'  class='redact'>$value[1]</a></div>
                        <img src='../images/News__gaming/$value[5]' class='section__img' alt='Вы не загрузили фото'>
                        <p name='text'>$value[4]</p>
                        <p>Дата:$value[6]</p>
                   </div>";
            }
            echo "<br><br>";
        }
        ?>
    </div>
</body>