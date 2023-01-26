<?php
$title = 'In Advance of the Broken Leg';
$description = '';

$rowHeight = 640;
$gallery = array();
	#$gallery[] = array(1024, 1301, 'not_for_profit_nor_fame/safety_first.jpg', 'In Advance of the Broken Leg');
	$gallery[] = array(1440, 1800, 'in_advance_of_the_broken_leg/in_advance_of_the_broken_leg.jpg', 'In Advance of the Broken Leg');
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
		<p>In Advance of the Broken Leg / wood, steel, enamel / 2019</p>
	</article>

	<!--
	<aside role="complementary">
	 </aside>
	 -->
