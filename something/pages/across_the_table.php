<?php
$title = 'Across the Table';
$description = '';

$rowHeight = 450;
$maxCols = 3;

$gallery = array();
	$gallery[] = array(1024, 1365, 'across_the_table/across_the_table.1.jpg');
	$gallery[] = array(1024, 1280, 'across_the_table/across_the_table.2.jpg');
	$gallery[] = array(1024, 1365, 'across_the_table/across_the_table.3.jpg');
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
		<p>Across the Table / art installation / 2020</p>
	</article>