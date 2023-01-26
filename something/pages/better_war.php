<?php
$title = 'Better War';
$description = '';

$rowHeight = 560;
$gallery = array();
	$gallery[] = array(709, 1024, 'better_war/better_war.jpg', 'Better War');
	/*
    $gallery[] = array(1024, 666, 'better_war/drugarice_posadimo_cvijece.jpg', 'Military Floristry');
    $gallery[] = array(1024, 651, 'better_war/ginulo_se.jpg', 'The Sound of One Hand');
    $gallery[] = array(1024, 709, 'better_war/not_me.jpg', '#NotMe');
    $gallery[] = array(1024, 749, 'better_war/ko_drukcije_kaze.jpg', 'Rule of Eloquence');
    $gallery[] = array(1024, 805, 'better_war/gde_je_april.jpg', 'Causality of April');
    $gallery[] = array(1024, 736, 'better_war/moras_jest_moras_srat.jpg', 'Necessity Chain');
    $gallery[] = array(1024, 850, 'better_war/bienalno_analno.jpg', 'Dilemma of Bienniality');
    $gallery[] = array(1024, 700, 'better_war/vjerovo_bi_svak.jpg', 'Sense of Immediacy');
    $gallery[] = array(1024, 820, 'better_war/lajk_za_lajk.jpg', 'Low of Reciprocity');
    $gallery[] = array(1024, 952, 'better_war/pametniji_propusta.jpg', 'Selfoutsmarting');
    $gallery[] = array(655, 1024, 'better_war/pocnimo.jpg', 'Let\'s!');
    $gallery[] = array(1024, 750, 'better_war/rupa_na_kolenu.jpg', 'Eureka!');
    $gallery[] = array(709, 1024, 'better_war/bolje_rat.jpg', 'Better War');
    $gallery[] = array(1024, 611, 'better_war/vojska_pa_sta.jpg', 'Tin-militarism');
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
        <p>Rat nego šta / digital print / 2019</p>
    </article>

    <article role="article">
        <!--p>I&rsquo;m one from the last generation of so called &ldquo;Tito&rsquo;s Pioneers&rdquo; (mandatory youth
            organization in former Socialist Federal Republic of Yugoslavia) whose coming to adulthood coincided
            with a major shift of the socio-political mainstream, from the maintained mirage of socialist utopia to a
            Hobbesian post-communist post-apocalyptic horror.<br />
            This body of work corresponds to reality perceived through well-rehearsed political slogans as a means of
            mobilization and political canonization. The matter is chosen for its relation to everlasting subliminal and
            socially reinforced superstition that is providing the foundation for the widespread acceptance of
            socio-political formulas of dubious validity, with the intent to point to socio-psychological effects and
            the function of that socially reinforced superstition. I&rsquo;m trying to reflect on this cynicism as a
            self-obstructing mechanism of a society unwilling to re-evaluate its own experience, to learn from it, and
            to apply rigorously this overpaid yet underpriced knowledge.<br />
            Re-emergence of the slogans coming from the old communist experience, poorly understood in its historical
            complexity, perceived as a &ldquo;fresh&rdquo; political movement, with the background of the recent but
            well established ethno-nationalistic grandeur and its corrosive mythology, here are questioned through
            Dadaistic interventions and calls for a new interpretations.</p-->
        <p>RAT NEGO ŠTA je rad koji preispituje našu zajedničku prošlost i naše (ne)učešće u njoj, koji parafrazira parolu s Martovskih demonstracija iz 1941.<br />
            <br />
            BOLJE RAT NEGO<br />
            ŠTA BOLJE RAT<br />
            NEGO ŠTA BOLJE<br />
            RAT NEGO ŠTA<br />
            …<br />
            <br />
            Ovako složena, i predstavljena kao besprekidna repeticija, navodi na razmišljanje o sadržini ove i sličnih političkih parola; bez namjere da ponudi odgovor ona ga zapravo nameće…</p>
    </article>

    <!--
    <aside role="complementary">
    </aside>
    -->