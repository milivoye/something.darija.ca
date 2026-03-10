<?php
$title = 'Housecoat / Kućna haljina';
$description = '';

$gallery = array();
	$gallery[] = array(1080, 1350, 'housecoat/hc1.jpg', '');
	$gallery[] = array(1080, 1440, 'housecoat/hc2.jpg', '');
	$gallery[] = array(1080, 1440, 'housecoat/hc3.jpg', '');
	$gallery[] = array(1080, 1440, 'housecoat/hc4.jpg', '');
	$gallery[] = array(1080, 1440, 'housecoat/hc5.jpg', '');
	$gallery[] = array(1080, 1440, 'housecoat/hc6.jpg', '');
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


	<article role="article">
		<p>7 days. 7 uniforms. 1 ongoing struggle.<br/>
        <i>Kućna haljina / Housecoat</i> is a series of seven blue workers&rsquo; smocks, repurposed through silkscreen printing during my residency in Amsterdam.<br/>
			From the school aprons of my childhood to the shared uniforms of Marxism classes, the blue smock was always a symbol of both protection and social equality. By printing &ldquo;KUĆNA HALJINA&rdquo; on them, I am shifting the narrative from the factory floor to the home.<br/>
		    Because labor doesn’t end at the doorstep. The boundary between public and private is an illusion.<br/>
			This is an homage to the invisible, 24/7 feminist struggle that never punches the clock.</p>
	</article>

	<!--
	<aside role="complementary">
	 </aside>
	 -->