<?php
$title = 'Warning';
$description = '';

$rowHeight = 640;
$gallery = array();
	$gallery[] = array(1024, 1600, 'warning/matrix_ost.jpg', '');
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
		<p>Warning / acrylic on a military blanket 1.5x2.2m / 2021<br/>
		Museum Kesselhaus Herzberge, Berlin (2025)</p>
	</article>

	<!--aside role="complementary">
		<p style="max-width:1135px">XXX.</p>
	</aside-->