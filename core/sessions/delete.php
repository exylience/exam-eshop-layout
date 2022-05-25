<?php
require_once '../db.php';

$id = $_GET['id'];

$query = "DELETE FROM `sessions` WHERE (`id` = '$id')";
$response = mysqli_query($connection, $query);

if ($response) {
    header('Location: /admin/index.php');
} else {
    echo 'Ошибка';
}