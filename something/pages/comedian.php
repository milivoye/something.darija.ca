<?php
$title = 'Comedian';
$description = '';

$rowHeight = 560;
$gallery = array();
	$gallery[] = array(732, 900, 'comedian/comedian.jpg');
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
		<p>Comedian<span style="padding-left:1.25pt;"></span> / art installation / 2020</p>
	</article>