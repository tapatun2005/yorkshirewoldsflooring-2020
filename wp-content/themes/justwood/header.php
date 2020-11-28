<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html <?php language_attributes(); ?> xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/css/main.css" media="screen" />
<?php if(is_front_page()) : ?>
	<!-- <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/homepage.css" media="screen" /> -->
	<meta name="google-site-verification" content="Q4HTgviP9-OJgLp7dthYXL2Uur5yBw1KF9Us4pTQzwc" />
	<meta name="google-site-verification" content="3xv8_egrsvL1gdxgK-57k8Ri8kqZCGLVTQVKHVCblDM" />
	<meta name="google-site-verification" content="5175P2LjUPuHkpLCnYW1-sZF-dQRrlq9qL9QKLFRWO8" />
<?php endif; ?>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php wp_enqueue_script("jquery"); ?>
<title></title>
<?php
	wp_enqueue_script('comment-reply');
	wp_head();
?>
<script type="text/javascript" src="<?php bloginfo("template_url"); ?>/odds.js"></script>
</head>
<body>
	<div id="before"></div>
	<header class="header">
		<div class="header__logo">
			<h1>
				<a href="/" class="header__logo__title">
					Yorkshire <span>Wolds</span> Flooring Ltd
				</a>
			</h1>
			<a class="header__link" href="https://www.google.com/maps/place/Yorkshire+Wolds+Flooring+Ltd/@53.9778942,-0.860653,15z/data=!4m5!3m4!1s0x0:0x3add775c19bd582!8m2!3d53.9778942!4d-0.860653" target="_blank">Poplar Road, Full Sutton Industrial Estate, York, YO41 1HS</a>
		</div>
		<div class="header__contact">
			<p class="header__cta">Call us on</p>
			<div class="header__contact__details">
				<a href="https://www.instagram.com/yorkshirewoldsflooring/" target="_blank" class="header__instagram">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/images/instagram-logo.svg" alt="Yorkshire Wolds Flooring">
				</a>
				<span class="header__split"></span>
				<a href="tel:01759373088">01759 373 088</a>
			</div>
		</div>
		<div class="nav-toggle"><span></span></div>
	</header>
	<div id="main" style="position:relative;">
		<?php get_template_part('navigation','main'); ?>