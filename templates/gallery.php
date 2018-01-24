<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head profile="http://gmpg.org/xfn/11">

    <title>Галлерея</title>
	
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
			<li><a href="index.php">Главная</a></li>
			<li class="selected"><a href="gallery.php">Галлерея</a></li>
			<li><a href="blog.php">Гостевая Книга</a></li>
			<li class="hasSub">
		</ul>
	
	</div>
	
</div><!-- #header -->

<div id="wrapper">

	<div id="main" class="clearfix">

		<h1>Галлерея</h1>
        <ul id="pictures" class="work fullWork clearfix">
            <?php
            foreach($pictures as $picture) { ?>
            <li id="id1" class="films"><a href="image.php?id=<?php echo $picture['id'] ?> " class="gallery" rel="films" title="This is image A"><img src="<?php echo $picture['path']; ?>" alt=""  /></a></li>
            <?php } ?>
        </ul>


		<!--<ul id="pictures" class="work fullWork clearfix">
			<li id="id1" class="films"><a href="" class="gallery video vimeo" rel="films" title="This is image A"><img src="assets/images/temp/big_1.jpg" alt=""  /></a><p>Vimeo Video</p></li>
			<li id="id2" class="films"><a href="" class="gallery video" rel="films" title="This is image B"><img src="/DZ9/assets/images/temp/big_2.jpg" alt="" /></a><p>YouTube Video</p></li>
			<li id="id3" class="films"><a href="" class="gallery" rel="films" title="This is image C"><img src="assets/images/temp/big_3.jpg" alt="" /></a><p>Image</p></li>
			<li id="id4" class="films"><a href="" class="gallery" rel="films" title="This is image D"><img src="assets/images/temp/big_4.jpg" alt="" /></a><p>Image</p></li>
			<li id="id5" class="films"><a href="" class="gallery" rel="films" title="This is image E"><img src="assets/images/temp/big_5.jpg" alt="" /></a><p>Image</p></li>
			<li id="id6" class="films"><a href="" class="gallery" rel="films" title="This is image F"><img src="assets/images/temp/big_6.jpg" alt="" /></a><p>Image</p></li>
			<li id="id7" class="films"><a href="" class="gallery" rel="films" title="This is image G"><img src="assets/images/temp/big_7.jpg" alt="" /></a><p>Image</p></li>
			<li id="id8" class="films"><a href="" class="gallery" rel="films" title="This is image H"><img src="assets/images/temp/big_8.jpg" alt="" /></a><p>Image</p></li>
			<li id="id9" class="films"><a href="" class="gallery" rel="films" title="This is image I"><img src="assets/images/temp/big_9.jpg" alt="" /></a><p>Image</p></li>
			<li id="id10" class="tv"><a href="" class="gallery" rel="tv" title="This is image J"><img src="assets/images/temp/big_10.jpg" alt="" /></a><p>Image</p></li>
			<li id="id11" class="tv"><a href="" class="gallery" rel="tv" title="This is image K"><img src="assets/images/temp/big_11.jpg" alt="" /></a><p>Image</p></li>
			<li id="id12" class="tv"><a href="" class="gallery" rel="tv" title="This is image L"><img src="assets/images/temp/big_12.jpg" alt="" /></a><p>Image</p></li>
			<li id="id13" class="tv"><a href="" class="gallery" rel="tv" title="This is image M"><img src="assets/images/temp/big_13.jpg" alt="" /></a><p>Image</p></li>
			<li id="id14" class="tv"><a href="" class="gallery" rel="tv" title="This is image N"><img src="assets/images/temp/big_14.jpg" alt="" /></a><p>Image</p></li>
			<li id="id15" class="tv"><a href="" class="gallery" rel="tv" title="This is image O"><img src="assets/images/temp/big_15.jpg" alt="" /></a><p>Image</p></li>
		</ul> -->



	</div><!-- #main -->

	<div id="footer">

		<p class="copyright">&copy; 2017 SPASM. All Rights Reserved. Забавно</a>.</p>

		<ul>
			<li><a href="index.php">Главная</a></li>
			<li><a href="gallery.php">Галлерея</a></li>
			<li><a href="blog.php">Гостевая книга</a></li>
		</ul>
		
	</div><!-- #footer -->
	
</div><!-- #wrapper -->


</body>
</html>