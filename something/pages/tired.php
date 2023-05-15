<?php
$title = 'Tired';
$description = '';

$rowHeight = 640;
$gallery = array();
	//$gallery[] = array(1530, 2048, 'we_are_tired/we_are_tired.jpg', '');
	$gallery[] = array(1920, 1080, 'tired/msuv.jpg', '');
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
		<!--p>We are Tired / acrylic on carpet 2x3m / 2021</p-->
		<p>Tired / acrylic on carpet 2.4x3.1m / 2021<br/>
		Museum of Contemporary Art of Vojvodina (2022)</p>
	</article>

	<!--
	<aside role="complementary">
	 </aside>
	 -->