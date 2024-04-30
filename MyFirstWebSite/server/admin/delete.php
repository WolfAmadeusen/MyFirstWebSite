<?php
require_once "adminka.php";
$id = $_GET['id'];
$file_path = $_GET['file_path'];

$query = "DELETE FROM `database_for_newa_world` WHERE `id_articles`= $id";
$result = mysqli_query($connect, $query);
echo"<meta http-equiv='refresh' content='0.25; url=adminka.php'>";
?>