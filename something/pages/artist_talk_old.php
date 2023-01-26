<?php
$title = 'Artist Statements';
$description = '';

$gallery = array();
    $gallery[] = array(785, 444, 'artist_talk/3_not.jpg', '3xNOT');
    $gallery[] = array(761, 445, 'artist_talk/artist_talk.jpg', 'Artist Talk');
    $gallery[] = array(310, 281, 'artist_talk/distribution_of_knowledge.jpg', 'Distribution of Knowledge');
    $gallery[] = array(664, 434, 'artist_talk/egzistencijalizam.jpg', 'Existentialism');
    $gallery[] = array(344, 298, 'artist_talk/invazija.jpg', 'Invasion');
    $gallery[] = array(740, 489, 'artist_talk/ko_ima_vremena.jpg', 'To Those Who Have Time');
    $gallery[] = array(800, 459, 'artist_talk/omarska.jpg', 'Omarska');
    $gallery[] = array(370, 325, 'artist_talk/principles_of_freedom.jpg', 'Principles of Freedom');
    $gallery[] = array(332, 273, 'artist_talk/principles_of_politics.jpg', 'Principles of Politics');
    $gallery[] = array(655, 353, 'artist_talk/reminding.jpg', 'Reminding');
    $gallery[] = array(418, 234, 'artist_talk/srebrenica.jpg', 'Srebrenica');
    $gallery[] = array(452, 234, 'artist_talk/to_do.jpg', 'To-Do');
    $gallery[] = array(630, 278, 'artist_talk/warmongering.jpg', 'Warmongering');
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


    <!--
    <article role="article">
    </article>
    -->

    <!--
    <aside role="complementary">
    </aside>
    -->