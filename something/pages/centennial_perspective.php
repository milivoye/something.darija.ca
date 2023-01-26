<?php
$title = 'Centennial Perspective';
$description = '';

$rowHeight = 450;
$gallery = array();
	$gallery[] = array(1500, 966, 'centennial_perspective/centennial_perspective.jpg');
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
        <p><?php echo $title; ?><span style="padding-left:1.25pt;"></span> / enamel on metal / 2017<br/><br/>
            This conceptual work refers on famous and controversial ready-made &ldquo;Fountain&rdquo; by M. Duchamp. Coincidentally or not, a hundred years passed before another was found, and a historical perspective with it.</p>
    </article>
    <div style="clear:both;"></div>