<?php
$title = 'Lova is All You Need';
$description = '';

$rowHeight = 340;
$gallery = array();
$gallery[] = array(2084, 899, 'lova_is_all_you_need/lova_is_all_you_need.jpg');
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
        <p>LOVA IS ALL YOU NEED<span style="padding-left:1.25pt;"></span> / art intervention / 2020</p>
    </article>
    <div style="clear:both;"></div>