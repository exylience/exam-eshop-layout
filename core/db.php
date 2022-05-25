<?php
$connection = mysqli_connect('localhost', 'root', '488Lalka228', 'test');

if (!$connection) {
    die('Ошибка подключения к базе данных');
}