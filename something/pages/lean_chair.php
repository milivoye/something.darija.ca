<?php
$title = 'Lean Chair';
$description = '';

$rowHeight = 640;
$gallery = array();
	$gallery[] = array(1024, 1301, 'not_for_profit_nor_fame/lean_chair.jpg', 'Lean Chair');
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
		<p>Lean Chair / aluminum and plastic / 2020</p>
	</article>

	<!--
	<aside role="complementary">
	 </aside>
	 -->