<?php	
function writeGalleryHTML($gallery) {
	$html = ''; $js = ''; $jsArr = array(); $cnt = 0;
	$html .= '<h3>Gallery</h3>';
	$html .= '<div style="max-width:99%; margin:0;" class="flex-images">';
	$js .= '<script type="text/javascript">var items = [';
	foreach ($gallery as $item) {
		$html .= '<div class="item" data-w="' . $item[0] . '" data-h="' . $item[1] . '"><img src="/img/' . $item[2] . '" onclick="psInit(' . $cnt . ');" alt="' . $item[3] . '" /></div>';
		$jsArr[] = '{ src:"/img/' . $item[2] . '", w:' . $item[0] . ', h:' . $item[1] . ', title:"' . $item[3] . '" }';
		$cnt++;
	}	            
	$html .= '</div>';
	$js .= implode(', ', $jsArr);
	$js .= '];</script>';	
	return $html . "\n" . $js;
}
//header("Expires: " . date('D, j M Y G:i:s T', strtotime("+10 years"))); // Date in the future
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">	
	<title>radakovic.darija.ca<?php if ((isset($title)) && (trim($title) != '')) { echo ' : ' . $title; } ?></title>	
	<meta name="description" content="<?php if ((isset($description)) && (trim($description) != '')) { echo 'Darija S. Radakovic - ' . $description; } ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="Cache-control" content="public" />
    
    <link rel="apple-touch-icon" sizes="57x57" href="/favicon/apple-icon-57x57.png" />
	 <link rel="apple-touch-icon" sizes="60x60" href="/favicon/apple-icon-60x60.png" />
	 <link rel="apple-touch-icon" sizes="72x72" href="/favicon/apple-icon-72x72.png" />
	 <link rel="apple-touch-icon" sizes="76x76" href="/favicon/apple-icon-76x76.png" />
	 <link rel="apple-touch-icon" sizes="114x114" href="/favicon/apple-icon-114x114.png" />
	 <link rel="apple-touch-icon" sizes="120x120" href="/favicon/apple-icon-120x120.png" />
	 <link rel="apple-touch-icon" sizes="144x144" href="/favicon/apple-icon-144x144.png" />
	 <link rel="apple-touch-icon" sizes="152x152" href="/favicon/apple-icon-152x152.png" />
	 <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-icon-180x180.png" />
	 <link rel="icon" type="image/png" sizes="192x192" href="/favicon/android-icon-192x192.png" />
	 <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png" />
	 <link rel="icon" type="image/png" sizes="96x96" href="/favicon/favicon-96x96.png" />
	 <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png" />
    <link rel="shortcut icon" href="/favicon/favicon.ico">
     
    <link rel="stylesheet" href="/flex/jquery.flex-images.min.css" />
    <style type="text/css">    	
        .flex-images .item { overflow:visible !important; border:none !important; }
    </style>
    
    <link rel="stylesheet" href="/photoswipe/photoswipe.min.css" />
    <link rel="stylesheet" href="/photoswipe/default-skin/default-skin.min.css" />
    <script async src="/photoswipe/photoswipe.min.js"></script>
    <script async src="/photoswipe/photoswipe-ui-default.min.js"></script>    
	
    <link href="/css/main.css" rel="stylesheet" media="all">
	 <script type="text/javascript" src="/js/jquery.1.11.1.min.js"></script>
    <script type="text/javascript" src="/flex/jquery.flex-images.min.js"></script>
    <?php
    if (!((isset($rowHeight)) && (intval($rowHeight) > 0))) { $rowHeight = 350; }
    ?>
    <script type="text/javascript">
    var menuDo = false; var menuInit = false;
    $(document).ready(function() {
        $('.flex-images').flexImages({rowHeight:<?php echo $rowHeight ?>});
        $('.menu').click(function() {
        	if (menuDo) {
	        	if (menuInit) {
		        	menuInit = false;
		        	$('.navbar').slideDown('fast');
		    	}
	        	else {
		        	menuInit = true;
		        	$('.navbar').slideUp('fast');
		    	}
		    }
        });
        $('.menu').hover(function() {
    			$(this).toggleClass("act");
 		  });
     });
     
    $(window).scroll(function() {
    	setNav();
    });
    
    $(window).resize(function() {
    	setNav();
    	iHeight();
	 });
	 
	 function setNav() {
    	if ($(window).width() <= 840) {
    		if($(this).scrollTop() > 50) {
    			menuDo = true; menuInit = true;
		   	$('.navbar').slideUp('fast');
    		}
    		else {
    			menuDo = false; menuInit = true;
		   	$('.navbar').slideDown('fast');
    		}
    	}
    	else {    	
    		menuDo = false; menuInit = true;
		   $('.navbar').slideDown('fast');
    	}	
	 }
	 
	 function iHeight() {
	 	$("#gallery").find('iframe').each(function() {
    		$(this).css('height', (($(this).width() * $(this).attr('alt')) + 'px'));
    	});
	 }
    </script>
</head>
<body>