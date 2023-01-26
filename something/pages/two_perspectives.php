<?php
$title = 'Two Perspectives';
$description = '';

$rowHeight = 640;
$gallery = array();
	//$gallery[] = array(1024, 1024, 'not_for_profit_nor_fame/two_perspectives.jpg', 'Two Perspectives');
	$gallery[] = array(1024, 1280, 'not_for_profit_nor_fame/two_perspectives.1.jpg', 'Two Perspectives');
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
		<p>Two Perspectives / aluminum, canvas, wood / 2020</p>
	</article>

	<!--
	<aside role="complementary">
	 </aside>
	 -->