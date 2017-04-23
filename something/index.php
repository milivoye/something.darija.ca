<?php	
if ((strtolower($_SERVER['HTTP_HOST']) == 'something.darija.ca') || (strtolower($_SERVER['HTTP_HOST']) == 'viz.darija.ca')) {
	header("HTTP/1.1 301 Moved Permanently");
	header("Location: http://radakovic.darija.ca" . $_SERVER['REQUEST_URI']);
	exit();
}

$nav = array();
	$nav[] = array('/misplaced_woman/', 'Misplaced Woman');
	$nav[] = array('/no_exit/', 'No Exit');
	$nav[] = array('/migration/', 'Migration');
	$nav[] = array('/nardis/', 'Nardis');
	$nav[] = array('/pigs/', 'The Psychology of Pigs');
	$nav[] = array('/asses/', 'The Asses');
	$nav[] = array('/testimony/', 'Testimony');
	//$nav[] = array('/geometry/', 'Geometry');
	$nav[] = array('/info/', 'Info');
	$nav[] = array('http://darija.ca/', 'darija.ca');
	$nav[] = array('mailto:darija.sr@gmail.com', 'Email');

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
?>