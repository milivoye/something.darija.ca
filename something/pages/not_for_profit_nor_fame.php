<?php
$title = 'Not for Profit nor Fame';
$description = '';

$gallery = array();
	$gallery[] = array(1080, 1306, 'not_for_profit_nor_fame/i_do_not.jpg', 'I Do Not...');
	$gallery[] = array(1080, 1350, 'not_for_profit_nor_fame/you_dont_need_to_be_right.jpg', 'You Don\'t Need to Be Right');
	//$gallery[] = array(1080, 1083, 'not_for_profit_nor_fame/are_you_present.jpg', 'Are You Present');
	$gallery[] = array(1024, 1301, 'not_for_profit_nor_fame/lean_chair.jpg', 'Lean Chair');
	//$gallery[] = array(1024, 1280, 'not_for_profit_nor_fame/pain.jpg', 'Pain');
	$gallery[] = array(1024, 1301, 'not_for_profit_nor_fame/safety_first.jpg', 'In Advance of the Broken Leg');
	$gallery[] = array(1024, 1024, 'not_for_profit_nor_fame/two_perspectives.jpg', 'Two Perspectives');
	//$gallery[] = array(1024, 1301, 'not_for_profit_nor_fame/all_for_one.jpg', 'All for One');
	$gallery[] = array(1024, 1280, 'not_for_profit_nor_fame/tailored_to_the_audience.jpg', 'Tailored to the Audience');
	$gallery[] = array(1080, 1080, 'not_for_profit_nor_fame/tools_of_color.jpg', 'Tools of Color');
	//$gallery[] = array(1080, 1351, 'not_for_profit_nor_fame/broken_expectations.1.jpg', 'Broken Expectations');
	//$gallery[] = array(1080, 1356, 'not_for_profit_nor_fame/guilty_by_extention.jpg', 'Guilty by Extention');
	//$gallery[] = array(1080, 813, 'not_for_profit_nor_fame/trophy.jpg', 'Trophy');
	$gallery[] = array(1440, 1800, 'not_for_profit_nor_fame/my_way.jpg', 'My Way');
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