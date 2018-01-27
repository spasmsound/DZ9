<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head profile="http://gmpg.org/xfn/11">

    <title>Главная</title>
	
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
<script type="text/javascript">$('body').removeClass('jsDisabled');</script>

<div id="header" class="clearfix">
	
	<div class="holder clearfix">
	
		<div class="skipLink"><a href="#content" title="Skip to content">Skip to content</a></div>
		
		<div id="title"><span><a href="index.php" title="Wook" rel="home">Spasm</a></span></div>
		
		<ul id="siteNav">
			<li class="selected"><a href="index.php">Главная</a></li>
			<li><a href="gallery.php">Галлерея</a></li>
			<li><a href="guest.php">Гостевая Книга</a></li>
            <li><a href="login.php">Админ-панель</a></li>
			<li class="hasSub">
		</ul>

	</div>
	
</div><!-- #header -->

<div id="wrapper">

	<div id="main" class="clearfix">
        <h2>Обо мне:</h2>

		<p class="intro">
            <?php foreach ($about as $value) {
		    echo $value['aboutme'];
            } ?>
        </p>


        <div class="columns">

            <div class="col">

                <h3>Связь со мной</h3>

                <ul class="socialLinks">
                    <li><a href="#"><span class="twitter"></span> Follow us on Twitter</a></li>
                    <li><a href="#"><span class="facebook"></span> Fan us on Facebook</a></li>
                    <li><a href="#"><span class="rss"></span> Subscribe to our RSS feed</a></li>
                    <li><a href="#"><span class="email"></span> Email us for anything else</a></li>
                </ul>

            </div>

        </div><!-- .columns -->

	<div id="footer">
	
		<p class="copyright">&copy; 2017 SPASM. All Rights Reserved. Забавно</a>.</p>
		
		<ul>
			<li><a href="index.php">Главная</a></li>
			<li><a href="gallery.php">Галлерея</a></li>
			<li><a href="guest.php">Гостевая книга</a></li>
		</ul>
		
	</div><!-- #footer -->
	
</div><!-- #wrapper -->


</body>
</html>