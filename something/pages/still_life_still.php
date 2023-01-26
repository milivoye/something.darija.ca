<?php
$title = 'Still Life Still';
$description = '';

$gallery = array();
	$gallery[] = array(1024, 771, 'still_life_still/red.jpg');
    $gallery[] = array(775, 1024, 'still_life_still/gold.jpg');
    $gallery[] = array(752, 1024, 'still_life_still/team_work.jpg', 'Team Work');
    $gallery[] = array(704, 1024, 'still_life_still/piano.jpg');
    $gallery[] = array(768, 1024, 'still_life_still/hammer.0.jpg');
    $gallery[] = array(768, 1024, 'still_life_still/hammer.1.jpg');
    $gallery[] = array(768, 1024, 'still_life_still/gilded_age.0.jpg', 'Gilded Age');
    $gallery[] = array(768, 1024, 'still_life_still/gilded_age.1.jpg', 'Gilded Age');
    $gallery[] = array(768, 1024, 'still_life_still/percent.jpg');
    $gallery[] = array(800, 800, 'still_life_still/men_ladies.jpg');
    $gallery[] = array(1024, 822, 'still_life_still/walk.jpg');
    $gallery[] = array(1024, 1024, 'still_life_still/white_noise.jpg', 'White Noise');
    $gallery[] = array(800, 800, 'still_life_still/apples.jpg');
    $gallery[] = array(800, 800, 'still_life_still/iron.jpg');
    $gallery[] = array(800, 800, 'still_life_still/geese.jpg');
    $gallery[] = array(800, 800, 'still_life_still/hangers.jpg');
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
		<div class="quote">
	    	<h3>&quot;There is no such thing as good painting about nothing.&quot;</h3>
	    	<h4 class="signature">Mark Rothko</h4>
	    </div>
	    <p>I think I finally got there with these paintings. They are very different from my previous work that has been more socially or politically engaged and shaped by the tensions I brought with me from my &quot;old country&quot;. These paintings are bringing me other satisfactions.</p>
	    <p>I never know where is it going to get me, and that makes me happy.</p>
	</article>
    
   <!--
   <aside role="complementary">
	</aside>
	-->