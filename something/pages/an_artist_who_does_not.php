<?php
$title = 'An Artist Who Does Not...';
$description = '';

$rowHeight = 560;
$gallery = array();
$gallery[] = array(1024, 1274, 'an_artist_who_does_not/an_artist_who_does_not.jpg');
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
        <p>An Artist Who Does Not...<span style="padding-left:1.25pt;"></span> / acrylic on cotton / 2019</p>
        <p></p>
        <p>This piece is a homage to Mladen Stilinović, famous Yugoslav conceptual artist and his piece “AN ARTIST WHO CANNOT SPEAK ENGLISH IS NO ARTIST”. It closely follows Stilinović's execution, and adds a remark that relates to a peculiar position of art and artist in so-called "free market capitalism", questioning representation of art, its appraisal and meaningfulness.</p>
        <p></p>
        <p>Ovo je homage M. Stilinoviću, čuvenom jugoslovenskom konceptualnom umjetniku i njegovom radu “Umetnik koji ne govori engleski nije umetnik”. Moj rad (platnena torba) je načinjen doslovce po ugledu na Mladenov rad, uz malu opasku koja se odnosi na položaj umetnika i umetnosti u takozvanom “neoliberalnom kapitalizmu”, tj. na pitanje kako umetnost reklamirati, prodati, i uopste šta činiti s njom.</p>
    </article>
    <div style="clear:both;"></div>