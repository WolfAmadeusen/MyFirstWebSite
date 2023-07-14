<?php

$id = $_GET['id'];
echo"$id";

$connect = mysqli_connect('localhost', 'root', 'root', 'mywebsite');
$query = "DELETE FROM `database_for_newa_world` WHERE `id_articles`= $id";
$result = mysqli_query($connect, $query);
echo"<h1>Удалено</h1>";
header("Location: adminka.php")
?>