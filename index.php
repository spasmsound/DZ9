<?php
session_start();

require __DIR__ . '/autoload.php';

$dataBase = new \App\Models\DB();
$about = $dataBase->query('SELECT aboutme FROM about');

$view = new \App\Models\View();
$view->assign('about', $about);
$view->display(__DIR__ . '/templates/index.php');