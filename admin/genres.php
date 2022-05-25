<?php
session_start();
require_once '../core/db.php';

if (
    !isset($_SESSION['user']) ||
    $_SESSION['user']['group'] !== 2
) {
    header('Location: /index.php');
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
        <title>NeNetFlix</title>
        <link rel="stylesheet" href="../assets/css/fonts.css">
        <link rel="stylesheet" href="../assets/css/style.css">
    </head>
    <body>
        <header class="header">
            <div class="container">
                <a class="logo" href="#">NeNetFlix</a>

                <nav>
                    <a class="nav-link" href="index.php">Сеансы</a>
                    <a class="nav-link active" href="#">Жанры</a>
                    <a class="nav-link" href="#">Заказы</a>
                    <a class="nav-link logout" href="../core/auth/logout.php">Выход</a>
                </nav>
            </div>
        </header>

        <section class="main">
            <div class="container">
                <div class="section-top">
                    <h3 class="section-title">Управление жанрами</h3>

                    <a class="section-link" href="genres/add.php">Добавить жанр</a>
                </div>

                <table class="admin-table">
                    <tr>
                        <th>ID</th>
                        <th>Название</th>
                        <th>Действия</th>
                    </tr>

                    <?php
                        foreach ($genres as $genre) {
                            ?>
                                <tr>
                                    <td>#<?= $genre['id'] ?></td>
                                    <td><?= $genre['name'] ?></td>
                                    <td>
                                        <a class="table-link delete" href="../core/genres/delete.php?id=<?= $genre['id'] ?>">Удалить</a>
                                    </td>
                                </tr>
                            <?php
                        }
                    ?>
                </table>
            </div>
        </section>
    </body>
</html>