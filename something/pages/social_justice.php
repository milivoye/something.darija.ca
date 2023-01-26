<?php
$title = 'Social Justice';
$description = '';

$rowHeight = 560;
$gallery = array();
#$gallery[] = array(1440, 1800, 'social_justice/social_justice.jpg');
$gallery[] = array(1440, 810, 'social_justice/815.jpg', 'Calgary, The New Gallery, February 27, 2020, 18:15h');
$gallery[] = array(1440, 810, 'social_justice/816.jpg', 'Calgary, The New Gallery, February 27, 2020, 18:16h');
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
		<p><i><?php echo $title; ?></i><span style="padding-left:1.25pt;"></span> / art performance / 2020<br/><br/>
			Bosnia during the 90's...<br />
			Food was delivered to the camp to be shared among refugees. My friend went to get portions for his family, but when he came back he was surprised with the outcome - there was no meat ih his bowl, nor any other. He was 100% sure there’s a piece of meat in each of them, and now there is none!? He rushed back to complain, and he saw again that everyone is getting a big chunk of meat. Then he took a closer look and realized that the piece of meat is somehow attached to the ladle, so everyone’s “getting” the same piece, and he realized he’d been treated equally&hellip;</p>
		<p>Right before pandemic (social distancing) started I had my SOCIAL JUSTICE performance executed at The New Gallery as a part of TO THE AWE.<br/>
			Huge thanks to everyone who participated, and a special thanks to Zoë and Vlatka who successfully delivered it to the audience.</p>
	</article>

	<!--aside role="complementary">
		<p>...</p>
	</aside-->
	<!--div style="clear:both;"></div-->