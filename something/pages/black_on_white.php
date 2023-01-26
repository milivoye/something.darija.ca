<?php
$title = 'Black on White';
$description = '';

$gallery = array();
	$gallery[] = array(1024, 1024, 'black_on_white/for_the_record.jpg', 'For the Record');
	$gallery[] = array(1024, 1024, 'black_on_white/art_with_the_left_hand.jpg', 'Art With the Left Hand');
	$gallery[] = array(1024, 1024, 'black_on_white/artist_talk.jpg', 'Artist Talk');
	$gallery[] = array(1024, 1024, 'black_on_white/bolna_tacka.jpg', 'Bolna tačka');
	$gallery[] = array(1024, 1024, 'black_on_white/communitatea.jpg', 'Communitatea');
	$gallery[] = array(1024, 1280, 'black_on_white/fart_more.jpg', 'Fart More');
	$gallery[] = array(1024, 1024, 'black_on_white/here.jpg', 'Here');
	$gallery[] = array(1024, 1024, 'black_on_white/hleb.jpg', 'Hleb');
	$gallery[] = array(1024, 1024, 'black_on_white/huskanje.jpg', 'Huškanje');
	$gallery[] = array(1024, 1024, 'black_on_white/indifference.jpg', 'Indifference');
	$gallery[] = array(1024, 1024, 'black_on_white/iskljucivo_po_pozivu.jpg', 'Isključivo po pozivu');
	$gallery[] = array(1024, 1024, 'black_on_white/izlozba_planula.jpg', 'Izložba planula');
	$gallery[] = array(1024, 1280, 'black_on_white/ja_pa_ja.jpg', 'Ja pa ja');
	$gallery[] = array(1024, 1024, 'black_on_white/ja_sam_titova.jpg', 'Sharing Is Caring, But I Don\'t Care');
	$gallery[] = array(1024, 1024, 'black_on_white/joseph_beuys_tito.jpg', 'Joseph Beuys Tito');
	$gallery[] = array(1024, 1024, 'black_on_white/neka.jpg', 'Neka');
	$gallery[] = array(1024, 1024, 'black_on_white/next_question.jpg', 'Next Question');
	$gallery[] = array(1024, 1024, 'black_on_white/seksas_li_se_dolly_bell.jpg', 'Seksaš li se Dolly Bell');
	$gallery[] = array(1024, 1024, 'black_on_white/sumnja_mi_je_poslednja_nada.jpg', 'Sumnja mi je poslednja nada');
	$gallery[] = array(1024, 1024, 'black_on_white/ta_sveta_srpska_rec_genocid.jpg', 'Ta sveta srpska reč genocid');
	$gallery[] = array(1024, 1024, 'black_on_white/the_truth_has_shifted.jpg', 'The Truth Has Shifted');
	$gallery[] = array(1024, 1024, 'black_on_white/u_se_i_u_svoje_resurse.jpg', 'U se i u svoje resurse');
	#$gallery[] = array(1024, 1024, 'black_on_white/urgency_is_passe.jpg', 'Urgency Is Passe');
	$gallery[] = array(1024, 1024, 'black_on_white/zrno_pogaca.jpg', 'Zrno po zrno pogača');
	$gallery[] = array(1024, 1024, 'black_on_white/focus.jpg', 'Focus');
	$gallery[] = array(1024, 1024, 'black_on_white/freedom.jpg', 'Freedom');
	$gallery[] = array(1024, 1024, 'black_on_white/hell_vs_heaven.jpg', 'Hell vs. Heaven');
	$gallery[] = array(1024, 1024, 'black_on_white/ko_ne_misli.jpg', 'Ko ne misli...');
	$gallery[] = array(1024, 1024, 'black_on_white/pun_mi_je.jpg', 'Pun mi je...');
	$gallery[] = array(1024, 1024, 'black_on_white/sve_se_moze.jpg', 'Kad se ima s kim');
	$gallery[] = array(1024, 1024, 'black_on_white/umjetnik_je_revidiro.jpg', 'Revizija');
	$gallery[] = array(1024, 1024, 'black_on_white/some_likes.jpg', 'Some Likes are Bigger than Others');
	$gallery[] = array(1024, 1024, 'black_on_white/private.jpg', 'Private Prophety');
	$gallery[] = array(1024, 1024, 'black_on_white/oktobarski.jpg', 'Oktobarski salon');
	$gallery[] = array(1024, 1024, 'black_on_white/svicarska.jpg', 'Švicarska');
	$gallery[] = array(1024, 1024, 'black_on_white/i_miss_yu.jpg', 'I Miss YU');
	$gallery[] = array(1024, 1024, 'black_on_white/after_gotovac.jpg', 'After Gotovac');
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


	<article role="article">
		<!--p></p-->
	</article>

	<!--
	<aside role="complementary">
	 </aside>
	 -->