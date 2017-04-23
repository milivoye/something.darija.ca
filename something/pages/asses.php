<?php
$title = 'The Asses';
$description = '';


$gallery = array();
	$gallery[] = array(916, 1024, 'asses/bullshit.jpg', 'Bullshit');
	$gallery[] = array(1349, 800, 'asses/auditorium.jpg', 'Auditorium');
	$gallery[] = array(1024, 845, 'asses/borders.jpg', 'Borders');
	$gallery[] = array(1024, 1024, 'asses/news.jpg', 'Breaking News');
	$gallery[] = array(1404, 761, 'asses/double-zero.jpg', 'Double-Zero');
	$gallery[] = array(1024, 696, 'asses/mp.jpg', 'MP');
	$gallery[] = array(800, 1410, 'asses/prassident.jpg', 'Prassident');
	$gallery[] = array(867, 1152, 'asses/putin-i-scream.jpg', 'Putin-I-Scream');
	$gallery[] = array(1024, 1024, 'asses/swastika-education.jpg', 'Swastika/Education');
	$gallery[] = array(769, 800, 'asses/span.jpg', 'Span');
	$gallery[] = array(970, 1024, 'asses/section_meeting.jpg', 'Meeting');
	$gallery[] = array(962, 1024, 'asses/waiting_room.jpg', 'Waiting Room');
	$gallery[] = array(800, 567, 'asses/beach.jpg', 'Beach');
	$gallery[] = array(629, 750, 'asses/3G.jpg', '3G');
	$gallery[] = array(1488, 1984, 'asses/still_life.jpg', 'Still Life');
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
		<p>Po svojoj suštini, bez obzira na spoljšnje manifestacije ili zavisnost od neke druge volje, guzica teži mestu. Skloni smo da ovu opštepoznatu činjenicu pravdamo lenjošću smatrajući da je guzica objekat koji nije spreman i sposoban da utiče na okruženje.<br />
         U svom osnovnom stanju, guzica je čvrsto prirasla za "svoje mesto", tj. poziciju na koju polaže svoje guzno pravo iz čega proizilazi uobičajeni konzervativizam guzice - jednom zauzeto mesto se ne menja bez dobrih izgleda da se zauzme neko bolje, ili usled delovanja više sile.<br />
         Ovi prelazi imaju odlike kretanja, ali je svaka primetna kretnja guzice zapravo prelaz između dva mesta u funkciji održanja i jačanja statike.<br />
         Zauzimanje dobrog mesta je mera uspeha jedne guzice.<br />
         Težnja guzice za zauzimanjem mesta možda se najbolje manifestuje u situacijama kada se, usled povoljnih društveno-političkih okolnosti, neka guzica nađe u prilici da zazume više od jednog mesta, tj. u fenomenu "sedenja na dve stolice".<br />
         Ovo zauzimanje više mesta može da dovede do guzne shizofrenije.<br />
         Shizofrena, raspeta guzica, težeći da ponovo uspostavi narušenu statiku, pokušava da zauzme i treće, četvrto itd. mesto mutirajući tako u hipertrofirani oblik - sveguzicu.</p>
	</article>
    
    
    <aside role="complementary">		
		<h3>Exhibition</h3>
    	<p>Some photos from the Asses exhibition in the Small Gallery of ULUPUDS, Belgrade, Febryary 2010.</p>
		<p><div class="images">
		   <img src="/img/asses/ex.2.jpg" data-w="1024" data-h="860" alt="" />
		   <img src="/img/asses/ex.3.jpg" data-w="768" data-h="1024" alt="" />
		   <img src="/img/asses/ex.4.jpg" data-w="1024" data-h="723" alt="" />
		   <img src="/img/asses/ex.5.jpg" data-w="1024" data-h="720" alt="" />
		   <img src="/img/asses/ex.6.jpg" data-w="1024" data-h="768" alt="" /></p>
	</aside>
		