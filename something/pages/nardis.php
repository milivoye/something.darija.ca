<?php
$title = 'Nardis';
$description = '';

$gallery = array();
	$gallery[] = array(2048, 1365, 'nardis/01.jpg');
	$gallery[] = array(2048, 1536, 'nardis/02.jpg');
	$gallery[] = array(2048, 1536, 'nardis/03.jpg');
	$gallery[] = array(800, 600, 'nardis/04.jpg');
	//$gallery[] = array(400, 400, 'nardis/05.jpg');
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
	    <p></p>
	</article>
    
   <aside role="complementary">		
		<p>Before and after</p>
    	<p><div class="images"> 
		   <img src="/img/nardis/ex.1.jpg" data-w="1024" data-h="683" alt="" /> 
		   <iframe width="213" height="160" src="https://www.youtube.com/embed/oxzeDpBvxv4?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen title="Bill Evans Trio / Nardis (1961)"></iframe>
			</div></p>	
	</aside>