<?php
$title = 'Broken Expectations';
$description = '';

$rowHeight = 560;
$gallery = array();
	$gallery[] = array(1054, 1434, 'broken_expectations/broken_expectations.jpg');
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
        <p>Broken Expectations<br/><br/>
            This piece is about partnership and reliance, about shared responsibility and shared responsibilities, common goals, assumptions and prejudices. It&rsquo;s about failure to substitute good reason with the good will.<br />
            It reflects on the inevitability of misunderstanding when the issue of the common interest is approached by multiple parties, and on the futility of pursuing of goals if that misunderstanding is not resolved and positions realigned. It points out that all the efforts, passion and persistence we put into things got their meaning only in a context broader than our own assumptions.</p>
    </article>
    <div style="clear:both;"></div>

    <!--
    <aside role="complementary">
    </aside>
    -->