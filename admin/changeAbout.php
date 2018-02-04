<?php
require __DIR__ . '/../autoload.php';

$view = new \App\Models\View();
$dataBase = new \App\Models\DB();
$admin = new \App\Models\Admin();

$about = $dataBase->query('SELECT aboutme FROM about');

$view->assign('about', $about);
$view->display(__DIR__ . '/../templates/admin/changeAbout.php');

if (!empty($_POST['aboutText'])) {
    $admin->changeAboutMe($_POST['aboutText']);
    header('Location: changeAbout.php');
    exit;
}
?>
<hr>
<a href="../index.php">Вернуться на главную</a>
