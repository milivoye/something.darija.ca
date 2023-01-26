<?php
$title = 'I krivi i dužni';
$description = '';

$gallery = array();
	$gallery[] = array(2048, 1365, 'i_krivi_i_duzni/1.jpg', '');
	$gallery[] = array(2048, 1365, 'i_krivi_i_duzni/2.jpg', '');
	$gallery[] = array(2048, 1365, 'i_krivi_i_duzni/3.jpg', '');
	$gallery[] = array(2048, 1365, 'i_krivi_i_duzni/4.jpg', '');
	$gallery[] = array(2048, 1365, 'i_krivi_i_duzni/5.jpg', '');
	$gallery[] = array(2048, 1365, 'i_krivi_i_duzni/6.jpg', '');
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
		<p><i>I KRIVI I DUŽNI</i> on billboards across Belgrade, 2022</p>
		<p>Photo credit: Srðan Veljović</p>
	</article>

	<!--
	<aside role="complementary">
	 </aside>
	 -->