<?php
$title = 'i am an anartist';
$description = '';

$rowHeight = 640;
$gallery = array();
	$gallery[] = array(941, 1536, 'i_am_an_anartist/i_am_an_anartist.full.jpg');
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
        <p>i am an anartist<span style="padding-left:1.25pt;"></span> / art presence / 2017<br/><br/>
            This is, obviously, a conceptual mistake that stands between being an artist and being an anarchist. This mistake implies a deeper relation between these two ideas. It is a mistake, but as it is pointing to this relation and stands as a signifier, it requires a room in our conceptual space to accommodate the meaning.</p>
    </article>
    <div style="clear:both;"></div>

    <?php /*
    <aside role="complementary">
        <h3>Exhibitions</h3>
        <p>This piece was exhibited in Institut für Alles Mögliche in Berlin, Ostavinska gallery in Belgrade, and Odron gallery in Sarajevo.</p>
        <p><div class="images">
            <!--img src="/img/i_am_an_anartist/i_am_an_anartist.berlin.1.jpg" data-w="1024" data-h="655" alt="Institut für Alles Mögliche, Berlin" /-->
            <img src="/img/i_am_an_anartist/i_am_an_anartist.berlin.2.jpg" data-w="1024" data-h="655" alt="Institut für Alles Mögliche, Berlin" />
            <!--img src="/img/i_am_an_anartist/i_am_an_anartist.ostavinska.1.jpg" data-w="1024" data-h="564" alt="Ostavinska gallery, Belgrade" /-->
            <img src="/img/i_am_an_anartist/i_am_an_anartist.ostavinska.2.jpg" data-w="1024" data-h="635" alt="Ostavinska gallery, Belgrade" />
            <!--img src="/img/i_am_an_anartist/i_am_an_anartist.ostavinska.3.jpg" data-w="1024" data-h="643" alt="Ostavinska gallery, Belgrade" /-->
            <img src="/img/i_am_an_anartist/i_am_an_anartist.odron.1.jpg" data-w="1024" data-h="631" alt="Odron gallery, Sarajevo" />
            <img src="/img/i_am_an_anartist/i_am_an_anartist.odron.2.jpg" data-w="1024" data-h="623" alt="Odron gallery, Sarajevo" />
        </div></p>
    </aside>
    */