<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head profile="http://gmpg.org/xfn/11">

    <title>Гостевая книга</title>
	
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">

	
	<link rel="stylesheet" type="text/css" href="assets/styles/reset.css">
	<link rel="stylesheet" type="text/css" href="assets/styles/clearfix.css">
	<link rel="stylesheet" type="text/css" href="assets/styles/jquery.fancybox-1.3.1.css" media="screen">
	<link rel="stylesheet" type="text/css" href="assets/styles/nivo-slider.css" media="screen">
	<link rel="stylesheet" type="text/css" href="assets/styles/base.css">
	<link rel="stylesheet" type="text/css" href="assets/styles/dark.css">
	<!--[if IE 8]>
    <link rel="stylesheet" type="text/css" href="assets/styles/style_ie8.css"><![endif]-->
	<!--[if IE 7]>
    <link rel="stylesheet" type="text/css" href="assets/styles/style_ie7.css"><![endif]-->
	
</head>

<body class="jsDisabled">

<div id="header" class="clearfix">
	
	<div class="holder clearfix">
	
		<div class="skipLink"><a href="#content" title="Skip to content">Skip to content</a></div>
		
		<div id="title"><span><a href="index.php" title="Wook" rel="home">Spasm</a></span></div>
		
		<ul id="siteNav">
			<li><a href="index.php">Главная</a></li>
			<li><a href="gallery.php">Галлерея</a></li>
			<li class="selected"><a href="guest.php">Гостевая Книга</a></li>
            <li><a href="admin/menu.php">Админ-панель</a></li>
			<li class="hasSub">
		</ul>

	</div>
		
</div><!-- #header -->

<div id="wrapper">

	<h1>Гостевая книга</h1>
	<div id="main" class="clearfix">
        <?php foreach ($guestBook as $record) { ?>
            <article>
                <?php echo $record['record']; ?>
                <hr>
            </article>
       <?php } ?>

        <form name="comment" action="addRecord.php" method="post" id="comment">
            <label>Комментарий:</label>
            <br>
            <textarea name="text_comment" cols="30" rows="10"></textarea><br><br>
            <button type="submit" form="comment" value="Submit">Отправить</button>
        </form>
    </div>

	<div id="footer">
	
		<p class="copyright">&copy; 2017 SPASM. All Rights Reserved. Забавно.</p>
		
		<ul>
			<li><a href="index.php">Главная</a></li>
			<li><a href="gallery.php">Галлерея</a></li>
			<li><a href="guest.php">Гостевая книга</a></li>
		</ul>
		
	</div><!-- #footer -->
	
</div><!-- #wrapper -->

</body>
</html>