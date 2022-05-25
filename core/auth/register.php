<?php
require_once '../db.php';

$name = $_POST['name'];
$surname = $_POST['surname'];
$patronymic = $_POST['patronymic'];
$login = $_POST['login'];
$email = $_POST['email'];
$password = $_POST['password'];

$query = "INSERT INTO `users` (`id`, `name`, `surname`, `patronymic`, `login`, `email`, `password`) VALUES
        (null, '$name', '$surname', '$patronymic', '$login', '$email', '$password')";
$response = mysqli_query($connection, $query);

if ($response) {
    header('Location: /login.php');
} else {
    echo 'Ошибка';
}