<?php
$title = 'Ignorance is Strength';
$description = '';

$rowHeight = 480;
$gallery = array();
	$gallery[] = array(1024, 765, 'ignorance_is_strength/ignorance_is_strength.jpg');
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
        <p>Ignorance is Strength<span style="padding-left:1.25pt;"></span> / red neon lights / 2017</p>
    </article>
    <div style="clear:both;"></div>