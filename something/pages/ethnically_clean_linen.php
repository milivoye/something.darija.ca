<?php
$title = 'Ethnically Clean Linen';
$description = '';

$rowHeight = 480;
$gallery = array();
$gallery[] = array(1080, 1350, 'ethnically_clean_linen/ethnically_clean_linen.jpg', 'Ethnically Clean Linen');
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
		<p>Ethnically Clean Linen / ink on canvas / 2020</p>
	</article>
	<div style="clear:both;"></div>