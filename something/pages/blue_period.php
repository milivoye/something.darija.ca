<?php
$title = 'Blue Period';
$description = '';

$rowHeight = 480;
$gallery = array();
	$gallery[] = array(1190, 766, 'blue_period/blue_period.jpg');
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
        <p>Blue Period / digital photography / 2018</p>
    </article>
    <div style="clear:both;"></div>