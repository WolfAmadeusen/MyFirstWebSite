<?php
session_start();

if (!$_SESSION['data']) {
    unset($_SESSION['data']);
    header("Location: ../Sing__out.php");
}

$connect = mysqli_connect('127.0.0.1:3306', 'root', '', 'myFirstWebsite');
$query = "SELECT * FROM `database_for_newa_world` WHERE category = 'Мировые новости'";
$result = mysqli_query($connect, $query);
$article = mysqli_fetch_all($result);
$title = "Новости из мира";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/styler.css">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="../style/styler.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,50..200" />
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
        <h2 class="title"><?= $title ?></h2>
        <?php
        foreach ($article as $key => $value) {
            echo "<div method='post' class='block'>
                   <h3 name='Title'>Название: $value[3]</h3>
                   <strong name='category'>Категория:$value[2]</strong><br>
                   <div>Статью написал: <a href='../home/frand.php?id=$value[1]' target='_blank'  class='redact'>$value[1]</a></div>
                   <img src='../images/news__world/$value[5]' class='section__img' alt='Вы не загрузили фото'>
                   <p name='text'>$value[4]</p>
                   <p>Дата: $value[6]</p>
                   </div>";
        }
        ?>
    </div>
</body>

</html>