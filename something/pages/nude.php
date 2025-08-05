<?php
$title = 'Nude Descending a Staircase';
$description = '';

$rowHeight = 640;
$gallery = array();
	$gallery[] = array(714, 893, 'nude/nude.0.jpg', '');
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
		<p>Nude Descending a Staircase / wood, metal, rubber / 2023</p>
	</article>

	<aside role="complementary"></aside>