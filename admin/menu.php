<?php
session_start();

require __DIR__ . '/../autoload.php';


if (!empty($_SESSION['username'])) {
    $auth = new \App\Models\Authorization();
    $view = new \App\Models\View();

    $view->assign('auth', $auth);
    $view->display(__DIR__ . '/../templates/admin/index.php');
}else {
    header('Location: ../login.php');
    exit;
}