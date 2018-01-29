<?php
require __DIR__ . '/../autoload.php';

$view = new \App\Models\View();
$dataBase = new \App\Models\DB();

$images = $dataBase->execute('SELECT * FROM gallery'); //пригодится, если добавить сюда удаление фотографий

$view->assign('images', $images);
$view->display(__DIR__ . '/../templates/admin/addPhoto.php');