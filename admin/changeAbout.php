<?php
require __DIR__ . '/../autoload.php';

$view = new \App\Models\View();
$dataBase = new \App\Models\DB();

$about = $dataBase->query('SELECT aboutme FROM about');

$view->assign('about', $about);
$view->display(__DIR__ . '/../templates/admin/changeAbout.php');
