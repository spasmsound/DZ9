<?php session_start() ?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>Вход</title>
    <link rel="icon" href="http://vladmaxi.net/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="http://vladmaxi.net/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="assets/styles/authstyle.css" />
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="http://www.modernizr.com/downloads/modernizr-latest.js"></script>
    <script type="text/javascript" src="assets/js/placeholder.js"></script>
</head>
<body>

<form id="slick-login" method="post" action="auth.php">
    <label for="username">Логин:</label><input type="text" name="username" class="placeholder" placeholder="Логин">
    <label for="password">Пароль:</label><input type="password" name="password" class="placeholder" placeholder="Пароль">
    <input type="submit" value="ВОЙТИ">
</form>
</body>
</html>