<?php
$title = 'Let\'s Get Lost';
$description = '';

$rowHeight = 640;
$gallery = array();
	$gallery[] = array(1024, 1280, 'lets_get_lost/lets_get_lost.jpg', 'Let\'s Get Lost');
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
		<p>Let's Get Lost / concrete, plastic, aluminum / 2021</p>
	</article>

	<!--
	<aside role="complementary">
	 </aside>
	 -->
