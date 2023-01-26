<?php
$title = 'Nešto?';
$description = '';

$gallery = array();
    $gallery[] = array(1024, 570, 'better_war_2/better_war.1.jpg', 'Better War');
    $gallery[] = array(1024, 570, 'better_war_2/better_war.2.jpg', 'Better War');
?>
<?php include $_SERVER['DOCUMENT_ROOT'] . "/inc/_header.php"; ?>
<?php include $_SERVER['DOCUMENT_ROOT'] . "/inc/_navigation.php"; ?>

<main role="main">

    <header role="banner">
        <h1><?php echo str_replace(' ', '&nbsp;', $title); ?></h1>
        <!--h2>Podnaslov</h2-->
    </header>

    <section>
        <div class="single">
            <img src="/img/better_war_2/better_war.1.jpg" style="width:100%; max-width:600px;" />
            <p>bolje rat / gold on camouflage fabric / 2017</p>
            <br />
        </div>
        <div class="single">
            <img src="/img/better_war_2/better_war.2.jpg" style="width:100%; max-width:600px;" />
            <p>rat nego šta / fine art inkjet print / 2017</p>
        </div>
    </section>

    <!--article role="article">
        <p>I&rsquo;m one from the last generation of so called &ldquo;Tito&rsquo;s Pioneers&rdquo; (mandatory youth
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
            Dadaistic interventions and calls for new interpretations.</p>
    </article-->

    <!--
    <aside role="complementary">
         <h3>Secondary page content</h3>
         <p>Use the <code>aside</code> element if you need to include content that is not central to the focus of the page or is clearly of secondary importance.</p>
     </aside>
     -->