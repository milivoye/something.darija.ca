<?php
$title = 'Minimal Consensus';
$description = '';

$rowHeight = 640;
$gallery = array();
$gallery[] = array(750, 1000, 'minimal_consensus/minimal_consensus.jpg');
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
		<p>Minimal Consensus / digital print / 2021<br/><br/>
		SERBIA TO ADMIT AGGRESSION<br/>
		SERBS TO ADMIT GENOCIDE<br/>
		AND TO PAY WAR REPARATION</p>
	</article>
	<div style="clear:both;"></div><?php
