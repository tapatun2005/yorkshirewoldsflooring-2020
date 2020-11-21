<?php get_header(); ?>
<div id="mainpage">
<h1 class="top">Wood Flooring Glossary</h1>
<p><?php echo get_post_meta($post->ID, 'intro', true) ?></p>

<h2>Solid Wood Flooring – Glossary</h2>

<p>We have compiled a glossary of the terms used in the wood flooring industry to help you understand the products you are buying. If you have any questions about our products, please don’t hesitate to contact us at <a href="mailto:info@yorkshirewoldsflooring.co.uk">info@yorkshirewoldsflooring.co.uk</a></p>

<?php

$args = array('post_type'=>'jw_glossary', 'posts_per_page'=>'-1', 'orderby' => 'title', 'order' => 'asc');
$loop = new WP_Query($args);
echo "<ul>";
while ($loop->have_posts()):
	$loop->the_post();
	echo "<li><a href='" . get_permalink() . "' title='";
	echo the_title();
	echo "'>";
	echo the_title();
	echo "</a></li>";
endwhile;
echo "</ul>";

?>

</div>
<?php get_footer(); ?>