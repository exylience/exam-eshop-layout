<!doctype html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>NeNetFlix | Регистрация</title>
        <link rel="stylesheet" href="assets/css/fonts.css">
        <link rel="stylesheet" href="assets/css/style.css">
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
                <a class="logo" href="index.php">NeNetFlix</a>

                <nav>
                    <a class="nav-link" href="about.php">О нас</a>
                    <a class="nav-link" href="#">Афиша</a>
                    <a class="nav-link" href="#">Где нас найти?</a>
                    <a class="nav-link" href="login.php">Аутентификация</a>
                    <a class="nav-link active" href="register.php">Регистрация</a>
                </nav>
            </div>
        </header>

        <section class="main">
            <div class="container">
                <div class="section-top">
                    <h3 class="section-title">Регистрация</h3>
                </div>

                <form id="registerForm" class="form-main" action="core/auth/register.php" method="post" onsubmit="validateRegisterForm(event)">
                    <label>Имя</label>
                    <input class="form-input" name="name" type="text">

                    <label>Фамилия</label>
                    <input class="form-input" name="surname" type="text">

                    <label>Отчество</label>
                    <input class="form-input" name="patronymic" type="text">

                    <label>Логин</label>
                    <input class="form-input" name="login" type="text">

                    <label>Email</label>
                    <input class="form-input" name="email" type="email">

                    <label>Пароль</label>
                    <input class="form-input" name="password" type="password">

                    <label>Повтор пароля</label>
                    <input class="form-input" name="password_repeat" type="password">

                    <button class="form-btn" type="submit">Зарегистрироваться</button>
                </form>
            </div>
        </section>

        <script src="assets/js/app.js"></script>
        <script src="assets/js/validation.js"></script>
    </body>
</html>