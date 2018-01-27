<?php
session_start();

require __DIR__ . '/autoload.php';

if (empty($_GET['id'])) {
    die ('Картинка не существует');
}
$dataBase = new \App\Models\DB();
$picture = $dataBase->query('SELECT id, path FROM gallery WHERE id=:id', [':id' => $_GET['id']]);

$view = new \App\Models\View();
$view->assign('picture', $picture);
$view->display(__DIR__ . '/templates/image.php');