<?php
function __autoload($class)
{
    require __DIR__ . '/classes/' . $class . '.php';
}
if (empty($_GET['id'])) {
    die ('Картинка не существует');
}
$dataBase = new DB();
$picture = $dataBase->query('SELECT id, path FROM gallery WHERE id=:id', [':id' => $_GET['id']]);

$view = new View();
$view->assign('picture', $picture);
$view->display(__DIR__ . '/templates/image.php');