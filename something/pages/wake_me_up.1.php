<?php
$title = 'I Miss YU';
$description = '';

$gallery = array();
	$gallery[] = array(810, 1080, 'objects_of_desire/wake_me_up.jpg', '');
	//$gallery[] = array(1080, 1350, 'objects_of_desire/wake_me_up.1.jpg', '');
	$gallery[] = array(800, 800, 'statements/msu.jpg', '');
	$gallery[] = array(819, 1024, 'i_miss_yu/more_canada.jpg', '');
	$gallery[] = array(819, 1024, 'i_miss_yu/map_book.jpg', '');
	//$gallery[] = array(819, 1024, 'i_miss_yu/i_miss_yu.jpg', '');
	$gallery[] = array(1024, 683, 'i_miss_yu/station.jpg', '');
	$gallery[] = array(720, 539, 'i_miss_yu/venice_pavilion.jpg', '');
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
		<p>&nbsp;</p>
	</article>

	<!--
	<aside role="complementary">
	 </aside>
	 -->