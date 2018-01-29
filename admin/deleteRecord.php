<?php
include __DIR__ . '/../autoload.php';

$view = new \App\Models\View();
$dataBase = new \App\Models\DB();

$guestBook = $dataBase->query('SELECT * FROM guestbook');

$view->assign('guestBook', $guestBook);
$view->display(__DIR__ . '/../templates/admin/deleteRecord.php');