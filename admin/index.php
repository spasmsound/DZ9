<?php
session_start();

require __DIR__ . '/autoload.php';

$auth = new Authorization();

echo 'Привет, я одменка, а ты ' . $auth->getCurrentUser();
