<?php
session_start();
require_once '../../core/db.php';

if (
    !isset($_SESSION['user']) ||
    $_SESSION['user']['group'] !== 2
) {
    header('Location: /index.php');
}

$id = $_GET['id'];

$query = "SELECT * FROM `sessions` WHERE (`id` = '$id')";
$response = mysqli_query($connection, $query);
if (mysqli_num_rows($response) === 0) {
    header('Location: /admin/index.php');
} else {
    $session = mysqli_fetch_assoc($response);
}

$query = "SELECT * FROM `genres`";
$response = mysqli_query($connection, $query);
$genres = mysqli_fetch_all($response, MYSQLI_ASSOC);
?>

<!doctype html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>NeNetFlix | Добавление сеанса</title>
        <link rel="stylesheet" href="../../assets/css/fonts.css">
        <link rel="stylesheet" href="../../assets/css/style.css">
    </head>
    <body>
        <div class="sys-message error hidden">
            <div class="msg-wrapper">
                <button class="msg-cls" onclick="closeMessage(event)">X</button>
                <p class="msg-text"></p>
            </div>
        </div>

        <header class="header">
            <div class="container">
                <a class="logo" href="../../index.php">NeNetFlix</a>

                <nav>
                    <a class="nav-link active" href="../index.php">Сеансы</a>
                    <a class="nav-link" href="../genres.php">Жанры</a>
                    <a class="nav-link" href="#">Заказы</a>
                    <a class="nav-link logout" href="../../core/auth/logout.php">Выход</a>
                </nav>
            </div>
        </header>

        <section class="main">
            <div class="container">
                <div class="section-top">
                    <h3 class="section-title">Добавление сеанса</h3>
                </div>

                <form id="registerForm" class="form-main" action="../../core/sessions/edit.php" method="post" enctype="multipart/form-data">
                    <label>Название</label>
                    <input class="form-input" name="title" type="text" value="<?= $session['title'] ?>">

                    <label>Фото</label>
                    <input class="form-input" name="photo" type="file">

                    <label>Жанр</label>
                    <select class="form-input" name="genre_id">
                        <?php
                            foreach ($genres as $genre) {
                                ?>
                                    <option <?= $genre['id'] === $session['genre_id'] ? 'selected' : '' ?> value="<?= $genre['id'] ?>"><?= $genre['name'] ?></option>
                                <?php
                            }
                        ?>
                    </select>

                    <label>Дата показа</label>
                    <input class="form-input" name="date_start" type="datetime-local" value="<?= date('Y-m-d\TH:i:s', time()) ?>">

                    <label>Возрастной ценз</label>
                    <input class="form-input" name="age_rating" type="text" value="<?= $session['age_rating'] ?>">

                    <label>Цена</label>
                    <input class="form-input" name="price" type="number" value="<?= $session['price'] ?>">

                    <input name="id" type="hidden" value="<?= $session['id'] ?>">
                    <input name="photo_url" type="hidden" value="<?= $session['photo_url'] ?>">

                    <button class="form-btn" type="submit">Опубликовать</button>
                </form>
            </div>
        </section>
    </body>
</html>