<?php
echo wp_nav_menu(array(
	'menu'=>'MainMenu',
	'items_wrap'=>'<div class="main-nav"><ul id="nav">%3$s</ul></div>',
	'container' => ''
));
?>