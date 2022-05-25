<?php
session_start();
require_once '../db.php';

$login = $_POST['login'];
$password = $_POST['password'];

$query = "SELECT * FROM `users` WHERE (`login` = '$login' AND `password` = '$password')";
$response = mysqli_query($connection, $query);

if ($response) {
    if (mysqli_num_rows($response) !== 0) {
        $user = mysqli_fetch_assoc($response);
        $_SESSION['user'] = [
            'id' => $user['id'],
            'name' => $user['name'],
            'surname' => $user['surname'],
            'patronymic' => $user['patronymic'],
            'login' => $user['login'],
            'email' => $user['email'],
            'group' => $user['group']
        ];

        header('Location: /index.php');
    }
} else {
    echo 'Ошибка запроса';
}