<?php
$title = 'Felix Error!';
$description = '';

$rowHeight = 450;
$maxCols = 3;

$gallery = array();
    $gallery[] = array(1536, 2048, 'felix_error/felix_error_1.jpg');
    $gallery[] = array(1536, 2048, 'felix_error/felix_error_2.jpg');
    $gallery[] = array(1536, 2048, 'felix_error/felix_error_3.jpg');
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
        <p>Felix error! / site-specific art intervention / 2012</p>
        <p>St. John the Baptist icon on Dennis Oppenheim's "Device to Root out Evil"</p>
        <p>&nbsp;</p>
        <p>Upon his discharge from the hospital, my father bought an icon of Jesus Christ and a used velocipede. He took down the picture of the Kaiser and hung the icon above the desk that he never ever worked at; at that time, he still had not started corresponding with His Holiness the Patriarch of the Georgian Orthodox Church. But, a mistake slipped by him: while making the frame, the glass-cutter put the picture-hook to the side of the symmetrical axis and therefore Jesus hung crooked, as opposed to the Kaiser who had hung perfectly, his stance at ease. My father tried, using cobbler’s paste (exceptionally hard) to bring the icon into balance. In vain. The icon hang crooked as if it wanted to let him know that it was supposed to be crooked. One day, my father burst into my room and shouted, »Felix error! I realized what the icon wanted to tell me: Jesus is not hanging crooked, the rest of world is; the world stands off the vertical axis of the Logos by 13°, no less...«</p>
        <p>Svetislav Basara: THE CYCLIST CONSPIRACY</p>
        <p>&nbsp;</p>
        <p>Po izlasku iz bolnice, otac je kupio ikonu Isusa Hrista i polovan velosiped. Skinuo je sliku kajzera i okačio ikonu iznad radnog stola za kojim nikada ništa nije radio; tada još ne beše stupio u prepisku s Njegovom Svetošću patrijarhom Gruzijske pravoslavne Crkve. Ali, potkrala se greška: prilikom uramljivanja stakorezac je alkicu za kačenje zakucao izvan ose simetrije i Isus je visio ukrivo za razliku od kajzera koji je visio besprekorno, u stavu mirno. Otac je pokušavao da uz pomoć obućarskog lepka (izuzetno čvrstog) dovede ikonu u ravnotežu. Uzalud. Ikona se krivila kao da je htela da mu stavi do znanja da treba da stoji ukrivo. Jednoga dana otac banu kod mene u sobu i povika: »Felix error! Shvatio sam šta ikona hoće da mi kaže: ne stoji ukrivo Isus, kriv je svet; svet odstupa od vertikalne ose Logosa za čitavih 13°…«</p>
        <p>Svetislav Basara: FAMA O BICIKLISTIMA</p>
    </article>