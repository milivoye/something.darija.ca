<?php
$title = 'You Don\'t Have to Be Right';
$description = '';

$rowHeight = 640;
$gallery = array();
	$gallery[] = array(1080, 1350, 'not_for_profit_nor_fame/you_dont_have_to_be_right.jpg', 'You Don\'t Have to Be Right');
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
		<p>You Don't Have to Be Right / acrylic on rubber / 2020</p>
	</article>

	<!--
	<aside role="complementary">
	 </aside>
	 -->