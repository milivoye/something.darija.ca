<?php
$title = 'Wake Me Up in Yugoslavia';
$description = '';

//$rowHeight = 560;
$rowHeight = 640;
$gallery = array();
	//$gallery[] = array(864, 1152, 'wake_me_up/wake_me_up.jpg');
	$gallery[] = array(720, 539, 'i_miss_yu/venice_pavilion.jpg', '');
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

    <!--article role="article" class="article_single">
        <p>Wake Me Up in Yugoslavia<span style="padding-left:1.25pt;"></span> / print / 2019</p>
        <p></p>
        <p>Wake Me Up je tekstualni rad koji govori o prekidu u životima generacije poremećene nasilnim raspadom bivše Jugoslavije i zjapećoj praznini ostaloj u zajedničkom (konceptualnom) prostoru, manje ili više prikrivene tricama svakodnevice…<br />
            Ovaj rad je u nastajanju, intervencije se nastavljaju…</p>
        <p></p>
        <p>Wake Me Up is a text based art that speaks about generations whose lives were disrupted by violent breakup of former Yugoslavia, and a vast emptiness left in the collective (conceptual) space, poorly concealed with daily trivialities…<br />
            This work is an ongoing project…</p>
    </article-->
	<article role="article" class="article_single">
		<p>Wake Me Up in Yugoslavia / art intervention / 2019<br/>
			The Venice Biennale, Yugoslav Pavilion
		</p>
	</article>
	
    <aside role="complementary">
        <p>The building of the Yugoslav Pavilion in Venice was originally intended for the presentation of Yugoslav artists. The name YUGOSLAVIA is stamped on its front, and regardless of the disintegration of that state, war, looting, devastation and division of remaining property, it stands steadfast, as do a few of us who resist oblivion.</p>
        <p>The idea of this work is to add the words &ldquo;WAKE ME UP IN&rdquo; to the pavilion building above the existing letters &ldquo;YUGOSLAVIA&rdquo; with minimal intervention and to draw attention to the country for which the pavilion is intended, to the absurdity of its non-existence and the paradox of its defiant presence.</p>
        <p>When I think of the phrase &ldquo;wake me up&rdquo; I recall the long journeys I went on with my parents, and all the times I begged them to &ldquo;wake me up&rdquo; at the destination. Like many Yugoslavs, I was blessed to be raised in a peaceful and beautiful country, but unfortunate to see its violent break up during the &lsquo;90s.</p>
        <p>This piece conveys the idea that not all travels are forward-looking, as is the case of the non-existing nation of Yugoslavs. Their destination has been buried in a haze of a dreamy past, leaving them no other option but to fare through a nightmare in hopes of waking up in another dream. This case is not an isolated one either, as longing for the times past is a natural tendency, even in societies and cultures not known for nurturing nostalgia.</p>
    </aside>
	
    <!--aside role="complementary">
         <p>PROBUDI ME U JUGOSLAVIJI
         <p>Zgrada Jugoslovenskog paviljona u Veneciji je originalno namenjena predstavljanju jugoslovenskih umetnika. Na njenom pročelju je utisuto ime JUGOSLAVIA, i bez obzira na raspad te države, rat, pljačku i podelu zaostale imovine, ono stoji postojano, kao i nekolicina nas koji se odupiru zaboravu.</p>
         <p>Zamisao ovog rada je da se na zgradi paviljona iznad postojećih slova “JUGOSLAVIA” minimalnom intervencijom dodaju reči “WAKE ME UP IN”, te da se tom intervencijom skrene pažnja na zemlju kojoj je taj paviljon namenjen, na apsurd njenog nepostojanja i paradoks njenog prkosnog prisustva.</p>
         <p>Kao mnogi Jugosloveni imala sam sreću da odrastem u spokojnoj i prelepoj zemlji, ali i nesreću da vidim njen nasilan slom. Kada pomislim na “probudi me”, setim se dugih putovanja sa roditeljima i mojih preklinjanja da me probude kada stignemo na krajnju destinaciju.</p>
         <p>Ovaj rad nosi ideju da nisu sva putovanja usmerena ka napred i ka budućnosti, te da to nije slučaj sa nepostojećom nacijom Jugoslovena. Njihova destinacija je sahranjena u maglovitoj prošlosti, i ne preostaje im druga mogućnost sem da nastave da putuju kroz noćne more, u nadi da će da se probude u onom prvobitnom snu.</p>
     </aside-->

	<div style="clear:both;"></div> 
    