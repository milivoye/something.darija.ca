<?php
$title = 'Geometry';
$description = '';

$gallery = array();
    $gallery[] = array(451, 918, 'geometry/dialogue.jpg', 'Dialogue');
    $gallery[] = array(2085, 2065, 'geometry/not_me.jpg', 'Not Me');
    $gallery[] = array(1210, 1500, 'geometry/part_time.jpg', 'Part Time');
    $gallery[] = array(872, 673, 'geometry/screen_scream.jpg', 'Screen Scream');
    $gallery[] = array(2048, 2048, 'geometry/conversation.1.jpg', 'Conversation 1');
    $gallery[] = array(2048, 2048, 'geometry/conversation.2.jpg', 'Conversation 2');
    $gallery[] = array(2048, 2048, 'geometry/conversation.3.jpg', 'Conversation 3');
    $gallery[] = array(2048, 2700, 'geometry/cb.jpg', '');
    $gallery[] = array(2048, 2700, 'geometry/cg.jpg', '');
    $gallery[] = array(2048, 2626, 'geometry/sbg.jpg', '');
    $gallery[] = array(2048, 2626, 'geometry/syw.jpg', '');
    $gallery[] = array(2048, 2626, 'geometry/sbb.jpg', '');
    $gallery[] = array(2048, 2048, 'geometry/it_is_yellow.jpg', 'It is Yellow');
    $gallery[] = array(890, 890, 'geometry/around_the_corner.jpg', 'Around the Corner');
    $gallery[] = array(2048, 2048, 'geometry/160.jpg', '');
    $gallery[] = array(2048, 2048, 'geometry/161.jpg', '');
    $gallery[] = array(1024, 1024, 'geometry/1014.jpg', '');
    $gallery[] = array(2048, 2048, 'geometry/178.jpg', '');
    $gallery[] = array(980, 2048, 'geometry/251.jpg', '');
    $gallery[] = array(980, 2048, 'geometry/252.jpg', '');
    $gallery[] = array(1044, 757, 'geometry/1096.jpg', '');
    $gallery[] = array(2752, 2048, 'geometry/cr.jpg', '');
    $gallery[] = array(836, 1081, 'geometry/1018.jpg', '');
    $gallery[] = array(735, 874, 'geometry/1017.jpg', '');
    $gallery[] = array(1156, 2048, 'geometry/1019.jpg', '');
    $gallery[] = array(1627, 2048, 'geometry/1021.jpg', '');
    $gallery[] = array(2048, 2048, 'geometry/1020.jpg', '');
    $gallery[] = array(840, 839, 'geometry/alone_together.jpg', 'Alone Together');
    $gallery[] = array(2000, 2793, 'geometry/1.jpg', '');
    $gallery[] = array(2000, 2567, 'geometry/3.jpg', '');
    $gallery[] = array(3999, 2912, 'geometry/2.jpg', '');
    $gallery[] = array(2000, 1941, 'geometry/33.jpg', '');
    $gallery[] = array(2000, 2008, 'geometry/4.jpg', '');
    $gallery[] = array(2000, 1533, 'geometry/6.jpg', '');
    $gallery[] = array(2000, 1416, 'geometry/7.jpg', '');
    $gallery[] = array(2000, 1547, 'geometry/8.jpg', '');
    $gallery[] = array(2000, 2018, 'geometry/10.jpg', '');
    $gallery[] = array(2000, 1340, 'geometry/11.jpg', '');
    $gallery[] = array(2000, 1387, 'geometry/12.jpg', '');
    $gallery[] = array(2000, 1292, 'geometry/13.jpg', '');
    $gallery[] = array(2000, 3226, 'geometry/14.jpg', '');
    $gallery[] = array(2000, 1549, 'geometry/15.jpg', '');
    $gallery[] = array(3286, 3307, 'geometry/red_untitled.jpg', 'Red Untitled');
    $gallery[] = array(1105, 3000, 'geometry/shapes_of_grey.jpg', 'Shapes of Grey');
    $gallery[] = array(3073, 4386, 'geometry/black_gold_white_north.jpg', 'Black Gold - White North');
    $gallery[] = array(4130, 2870, 'geometry/almost_blue.jpg', 'Almost Blue');
    $gallery[] = array(2448, 3264, 'geometry/yellow.jpg', 'Yellow');
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