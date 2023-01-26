<?php
$title = 'Oh, Nothing!';
$description = '';

$gallery = array();
	$gallery[] = array(1024, 1280, 'oh_nothing/01.jpg', '');
	$gallery[] = array(1024, 1280, 'oh_nothing/02.jpg', '');
	$gallery[] = array(1024, 1280, 'oh_nothing/03.jpg', '');
	$gallery[] = array(1024, 1280, 'oh_nothing/04.jpg', '');
	$gallery[] = array(1024, 1365, 'oh_nothing/05.jpg', '');
	$gallery[] = array(1024, 1365, 'oh_nothing/06.jpg', '');
	$gallery[] = array(1024, 1365, 'oh_nothing/07.jpg', '');
	$gallery[] = array(1024, 1365, 'oh_nothing/08.jpg', '');
	$gallery[] = array(1024, 1365, 'oh_nothing/09.jpg', '');
	$gallery[] = array(1024, 1365, 'oh_nothing/10.jpg', '');
	$gallery[] = array(819, 1024, 'oh_nothing/13.jpg', '');
	$gallery[] = array(768, 1024, 'oh_nothing/14.jpg', '');
	$gallery[] = array(768, 1024, 'oh_nothing/15.jpg', '');
	$gallery[] = array(768, 1024, 'oh_nothing/16.jpg', '');
	$gallery[] = array(1080, 810, 'oh_nothing/11.jpg', '');
	$gallery[] = array(1080, 810, 'oh_nothing/12.jpg', '');
	$gallery[] = array(1024, 1365, 'oh_nothing/17.jpg', '');
	$gallery[] = array(1024, 1365, 'oh_nothing/18.jpg', '');
	$gallery[] = array(1024, 1280, 'oh_nothing/19.jpg', '');
	$gallery[] = array(1024, 1280, 'oh_nothing/20.jpg', '');
	$gallery[] = array(1024, 1024, 'oh_nothing/21.jpg', '');
	$gallery[] = array(1024, 1024, 'oh_nothing/22.jpg', '');
	$gallery[] = array(732, 976, 'oh_nothing/23.jpg', '');
	$gallery[] = array(1024, 1365, 'oh_nothing/24.jpg', '');
	$gallery[] = array(1024, 1365, 'oh_nothing/25.jpg', '');
	$gallery[] = array(1024, 1365, 'oh_nothing/26.jpg', '');
	$gallery[] = array(1024, 1365, 'oh_nothing/27.jpg', '');
	$gallery[] = array(1024, 1365, 'oh_nothing/28.jpg', '');
?>
<?php include $_SERVER['DOCUMENT_ROOT'] . "/inc/_header.php"; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . "/inc/_navigation.php"; ?>

<main role="main">

	<header role="banner">
		<h1><?php echo str_replace(' ', '&nbsp;', $title); ?></h1>
		<!--h2>Podnaslov</h2-->
	</header>

	<section id="gallery">
		<?php echo writeGalleryHTML($gallery); ?>
	</section>


	<article role="article">
		<p><i>OH, NOTHING!</i> is a series of works that came out as a product of quarantine and isolation due to the COVID-19 pandemic.<br/>
			As all the public life abruptly came to a standstill, and all of the important issues of yesterday gave way to a single one, I started questioning the mechanisms of communication, the media and the messages.</p>
		<p>As more and more companies were getting out of business, I started discovering empty billboards around the city. Whatever was advertised on them was suddenly no more.<br/>
			That was an invitation for me, and I took the opportunity and started putting my non-message on those large blank billboards.</p>
	</article>

	<!--
	<aside role="complementary">
	 </aside>
	 -->