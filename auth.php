<?php
session_start();

require __DIR__ . '/autoload.php';

$auth = new \App\Models\Authorization();

if (!empty($_POST)) {
    if ($auth->checkPassword($_POST['username'], $_POST['password'])) {
        $_SESSION['username'] = $_POST['username'];
        header('Location: admin/index.php');
        exit;
    }else {
        header('Location: login.php');
        exit;
    }
}else die ('Пусто');