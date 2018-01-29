<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php foreach ($about as $value) { ?>

    <h1>Текущий текст "Обо мне": <i><?php echo $value['aboutme']; ?> </i></h1>
<?php } ?>
<hr>

<form name="comment" action="action/changeAbout.php" method="post" id="comment">
    <label>Новый текст:</label>
    <br>
    <textarea name="aboutText" cols="30" rows="10"></textarea><br><br>
    <button type="submit" form="comment" value="Submit">Отправить</button>
</body>
</html>