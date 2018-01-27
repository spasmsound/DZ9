<?php
session_start();


require __DIR__ . '/autoload.php';

$view = new \App\Models\View();

$dataBase = new \App\Models\DB();
$pictures = $dataBase->query('SELECT id, path FROM gallery');

$view->assign('pictures', $pictures);
$view->display(__DIR__ . '/templates/gallery.php');