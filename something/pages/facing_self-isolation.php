<?php
$title = 'Facing Self-Isolation';
$description = '';

$rowHeight = 640;
$gallery = array();
	$gallery[] = array(1488, 2000, 'facing_self-isolation/m3.jpg');
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
        <p>Facing Self-Isolation / 2020</p>

    </article>
    <div style="clear:both;"></div>