<?php
$title = 'Evidence of Paint';
$description = '';

$rowHeight = 450;
$maxCols = 2;

$gallery = array();
$gallery[] = array(960, 1280, 'evidence_of_paint/evidence_of_paint.0.jpg');
$gallery[] = array(960, 1280, 'evidence_of_paint/evidence_of_paint.1.jpg');
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
        <p>Evidence of Paint / digital photography / 2013</p>
    </article>