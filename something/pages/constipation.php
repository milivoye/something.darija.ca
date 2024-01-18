<?php
$title = 'Artist\'s Constipation';
$description = '';

$rowHeight = 640;
$gallery = array();
	$gallery[] = array(1488, 2000, 'constipation/constipation.jpg');
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
        <p>Artist's Constipation (Creative Blockage) / sealed tin can with paper labels / 2023<br/>
        <br/>
        It is tough to produce a shit on an empty stomach. The chances are net zero.<br/>
        This piece consists of a dozen cans filled with artist's constipation, creative blockage, unproductivity, lack of substance, nonexistence, 
        emptiness, vacuum, nullity, blankness,
        voidness, nothingness, discontentedness, etc.<br/>
        Artist's Constipation is a series of 12 tins, numbered and signed, each containing 0 grams of artistic content.<br/>
        Since this piece is inspired, and in some way is the continuation of Piero Manzoni's piece Artist's Shit, in which each can is labeled as 
        containing 30 grams of artist's excrement priced its net weight worth in gold at the time, therefore following the same logic, Artist's 
        Constipation is priceless.<br/>
        The text on the labels is printed in French, German, Italian and English.<br/>
        <br/>
        DISCLAIMER: This work was not supported by any institutional power structure that claims to support artists in their growth and production of shit.<br/>
        With that being said, special thanks go to Calgary Arts Development.
    </p>

    </article>
    <div style="clear:both;"></div>