<?php
session_start();

require __DIR__ . '/autoload.php';

$dataBase = new \App\Models\DB();
$guestBook = $dataBase->query('SELECT id, record FROM guestbook');

$view = new \App\Models\View();
$view->assign('guestBook', $guestBook);
$view->display(__DIR__ . '/templates/guest.php');