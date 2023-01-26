<?php
$title = 'Friendly Reminder';
$description = '';
$maxCols = 2;

$gallery = array();

$rowHeight = 560;
$gallery = array();
	$gallery[] = array(892, 892, 'friendly_reminder/friendly_reminder.jpg');
/*
$gallery[] = array(1024, 1012, 'friendly_reminder/base.jpg');
//$gallery[] = array(1024, 500, 'friendly_reminder/text_1.jpg');
$gallery[] = array(1024, 1012, 'friendly_reminder/mannequins.jpg');
//$gallery[] = array(1024, 500, 'friendly_reminder/text_2.jpg');
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
        <p>Friendly Reminder<br/><br/>
            We would say there is nothing wrong with shopping and following trends. But how often do we catch ourselves buying things we don&rsquo;t actually need, and how often do we obey to the latest fashion, no matter how ridiculous it seems to be?<br />
            We saw it on TV. It&rsquo;s a &ldquo;limited edition&rdquo;. Or it is a &ldquo;good deal&rdquo;, a &ldquo;one day sale&rdquo;&hellip; It doesn&rsquo;t matter.<br />
            Fashion is a visual representation of the prevailing ideas and values. Individuals act as pixels in the vast image. Even though we might try to deny the responsibility, our personal choices testify against us.<br />
            This is just a friendly reminder. Slowly, but quickly, get out.</p>
    </article>
    <div style="clear:both;"></div>

    <section id="gallery">
        <?php /* echo writeGalleryHTML($gallery); */ ?>
    </section>

    <!--
    <aside role="complementary">
    </aside>
    -->