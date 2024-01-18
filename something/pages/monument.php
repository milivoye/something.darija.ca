<?php
$title = 'Monument';
$description = '';


$rowHeight = 640;
$gallery = array();
	$gallery[] = array(2048, 2731, 'monument/m00.jpg');
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
        <p>Mesto zločina - spomenik / art intervention / 2023<br/><br/>
        Ova beogradska ulica se zove Srebrenička još od 1872. godine. Danas je to mesto na kojem se pokušava zatreti trag i svako podsećanje na Srebrenicu i genocid koji se odigrao u tom gradu, a koji je osmišljen, isplaniran i organizovan u ovom.<br/>
		Gotovo neprimetnim ispuštanjem drugog slova “E” na uličnim tablama, od Srebreničke postaje “Srebrnička”. Ovom magijom se raskida veza izmeðu ovog beogradskog toponima i onog bosanskog po kojem je nazvan, a vremenu se prepušta da ukloni svedoke.<br/>
		Simbolično za ovaj podao način da se ulici Srebreničkoj ime promeni, a da se ni ne pomene, je sasvim prirodno naslanjanje ulice “Dobrice Ćosića”, preðašnje Zadarske, na Srebreničku, čime povratak na mesto zločina prestaje da bude samo fraza i postaje jezovita geografska činjenica.<br/>
		Dodata tabla sa kućnim brojem 8372 ispod table sa nazivom ulice je pokušaj da se spreči ovaj podli falsifikat, i spomenik žrtvama genocida u Bosni.</p>
    </article>
    <div style="clear:both;"></div>

	<article role="article" class="article_single">
		<p><br/><br/>Crime Scene - Monument / art intervention / 2023<br/><br/>
		This Belgrade street has been called "Srebrenička" since 1872. Today, it is a place where attempts are made to erase the traces and all reminders of Srebrenica and the genocide that took place in that city, a genocide which was designed, planned and organized in this one.<br/>
		By almost imperceptible dropping of the second letter "E" on the street signs, Srebrenica Street was stripped of its name and became "Srebrnica Street". By this magic, the connection between this Belgrade toponym and the Bosnian one after which it is named is severed, and the removal of the witnesses is left for the passing of time to accomplish.<br/>
		Symbolic of this cunning way to change the name of Srebrenica Street, without even mentioning it, is quite a natural leaning of Dobrica Ćosić Street (named after the chief ideologue of genocide), the former Zadarska Street, on Srebrenica Street, so that the return to the scene of the crime ceases to be just a phrase and becomes an eerie geographical fact.<br/>
		The added house number 8372 below the street name sign is an attempt to prevent this vile forgery, and a memorial to the victims of the genocide in Bosnia.</p>
	</article>
	<div style="clear:both;"></div>

    <aside role="complementary">
	    <div class="images">
		    <img src="/img/monument/m4.jpg" data-w="1365" data-h="1024" alt="" />
		    <img src="/img/monument/m1.jpg" data-w="1024" data-h="1365" alt="" />
		    <img src="/img/monument/m2.jpg" data-w="1024" data-h="1365" alt="" />
		    <img src="/img/monument/m3.jpg" data-w="1917" data-h="963" alt="" />
		    <img src="/img/monument/m5.jpg" data-w="1919" data-h="964" alt="" />
		    <img src="/img/monument/m6.jpg" data-w="2048" data-h="1358" alt="" />
	    </div>
    </aside>
