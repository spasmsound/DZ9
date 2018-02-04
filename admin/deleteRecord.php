<?php
include __DIR__ . '/../autoload.php';

$view = new \App\Models\View();
$dataBase = new \App\Models\DB();
$admin = new \App\Models\Admin();

$guestBook = $dataBase->query('SELECT * FROM guestbook');

$view->assign('guestBook', $guestBook);
$view->display(__DIR__ . '/../templates/admin/deleteRecord.php');

if (!empty ($_GET)) {
    $array = array_flip($_GET);
    $admin->deleteRecord($array['Удалить']);
    header('Location: deleteRecord.php');
    exit;
}
