<?php
echo wp_nav_menu(array(
	'menu'=>'MainMenu',
	'items_wrap'=>'<ul id="nav">%3$s</ul>',
	'container' => ''
));
?>