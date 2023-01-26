<?php
if ((strtolower($_SERVER['HTTP_HOST']) == 'something.darija.ca') || (strtolower($_SERVER['HTTP_HOST']) == 'viz.darija.ca')) {
	header("HTTP/1.1 301 Moved Permanently");
	header("Location: http://radakovic.darija.ca" . $_SERVER['REQUEST_URI']);
	exit();
}

$works = array();
	$works[] = array('/i_krivi_i_duzni/', 'I krivi i dužni');
	$works[] = array('/we_are_tired/', 'We are Tired');
	$works[] = array('/lets_get_lost/', 'Let\'s Get Lost');
	$works[] = array('/minimal_consensus/', 'Minimal Consensus');
	$works[] = array('/you_dont_have_to_be_right/', 'You Don\'t Have to Be Right');
	$works[] = array('/two_perspectives/', 'Two Perspectives');
	$works[] = array('/god_bless_america/', 'God Bless America');
	$works[] = array('/misplaced_woman/', 'Misplaced Woman');
	//$works[] = array('/i_miss_yu/', 'I Miss YU');
	$works[] = array('/wake_me_up/', 'Wake Me Up in Yugoslavia');
	//$works[] = array('/ethnically_clean_linen/', 'Ethnically Clean Linen');
	$works[] = array('/social_justice/', 'Social Justice');
	$works[] = array('/oh_nothing/', 'Oh, Nothing!');
	$works[] = array('/my_way/', 'My Way');
	$works[] = array('/no_exit/', 'No Exit');
	$works[] = array('/silence/', 'Silence');
	$works[] = array('/reflection/', 'Reflection');
	$works[] = array('/black_on_white/', 'Black on White');
	$works[] = array('/kill_bill_no62/', 'Kill Bill n°62');
	$works[] = array('/felix_error/', 'Felix Error!');
	$works[] = array('/across_the_table/', 'Across the Table');
	//$works[] = array('/climate_crisis/', 'In Spite of Climate Crisis');
	//$works[] = array('/lova_is_all_you_need/', 'Lova is All You Need');
	//$works[] = array('/comedian/', 'Comedian');
	$works[] = array('/an_artist_who_does_not/', 'An Artist Who Does Not...');
	$works[] = array('/centennial_perspective/', 'Centennial Perspective');
	$works[] = array('/lean_chair/', 'Lean Chair');
	$works[] = array('/in_advance_of_the_broken_leg/', 'In Advance of the Broken Leg');
	$works[] = array('/statements/', 'Statements');
	$works[] = array('/limited_edition/', 'Limited Edition');
	//$works[] = array('/better_war/', 'Better War');
	//$works[] = array('/mass_games/', 'Mass Games');
	//$works[] = array('/i_am_an_anartist/', 'i am an anartist');
	//$works[] = array('/artist_talk/', 'Artist Talk');
	//$works[] = array('/broken_expectations/', 'Broken Expectations');
	//$works[] = array('/ignorance_is_strength/', 'Ignorance is Strength');
	$works[] = array('/canadian_living/', 'Canadian Living');
	//$works[] = array('/friendly_reminder/', 'Friendly Reminder');
	$works[] = array('/testimony/', 'Testimony');
	//$works[] = array('/migration/', 'Migration');
	//$works[] = array('/blue_period/', 'Blue Period');
	$works[] = array('/evidence_of_paint/', 'Evidence of Paint');
	$works[] = array('/nardis/', 'Nardis');
	//$works[] = array('/pigs/', 'The Psychology of Pigs');
	//$works[] = array('/geometry/', 'Geometry');
	//$works[] = array('/unnecessary_objects/', 'Unnecessary Objects');
	//$works[] = array('/objects_of_desire/', 'Objects of Desire');
	//$works[] = array('/asses/', 'The Asses');

$nav = array();
	$nav[] = array('/i_am_an_anartist/#suboff', 'Darija');
	$nav[] = array('/news/', 'News');
	$nav[] = array($works, 'Works');
	$nav[] = array('/info/', 'CV');
	//$nav[] = array('/pdf/_Darija.S.Radakovic.pdf', 'CV');
	$nav[] = array('https://www.instagram.com/art.dictator.and.kurator/', '@art.dictator.and.kurator');


if ($_SERVER['REQUEST_URI'] != '/sitemap.xml') {
	if ($_SERVER['REQUEST_URI'] != '/') {
		if ((@include $_SERVER['DOCUMENT_ROOT'] . "/pages/" . getPage($_SERVER['REQUEST_URI']) . ".php") === false) {
			header('Location: ' . $nav[0][0], true, 301);
		}
	}
	else {
		header('Location: ' . $nav[0][0], true, 302);
	}
	include $_SERVER['DOCUMENT_ROOT'] . "/inc/_footer.php";
}
else {
	echo '<?xml version="1.0" encoding="UTF-8"?>
			<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
	foreach ($nav as $link) {
		if ((strpos($link[0], 'http') === false) && (strpos($link[0], 'mailto') === false)) {
			echo '<url>
					<loc>http://' . $_SERVER['HTTP_HOST'] . $link[0] . '</loc>
					<changefreq>monthly</changefreq>
					<priority>0.8</priority>
				</url>';
		}
	}
	echo '</urlset>';
}

function getPage($URI) {
	$URI = str_replace('/', '', $URI);
	$URI = str_replace(' ', '_', $URI);
	$URI = str_replace('%20', '_', $URI);
	return $URI;
}

function search_array($needle, $haystack) {
	if (in_array($needle, $haystack)) { return true; }
	foreach ($haystack as $element) {
		if (is_array($element) && search_array($needle, $element)) { return true; }
	}
	return false;
}
