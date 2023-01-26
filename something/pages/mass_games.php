<?php
$title = 'Mass Games';
$description = '';
//$maxCols = 2;

$gallery = array();
//$gallery[] = array(1024, 651, 'mass_games/mg.0.jpg');
$gallery[] = array(1024, 651, 'mass_games/mg.1.jpg');
$gallery[] = array(1024, 651, 'mass_games/mg.2.jpg');
$gallery[] = array(1024, 651, 'mass_games/mg.3.jpg');
//$gallery[] = array(1024, 651, 'mass_games/mg.4.jpg');
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
            <img src="/img/mass_games/mg.0.jpg" style="width:100%; max-width:600px;" />
        </div>
    </section>

    <article role="article" class="article_single">
        <p>Mass Games<br/><br/>
            This is a piece about social cohesion and reliance, about shared responsibility and shared responsibilities, common goals, assumptions and prejudices. It&rsquo;s about failure to substitute good reason with the good will.</p>
    </article>
    <div style="clear:both;"></div>

    <section id="gallery">
        <?php echo writeGalleryHTML($gallery); ?>
    </section>

    <!--
    <aside role="complementary">
    </aside>
    -->