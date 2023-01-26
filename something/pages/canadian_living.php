<?php
$title = 'Canadian Living';
$description = '';

$rowHeight = 640;
$gallery = array();
	$gallery[] = array(1172, 1601, 'canadian_living/canadian_living.jpg');
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
        <p>Canadian Living / art intervention / 2012</p>
    </article>
    <div style="clear:both;"></div>