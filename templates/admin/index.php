<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Вы вошли в админ-панель как <?php $auth->getCurrentUser() ?>. Выберите фунцию:</h1>
<a href="deleteRecord.php"><h2>Удаление записей из гостевой книги</h2></a>
<a href="addPhoto.php"><h2>Добавить фото в галлерею</h2></a>
<a href="changeAbout.php"><h2>Изменить текст "Обо мне"</h2></a>

</body>
</html>