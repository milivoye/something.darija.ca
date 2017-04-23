<?php
$title = 'The Psychology of Pigs';
$description = '';

$gallery = array();
	$gallery[] = array(1024, 1448, 'pigs/progress.jpg', 'Progress');
	$gallery[] = array(1024, 1389, 'pigs/court_poet.jpg', 'Court Poet');
	$gallery[] = array(1024, 1102, 'pigs/VIP.jpg', 'V.I.P.');
	$gallery[] = array(1024, 1267, 'pigs/yuppie.jpg', 'Yuppie');
	$gallery[] = array(1327, 1024, 'pigs/free_shares.jpg', 'Free Shares');
	$gallery[] = array(1024, 1336, 'pigs/pahomije.jpg', 'Pahomije');
	$gallery[] = array(1195, 1024, 'pigs/mladic_of_the_caribbean.jpg', 'Mladic of the Caribbean');
	$gallery[] = array(502, 529, 'pigs/where_does_ratko_mladic_hide.png', 'Where Does Ratko Mladic Hide?');
	$gallery[] = array(1453, 1024, 'pigs/heroes.jpg', 'Heroes');
	$gallery[] = array(1449, 1024, 'pigs/schneenockerln.jpg', 'Schneenockerln');
	$gallery[] = array(572, 450, 'pigs/queen_bee.jpg', 'Queen Bee');
	$gallery[] = array(535, 413, 'pigs/clergy.jpg', 'Clergy');
	$gallery[] = array(1024, 807, 'pigs/more_news.jpg', 'More News');
	$gallery[] = array(535, 391, 'pigs/talk_show.png', 'Talk Show');
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
		<h3>Exhibition</h3>
    	<p>Some of the pieces were exhibited in 2010 as "The Psychology of Pigs" in a Shock Gallery, Art Clinic in Novi Sad, Serbia.</p>
		<p><div class="images">
		   <img src="/img/pigs/ex.0.jpg" data-w="1248" data-h="1024" alt="" /> 
		   <img src="/img/pigs/ex.1.jpg" data-w="1209" data-h="1024" alt="" /> 
		   <img src="/img/pigs/ex.2.jpg" data-w="1209" data-h="1024" alt="" /> 
		   <img src="/img/pigs/ex.3.jpg" data-w="1022" data-h="800" alt="" /></div></p>			
	</aside>