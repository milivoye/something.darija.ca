<?php
$title = 'My Way';
$description = '';

$rowHeight = 640;
$gallery = array();
	//$gallery[] = array(1440, 1800, 'my_way/my_way.jpg');
	//$gallery[] = array(1440, 1800, 'not_for_profit_nor_fame/my_way.jpg', 'My Way');
	$gallery[] = array(1638, 2048, 'my_way/my_way.1.jpg');
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
        <p><?php echo $title; ?><span style="padding-left:1.25pt;"></span> / wood, steel, acrylic / 2020</p>
    </article>
    <div style="clear:both;"></div>