<?php
require_once '../db.php';

$name = $_POST['name'];

$query = "INSERT INTO `genres` (`id`, `name`) VALUES (null, '$name')";
$response = mysqli_query($connection, $query);

if ($response) {
    header('Location: /admin/genres.php');
} else {
    echo 'Ошибка';
}