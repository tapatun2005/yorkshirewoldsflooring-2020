<?php get_header(); ?>
<div id="mainpage">

<div class="hpl">
	<div id="cycleleft">
		<img src="<?php echo get_bloginfo('template_directory'); ?>/images/solid01.jpg" width="372" height="245" />
		<!-- <img src="<?php echo get_bloginfo('template_directory'); ?>/images/solid02.jpg" width="372" height="245" />
		<img src="<?php echo get_bloginfo('template_directory'); ?>/images/solid03.jpg" width="372" height="245" />
		<img src="<?php echo get_bloginfo('template_directory'); ?>/images/solid04.jpg" width="372" height="245" />
		<img src="<?php echo get_bloginfo('template_directory'); ?>/images/solid05.jpg" width="372" height="245" />
		<img src="<?php echo get_bloginfo('template_directory'); ?>/images/solid06.jpg" width="372" height="245" /> -->
	</div>
	<div>
		<h2><a href="<?php echo get_permalink(6) ?>">solid wood flooring</a></h2>
		<p class="fst"><?php if (get_post_meta($post->ID, 'Homepage Solid Top', true) ) { echo get_post_meta($post->ID, 'Homepage Solid Top', true); } ?></p>
	</div>
	<div>
		<p class="snd"><?php if (get_post_meta($post->ID, 'Homepage Solid Bottom', true) ) { echo get_post_meta($post->ID, 'Homepage Solid Bottom', true); } ?></p>
	</div>
</div>
<div class="hpr">
	<div id="cycleright">
		<img src="<?php echo get_bloginfo('template_directory'); ?>/images/engineered01.jpg" width="372" height="245" />
		<!-- <img src="<?php echo get_bloginfo('template_directory'); ?>/images/engineered02.jpg" width="372" height="245" />
		<img src="<?php echo get_bloginfo('template_directory'); ?>/images/engineered03.jpg" width="372" height="245" />
		<img src="<?php echo get_bloginfo('template_directory'); ?>/images/engineered04.jpg" width="372" height="245" />
		<img src="<?php echo get_bloginfo('template_directory'); ?>/images/engineered05.jpg" width="372" height="245" />
		<img src="<?php echo get_bloginfo('template_directory'); ?>/images/engineered06.jpg" width="372" height="245" /> -->
	</div>
	<div>
		<h2><a href="<?php echo get_permalink(11) ?>">engineered wood flooring</a></h2>
		<p class="fst"><?php if (get_post_meta($post->ID, 'Homepage Engineered Top', true) ) { echo get_post_meta($post->ID, 'Homepage Engineered Top', true); } ?></p>
	</div>
	<div>
		<p class="snd"><?php if (get_post_meta($post->ID, 'Homepage Engineered Bottom', true) ) { echo get_post_meta($post->ID, 'Homepage Engineered Bottom', true); } ?></p>
	</div>
</div>

<?php
$page_data = get_page($pstId);
$content = apply_filters('the_content', $page_data->post_content);
$title = $page_data->post_title;
echo $content;
?>
</div>
<?php get_footer(); ?>
