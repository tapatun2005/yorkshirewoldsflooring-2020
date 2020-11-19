<?php get_header(); ?>
<div id="mainpage">
<?php if (get_post_meta($post->ID, 'heading', true) ) : ?>
<h1 class="top"><?php echo get_post_meta($post->ID, 'heading', true) ?></h1>
<?php endif; ?>
<?php if (get_post_meta($post->ID, 'intro', true) ) : ?>
<p><?php echo get_post_meta($post->ID, 'intro', true) ?></p>
<?php endif; ?>
<?php


$pstId = $post->ID;

if ($pstId==47) {

echo wp_nav_menu(array(
    'menu'=>'Sitemap',
    'container' => ''
));

}

$posts = array(6,11,352,439,466,488);

if (in_array($post->ID,$posts)) {
	switch($post->ID) {
		case 6 : 	$floor_type = 'solid-wood-floor';		break;
		case 11 : 	$floor_type = 'engineered-wood-floor'; 		break;
		case 352 : 	$floor_type = 'parquet-flooring'; 		break;
		case 439 :	$floor_type = 'metal-flooring';			break;
		case 466 :	$floor_type = 'black-walnut';			break;
		case 488 :	$floor_type = 'engineered-oak-14-15-18mm'; 	break;
	}
	$args = array('post_type'=>'jw_product', 'flooring_type'=>$floor_type);
	$loop = new WP_Query($args);
	if ($loop->have_posts()) {
		echo '<div id="products">';
		while ( $loop->have_posts() ) : $loop->the_post();
			echo '<div class="product long" itemscope itemtype="http://schema.org/Product">';
			if (get_post_meta($post->ID, 'Bespoke Finishing', true) ) {
				echo "<img class=\"floatme\" src='";
				bloginfo("template_directory");
				echo "/images/bespoke-finish.png' alt='Bespoke finishing available on this product.' />";
			}
			the_post_thumbnail('',array('title' => '', 'alt' => '', 'itemprop' => 'image'));
			echo '<h2 class="product"><span itemprop="name">';
			the_title();
			echo "</span></h2>\n";
			echo "<span itemprop=\"description\">";
			the_excerpt();
			echo "</span>\n";
			echo "</div>\n";
		endwhile;
		echo '<div class="clr"></div>';
		echo '</div>';
	}
}
?>

<?php
$page_data = get_page($pstId);
$content = apply_filters('the_content', $page_data->post_content);
$title = $page_data->post_title;
echo $content;
?>
</div>
<?php get_footer(); ?>