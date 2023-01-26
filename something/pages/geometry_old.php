<?php
$title = 'Geometry';
$description = '';

$gallery = array();
	$gallery[] = array(1024, 1266, 'geometry/8534.jpg');
	$gallery[] = array(1024, 1273, 'geometry/8762.jpg');
	$gallery[] = array(1024, 1266, 'geometry/8549.jpg');
	$gallery[] = array(1024, 1024, 'geometry/8779.jpg');
	$gallery[] = array(1024, 1024, 'geometry/8789.jpg');
	$gallery[] = array(1024, 1024, 'geometry/8792.jpg');
	$gallery[] = array(1024, 1024, 'geometry/8793.jpg');
	$gallery[] = array(1024, 1255, 'geometry/8771.jpg');
	$gallery[] = array(1024, 1432, 'geometry/8773.jpg');
	$gallery[] = array(1497, 1024, 'geometry/8797.jpg');
	//$gallery[] = array(1443, 1024, 'geometry/8808.jpg');
	$gallery[] = array(1422, 1024, 'geometry/9010.jpg');
	$gallery[] = array(1024, 1024, 'geometry/999.jpg');
	$gallery[] = array(1024, 1024, 'geometry/8722.jpg');
	$gallery[] = array(1024, 1266, 'geometry/998.jpg');
	$gallery[] = array(1024, 1024, 'geometry/8554.jpg');
	$gallery[] = array(1024, 1408, 'geometry/8790.jpg');
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