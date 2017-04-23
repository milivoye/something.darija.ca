<?php
$title = 'Misplaced Woman';
$description = '';

$gallery = array();
	$gallery[] = array(1203, 2048, 'misplaced_woman/darija_1.jpg', 'Calgary, Harry Hays Building, October 5, 2015, 9:35h');
	$gallery[] = array(2048, 1319, 'misplaced_woman/darija_2.jpg', 'Calgary, Tompkins Park, 17 Avenue SW, October 7, 2015, 16:39h');
	$gallery[] = array(2048, 1333, 'misplaced_woman/darija_3.jpg', 'Calgary, 4 Street SW C-Train Station, October 7, 2015, 17:20h');
	$gallery[] = array(1244, 2048, 'misplaced_woman/darija_4.jpg', 'Calgary, Anderson Station, October 10, 2015, 13:42h');
	$gallery[] = array(1322, 2048, 'misplaced_woman/darija_5.jpg', 'Calgary, Anderson Station, October 10, 2015, 13:40h');
	$gallery[] = array(2048, 1152, 'misplaced_woman/darija_6.jpg', 'Calgary, Sunnyside C-Train Station, October 19, 2015, 16:43h');
	//$gallery[] = array(1152, 2048, 'misplaced_woman/darija_7.jpg', 'Calgary, Sunnyside C-Train Station, October 19, 2015, 16:39h');
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
	    <p>My family and I were waiting to become Canadians since 2007. A few days ago, on October 5th 2015, our dream became true.</p>
	    <p>But, there is always a but. Since general elections have been announced for October 18th, the main question has been should a woman be allowed to attend the citizenship ceremony, state the oath, and become a Canadian citizen while wearing a veil. As this was an obvious attempt to steer the public in order to gain votes on an issue as irrelevant as this one, I naturally got sick of this manipulation and islamophobia.</p>
	    <p>This is Canada; I didn’t come here all the way from Bosnia to be told what I am or am not allowed to wear. So I had to attend the citizenship ceremony wearing a niqab. I explained it to my family; I had to make a demonstration at home the day before the ceremony, and luckily they agreed to my proposal. To my delight, everything went very smoothly on that October the 5th.</p>
	    <p>I recalled <a href="https://misplacedwomen.wordpress.com/" target="_blank">Tanja Ostojić's &quot;Misplaced Women&quot; performance</a> and decided to take a part. Until the election is over, I will be exposing the content of my bag at different public locations here in Calgary, wearing a niqab of course.</p>
	</article>
    
   <!--
   <aside role="complementary">		
		<h3>Secondary page content</h3>
    	<p>Use the <code>aside</code> element if you need to include content that is not central to the focus of the page or is clearly of secondary importance.</p>				
	</aside>
	-->