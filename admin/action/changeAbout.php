<?php
require __DIR__ . '/../../autoload.php';

$admin = new \App\Models\Admin();
$dataBase = new \App\Models\DB();

$admin->changeAboutMe($_POST['aboutText']);

?>
<p>Новый текст установлен!</p>
<hr>
<a href="../changeAbout.php">Изменить текст еще раз</a><br>
<a href="../../index.php">Вернуться на главную</a>
