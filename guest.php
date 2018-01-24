<?php
session_start();

function __autoload($class)
{
    require __DIR__ . '/classes/' . $class . '.php';
}


$dataBase = new DB();
$guestBook = $dataBase->query('SELECT id, record FROM guestbook');

$view = new View();
$view->assign('guestBook', $guestBook);
$view->display(__DIR__ . '/templates/guest.php');