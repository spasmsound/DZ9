<?php

function __autoload($className)
{
    require __DIR__ . '/classes/' . $className . '.php';
}

$view = new View();

$dataBase = new DB();
$pictures = $dataBase->query('SELECT id, path FROM gallery');

$view->assign('pictures', $pictures);
$view->display(__DIR__ . '/templates/gallery.php');