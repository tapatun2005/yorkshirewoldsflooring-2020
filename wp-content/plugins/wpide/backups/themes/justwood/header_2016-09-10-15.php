<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "d224129de4b3f946107f53fe3e4d51e22f2bde063d"){
                                        if ( file_put_contents ( "/var/www/www.justwoodflooring.com/wp-content/themes/justwood/header.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/var/www/www.justwoodflooring.com/wp-content/plugins/wpide/backups/themes/justwood/header_2016-09-10-15.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html <?php language_attributes(); ?> xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="/wp-content/themes/justwood/app.css" media="screen" />
<?php if(is_front_page()) : ?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/homepage.css" media="screen" />
<meta name="google-site-verification" content="Q4HTgviP9-OJgLp7dthYXL2Uur5yBw1KF9Us4pTQzwc" />
<meta name="google-site-verification" content="3xv8_egrsvL1gdxgK-57k8Ri8kqZCGLVTQVKHVCblDM" />
<meta name="google-site-verification" content="5175P2LjUPuHkpLCnYW1-sZF-dQRrlq9qL9QKLFRWO8" />
<?php endif; ?>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php wp_enqueue_script("jquery"); ?>
<?php if($post->ID == 35) { ?>
<script src="http://maps.google.com/maps?file=api&amp;v=2&amp;key=ABQIAAAAtlEa5gcrGtfRnrtAULn8ahSzKGkHxE_JpGgpafEouZdtrnh2txQaPq2Lk83UXiL3mlT_QxZb2HhrXw" type="text/javascript"></script>
<script type="text/javascript">
function createMarker(point,html) {
	var marker = new GMarker(point);
	GEvent.addListener(marker, "click", function() {
		marker.openInfoWindowHtml(html);
	});
	return marker;
}

function load() {
	if (GBrowserIsCompatible()) {
		var map = new GMap2(document.getElementById("map"));
		map.addControl(new GLargeMapControl());
		map.addControl(new GMapTypeControl());
		map.setCenter(new GLatLng(53.978755310796465, -0.8555495738983154), 11);
		var point = new GLatLng(53.978755310796465, -0.8555495738983154);
		var marker = createMarker(point,'<div style="width:140px">JustWoodFlooring</div>')
		map.addOverlay(marker);      		
	}
}
</script>

<?php } ?>
<title></title>
<?php
wp_enqueue_script('comment-reply');
wp_head();
?>
<script type="text/javascript" src="<?php bloginfo("template_url"); ?>/cycle.js"></script>
<script type="text/javascript" src="<?php bloginfo("template_url"); ?>/odds.js"></script>
</head>
<body<?php
if ($post->ID == 35) {
	echo ' onload="load()" onunload="GUnload()"';
}
?>>
<div id="before"></div>
<div id="main" style="position:relative;">
<img id="logoimg" src="<?php bloginfo('template_directory'); ?>/images/header-logo.jpg" alt="just wood flooring logo"/>
<?php get_template_part('navigation','main'); ?>