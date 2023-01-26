<?php
$title = 'Silence';
$description = '';


$rowHeight = 560;
$gallery = array();
	$gallery[] = array(1024, 1024, 'silence/sbw0.jpg');
	/*
	$gallery[] = array(1984, 1012, 'silence/sbw2.jpg');
	$gallery[] = array(1984, 1012, 'silence/sbw3.jpg');
	$gallery[] = array(1984, 1012, 'silence/sbw5.jpg');
	$gallery[] = array(1984, 1012, 'silence/sbw1.jpg');
	$gallery[] = array(1984, 1012, 'silence/sbw9.jpg');
	$gallery[] = array(1984, 1012, 'silence/sbw6.jpg');
	*/
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
        <p>Silence / felt, thread, wood / 2007<br/><br/>
            This is a &ldquo;social sculpture&rdquo;, as J. Beuys once said, that will always hold potential for sound. It&rsquo;s an object, a musical instrument wrapped in a military felt blanket. Gusle is much more than a musical instrument - it&rsquo;s a gateway to collective mythologized past for all Balkanians. It&rsquo;s not simply a tune that you play on it - it&rsquo;s a sound of melancholy that penetrate deep into a soul of the listener bringing sorrow and anger, a scary melody that inspires revenge. Gusle speaks with sacred authority that can not be questioned.<br/><br/>
            Gusle gave a soundtrack to the war I&rsquo;ve experienced too. They called to arms, spoke of historical victimhood and oppression, and demanded blood of the villains as a payback. I took my grandfather&rsquo;s gusle and I wrapped them in a military blanket to silence them and put them to rest; to close that portal to a bloody warring past, and point toward future in which the war cries that scared lives of every generation in that part of the world will be finally muted.</p>
    </article>
    <div style="clear:both;"></div>

    <aside role="complementary">
	    <div class="images">
		    <img src="/img/silence/sbw1.jpg" data-w="1984" data-h="1012" alt="" />
		    <img src="/img/silence/sbw2.jpg" data-w="1984" data-h="1012" alt="" />
		    <img src="/img/silence/sbw9.jpg" data-w="1984" data-h="1012" alt="" />
		    <img src="/img/silence/sbw6.jpg" data-w="1984" data-h="1012" alt="" />
	    </div>
    </aside>
