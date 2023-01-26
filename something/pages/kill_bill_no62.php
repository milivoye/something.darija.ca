<?php
$title = 'Kill Bill n°62';
$description = '';

$rowHeight = 450;
$maxCols = 3;
$gallery = array();
	$gallery[] = array(1024, 768, 'kill_bill_no62/perspective.jpg');
	/*
	$gallery[] = array(1024, 576, 'kill_bill_no62/1.jpg');
    $gallery[] = array(1024, 576, 'kill_bill_no62/4.jpg');
	$gallery[] = array(1024, 576, 'kill_bill_no62/2.jpg');
    $gallery[] = array(1024, 576, 'kill_bill_no62/5.jpg');
    $gallery[] = array(1024, 576, 'kill_bill_no62/3.jpg');
    $gallery[] = array(1024, 576, 'kill_bill_no62/6.jpg');
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
        <p>Kill Bill n°62 / art installation / 2018</p>
    </article>
	       
	<article role="article">
	    <p>It is so obvious that everything could be questioned nowadays, but it&rsquo;s also obvious that politicization of basic human rights, for e.g. freedom of expression, can easily become a threat pointed at the group of people and the innocent individual.</p>
		<p>Making a political issue of what we wear, not to mention what is women allowed to wear in 21st century in Canada, is not a feminist issue, or some sort of human rights question anymore - it is about government dividing the people, spreading the fear, and in the bottom line demonstrating the power over individual choices with the Bill n°62.</p>
		<p>The scariest part is that the campaign is fruitful considering that the recent polls suggest that two thirds of all Canadians would like to see the same crushing of the personal liberty in their own provinces too. Most of them haven&rsquo;t ever meet a veiled person in their life, but still they are susceptible to fearmongering that will in effect harm their own freedom of choice.</p>
		<p>This piece is made to attract the passengers&rsquo; attention, and to invite them to take a second look. It&rsquo;s aim is to show the tendencies of new Canadian politics, and the hidden danger that comes from taking the liberty away from the citizen.</p>
	</article>
    
    
    <aside role="complementary">
        <p>This piece was inspired by controversial Bill n°62 passed by the Quebec national assembly which banned all face covering in all situations where public services were given and received. It was presented as a mean "to foster adherence to State religious neutrality", but in reality it was an act of repression aimed at a few dozen women that wear niqab in Quebec.<!-- It was exhibited in January 2018 as a part of "No Exit" show at Art Point Gallery in Calgary.--></p>
        <!--p><div class="images">
            <img src="/img/kill_bill_no62/poster.jpg" data-w="672" data-h="1024" alt="" style="outline: solid 1px #CCC;" />
            <img src="/img/kill_bill_no62/perspective.jpg" data-w="1024" data-h="768" alt="" />
            <img src="/img/kill_bill_no62/visitor.jpg" data-w="840" data-h="840" alt="" />
        </div></p-->
	</aside>