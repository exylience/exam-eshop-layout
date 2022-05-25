<?php
require_once '../db.php';

$title = $_POST['title'];
$genre = $_POST['genre_id'];
$dateStart = $_POST['date_start'];
$ageRating = $_POST['age_rating'];
$price = $_POST['price'];
$photoUrl = null;

if (!empty($_FILES['photo'])) {
    $tmpFile = $_FILES['photo']['tmp_name'];
    $photoUrl = $_FILES['photo']['name'];

    if (!is_dir('../../uploads')) {
        mkdir('../../uploads');
    }

    move_uploaded_file($tmpFile, "../../uploads/$photoUrl");
}

$query = "INSERT INTO `sessions` (`id`, `title`, `photo_url`, `genre_id`, `date_start`, `age_rating`, `price`) VALUES 
     (null, '$title', '$photoUrl', '$genre', '$dateStart', '$ageRating', '$price')";
$response = mysqli_query($connection, $query);

if ($response) {
    header('Location: /admin/index.php');
} else {
    echo 'Ошибка';
}