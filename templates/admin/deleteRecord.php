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
<?php foreach ($guestBook as $value) { ?>
    <article>
        <?php echo $value['record']; ?>
        <form action="deleteRecord.php" method="get">
            <input name="<?php echo $value['id'] ?>" type="submit" value="Удалить" />
        </form>
        <hr>
    </article>
<?php } ?>
<br><br>
<a href="../guest.php">Вернуться к гостевой книге</a>
</body>
</html>