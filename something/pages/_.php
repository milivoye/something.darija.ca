<?php
$title = 'Nardis';
$description = '';

$gallery = array();
	$gallery[] = array(2048, 1365, 'nardis/01.jpg');
	$gallery[] = array(2048, 1536, 'nardis/02.jpg');
	$gallery[] = array(2048, 1536, 'nardis/03.jpg');
	$gallery[] = array(800, 600, 'nardis/04.jpg');
	$gallery[] = array(640, 480, '<iframe class="iframe" width="100%" alt=".75" src="https://www.youtube.com/embed/oxzeDpBvxv4" frameborder="0" allowfullscreen></iframe>', '', true);
?>
<?php include $_SERVER['DOCUMENT_ROOT'] . "/inc/_header.php"; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . "/inc/_navigation.php"; ?>

<script type="text/javascript">
$(document).ready(iHeight);
</script>

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
		<h3>Making of&hellip;</h3>
    	<p><div class="images"> 
		   <img src="/img/nardis/ex.1.jpg" data-w="1024" data-h="683" alt="" /> 
			</div></p>	
	</aside>