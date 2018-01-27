<?php

include __DIR__ . '/autoload.php';

$dataBase = new \App\Models\DB();
$dataBase->execute('INSERT guestbook (record) VALUES (\'' . $_POST['text_comment'] . '\')');
header('Location: guest.php');