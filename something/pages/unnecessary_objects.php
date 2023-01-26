<?php
$title = 'Unnecessary Objects';
$description = '';

$gallery = array();
	$gallery[] = array(1080, 856, 'unnecessary_objects/two_perspectives.jpg', 'Two Perspectives');
	$gallery[] = array(1080, 1080, 'unnecessary_objects/tools_of_color.jpg', 'Tools of Color');
	$gallery[] = array(1080, 1350, 'unnecessary_objects/well_adjusted.jpg', 'Well Adjusted');
	$gallery[] = array(1080, 1351, 'unnecessary_objects/broken_expectations.1.jpg', 'Broken Expectations');
	$gallery[] = array(1080, 1356, 'unnecessary_objects/guilty_by_extention.jpg', 'Guilty by Extention');
	$gallery[] = array(1080, 1350, 'unnecessary_objects/safety_first.jpg', 'In Advance of the Broken Leg');
	$gallery[] = array(1080, 817, 'unnecessary_objects/support.jpg', 'Support');
	$gallery[] = array(1080, 813, 'unnecessary_objects/trophy.jpg', 'Trophy');
	$gallery[] = array(1080, 1350, 'unnecessary_objects/holding.jpg', 'Holding');
	$gallery[] = array(1080, 840, 'unnecessary_objects/couple.jpg', 'Couple');
	$gallery[] = array(802, 802, 'unnecessary_objects/bah-na-nah.jpg', 'Bah-na-nah');
	$gallery[] = array(1080, 1311, 'unnecessary_objects/middle.jpg', 'Middle');
	$gallery[] = array(1080, 1350, 'unnecessary_objects/inner_light.jpg', 'Inner Light');
	$gallery[] = array(1073, 1073, 'unnecessary_objects/portrait.jpg', 'Portrait');
	$gallery[] = array(732, 900, 'unnecessary_objects/comedian.jpg', 'Comedian');
	$gallery[] = array(1440, 1800, 'unnecessary_objects/my_way.jpg', 'My Way');
	$gallery[] = array(720, 1080, 'unnecessary_objects/hooked.jpg', 'Hooked');
	$gallery[] = array(751, 1080, 'unnecessary_objects/straight.jpg', 'Straight');
	$gallery[] = array(973, 973, 'unnecessary_objects/jozhas.jpg', 'Jozha\'s Pen');
	$gallery[] = array(711, 1008, 'unnecessary_objects/suits_me_well.jpg', 'Suits Me Well');
	$gallery[] = array(1190, 766, 'unnecessary_objects/blue_period.jpg');
	$gallery[] = array(1080, 1080, 'unnecessary_objects/still_life.jpg', 'Still Life');
	$gallery[] = array(1024, 1280, 'unnecessary_objects/eppur_si_muove.jpg', 'Eppur si Muove');
	$gallery[] = array(1024, 1024, 'unnecessary_objects/pieta.jpg', 'Pieta');
	$gallery[] = array(1024, 1280, 'unnecessary_objects/as_is.jpg', 'As Is');
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


	<article role="article">
		<!--p>Text.</p-->
	</article>

	<!--
	<aside role="complementary">
	 </aside>
	 -->