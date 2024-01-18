<?php
$title = 'God Bless';
$description = '';

$gallery = array();
	$gallery[] = array(2040, 1148, 'god_bless_america/01.jpg', '');
	$gallery[] = array(2040, 1148, 'god_bless_america/02.jpg', '');
	$gallery[] = array(1602, 2002, 'god_bless_america/03.jpg', '');
	$gallery[] = array(2304, 1728, 'god_bless_america/04.jpg', '');
	$gallery[] = array(1363, 1704, 'god_bless_america/05.jpg', '');
	$gallery[] = array(2040, 1148, 'god_bless_america/06.jpg', '');
	//$gallery[] = array(2040, 1148, 'god_bless_america/07.jpg', '');
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


	<article role="article" class="article_single">
		<p>God Bless / art installation / 2019</p>
	</article>

	<!--
	<aside role="complementary">
	 </aside>
	 -->