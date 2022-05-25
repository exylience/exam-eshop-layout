<?php
require_once '../db.php';

$id = $_POST['id'];
$title = $_POST['title'];
$genre = $_POST['genre_id'];
$dateStart = $_POST['date_start'];
$ageRating = $_POST['age_rating'];
$price = $_POST['price'];
$photoUrl = $_POST['photo_url'];

if (!empty($_FILES['photo'])) {
    $tmpFile = $_FILES['photo']['tmp_name'];
    $photoUrl = $_FILES['photo']['name'];

    if (!is_dir('../../uploads')) {
        mkdir('../../uploads');
    }

    move_uploaded_file($tmpFile, "../../uploads/$photoUrl");
}

$query = "UPDATE `sessions` SET `title` = '$title', `photo_url` = '$photoUrl', `genre_id` = '$genre', `date_start` = '$dateStart', `age_rating` = '$ageRating', `price` = '$price'
    WHERE (`id` = '$id')
";
$response = mysqli_query($connection, $query);

if ($response) {
    header('Location: /admin/index.php');
} else {
    echo 'Ошибка';
}