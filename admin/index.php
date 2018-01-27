<?php
session_start();

function __autoload($class) {
    require __DIR__ . '/../classes/' . $class . '.php';
}

$auth = new Authorization();

echo 'Привет, я одменка, а ты мудак-' . $auth->getCurrentUser();
