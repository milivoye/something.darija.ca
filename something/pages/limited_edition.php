<?php
$title = 'Limited Edition';
$description = '';

$rowHeight = 520;
$gallery = array();
	$gallery[] = array(1091, 1500, 'limited_edition/limited_edition.jpg');
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
        <p><?php echo $title; ?><span style="padding-left:1.25pt;"></span> / gold leaf, faux leather, paper / 2018<br/><br/>
            &ldquo;Limited Edition&rdquo; is an art intervention that binded a German edition of Karl Marx&lsquo;s &ldquo;Das Kapital&rdquo; into faux leather with the Louis Vuitton trademark pattern print.<br/>
            This piece is questioning the juxtaposition of the textual content and the outward presentation, synergy of two fashionable devices of self-elevation, values of goods, goods of values, ideas and concepts, capital and &ldquo;Das Kapital&rdquo;.</p>
    </article>
    <div style="clear:both;"></div>