	<nav id="navigation" role="navigation">
		<ul class="navbar">
		<?php
		foreach ($nav as $n) {
			echo '<li';
			if ($n[1] == $title) { echo ' class="act"'; }
			echo '><a href="' . $n[0] . '"';
			if (strpos($n[0], 'http') !== false) { echo ' target="_blank"'; }
			echo '>' . $n[1] . '</a></li>';
			if ($n !== end($nav)) { echo '<li class="divider">&middot;</li>'; }
		}
		?>
		</ul>
		<span class="menu">&#8801;</span>
		<div id="navtrans"></div>
	</nav>