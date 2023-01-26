<?php
$title = 'Wake Me Up in Yugoslavia';
$description = '';

//$rowHeight = 560;
$rowHeight = 640;
$gallery = array();
	//$gallery[] = array(864, 1152, 'wake_me_up/wake_me_up.jpg');
	$gallery[] = array(720, 539, 'i_miss_yu/venice_pavilion.jpg', '');
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

    <!--article role="article" class="article_single">
        <p>Wake Me Up in Yugoslavia<span style="padding-left:1.25pt;"></span> / print / 2019</p>
        <p></p>
        <p>Wake Me Up je tekstualni rad koji govori o prekidu u životima generacije poremećene nasilnim raspadom bivše Jugoslavije i zjapećoj praznini ostaloj u zajedničkom (konceptualnom) prostoru, manje ili više prikrivene tricama svakodnevice…<br />
            Ovaj rad je u nastajanju, intervencije se nastavljaju…</p>
        <p></p>
        <p>Wake Me Up is a text based art that speaks about generations whose lives were disrupted by violent breakup of former Yugoslavia, and a vast emptiness left in the collective (conceptual) space, poorly concealed with daily trivialities…<br />
            This work is an ongoing project…</p>
    </article-->
	<article role="article" class="article_single">
		<p>Wake Me Up in Yugoslavia / art intervention / 2019<br/>
			The Venice Biennale, Yugoslav Pavilion
		</p>
	</article>

	<div style="clear:both;"></div>
    