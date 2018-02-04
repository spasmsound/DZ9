<?php
require __DIR__ . '/../autoload.php';

$view = new \App\Models\View();
$dataBase = new \App\Models\DB();
$admin = new \App\Models\Admin();

$images = $dataBase->execute('SELECT * FROM gallery'); //пригодится, если добавить сюда удаление фотографий

$view->assign('images', $images);
$view->display(__DIR__ . '/../templates/admin/addPhoto.php');

if (empty($_FILES)){
    die ('Вы ничего не загрузили');
}

if (false == $admin->addPhoto()) {
    echo 'Можно загружать только файлы формата .jpg/.png!';
} else echo 'Успешно загружено';
?>
<hr>
<a href="../gallery.php">Перейти в галлерею</a>