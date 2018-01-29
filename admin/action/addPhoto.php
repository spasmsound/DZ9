<?php
require __DIR__ . '/../../autoload.php';

$dataBase = new \App\Models\DB();
$add = new \App\Models\Admin();

if (empty($_FILES)){
    die ('Вы ничего не загрузили');
}


if (false == $add->addPhoto()) {
  echo 'Можно загружать только файлы формата .jpg/.png!';
} else echo 'Успешно загружено';
?>
<hr>
<a href="../addPhoto.php">Загрузить еще</a>
<br>
<a href="../../gallery.php">Перейти в галлерею</a>