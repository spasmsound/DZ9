<?php
session_start();

function __autoload($className)
{
    require __DIR__ . '/classes/' . $className . '.php';
}

$auth = new Authorization();

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