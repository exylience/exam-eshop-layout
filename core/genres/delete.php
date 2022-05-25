<?php
require_once '../db.php';

$id = $_GET['id'];

$query = "DELETE FROM `genres` WHERE (`id` = '$id')";
$response = mysqli_query($connection, $query);

if ($response) {
    header('Location: /admin/genres.php');
} else {
    echo 'Ошибка';
}