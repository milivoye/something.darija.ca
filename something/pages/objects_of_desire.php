<?php
$title = 'Objects of Desire';
$description = '';

$gallery = array();
$gallery[] = array(1080, 1306, 'objects_of_desire/i_do_not.jpg', 'I Do Not...');
$gallery[] = array(1080, 1350, 'objects_of_desire/you_dont_need_to_be_right.jpg', 'You Don\'t Need to Be Right');
$gallery[] = array(1080, 1350, 'objects_of_desire/oh_nothing.1.jpg', 'Oh, Nothing!');
$gallery[] = array(1080, 1350, 'objects_of_desire/dying_to_have_fun.jpg', 'Dying to Have Fun');
$gallery[] = array(1080, 1083, 'objects_of_desire/are_you_present.jpg', 'Are You Present');
$gallery[] = array(1080, 1080, 'objects_of_desire/as_is.jpg', 'As Is');
$gallery[] = array(1080, 1350, 'objects_of_desire/slow_eating_animals.jpg', 'Slow Eating Animals');
$gallery[] = array(1080, 1080, 'objects_of_desire/slow_eating_animals.1.jpg', 'Slow Eating Animals');
$gallery[] = array(1080, 1080, 'objects_of_desire/would_you_be_my.jpg', 'Would You Be My');
#$gallery[] = array(810, 1080, 'objects_of_desire/wake_me_up.jpg', 'Wake Me Up in Yugoslavia');
#$gallery[] = array(1080, 1350, 'objects_of_desire/wake_me_up.1.jpg', 'Wake Me Up in Yugoslavia');
#$gallery[] = array(800, 800, 'statements/msu.jpg', 'Wake Me Up in Yugoslavia');
$gallery[] = array(1080, 1350, 'objects_of_desire/thou_shalt_not_overconsume.jpg', 'Thou Shalt Not Overconsume');
$gallery[] = array(697, 949, 'objects_of_desire/shopping_macht_frei.jpg', 'Shopping Macht Frei');
$gallery[] = array(1080, 1080, 'objects_of_desire/occams_razor.jpg', 'Occam\'s Razor');
$gallery[] = array(1080, 1080, 'objects_of_desire/history_off.jpg', 'History Off');
$gallery[] = array(2084, 899, 'objects_of_desire/lova_is_all_you_need.jpg', 'Lova Is All You Need');
$gallery[] = array(1024, 765, 'objects_of_desire/ignorance_is_strength.jpg', 'Ignorance is Strength');
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