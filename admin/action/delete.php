<?php
require __DIR__ . '/../../autoload.php';

$dataBase = new \App\Models\DB();
$action = new \App\Models\Admin();

$array = array_flip($_POST);
$action->deleteRecord($array['Удалить']);

header('Location: ../deleteRecord.php ');