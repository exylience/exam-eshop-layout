<!doctype html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>NeNetFlix | Аутентификация</title>
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
                <a class="logo" href="#">NeNetFlix</a>

                <nav>
                    <a class="nav-link" href="#">О нас</a>
                    <a class="nav-link" href="#">Афиша</a>
                    <a class="nav-link" href="#">Где нас найти?</a>
                    <a class="nav-link active" href="#">Аутентификация</a>
                    <a class="nav-link" href="#">Регистрация</a>
                </nav>
            </div>
        </header>

        <section class="main">
            <div class="container">
                <div class="section-top">
                    <h3 class="section-title">Аутентификация</h3>
                </div>

                <form id="authForm" class="form-main" action="core/auth/login.php" method="post" onsubmit="validateAuthForm(event)">
                    <label>Логин</label>
                    <input class="form-input" name="login" type="text">

                    <label>Пароль</label>
                    <input class="form-input" name="password" type="password">

                    <button class="form-btn" type="submit">Войти</button>
                </form>
            </div>
        </section>

        <script src="assets/js/app.js"></script>
        <script src="assets/js/validation.js"></script>
    </body>
</html>