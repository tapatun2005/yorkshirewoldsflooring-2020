<?php get_header(); ?>
<div id="mainpage">
<h1 class="top">Wood Flooring Glossary</h1>
<p><?php echo get_post_meta($post->ID, 'intro', true) ?></p>

<h2>Solid Wood Flooring – Glossary</h2>

<p>We have compiled a glossary of the terms used in the wood flooring industry to help you understand the products you are buying. If you have any questions about our products, please don’t hesitate to contact us at
<script language="JavaScript">
document.write('<a hre'+'f="m'+'ai'+'lto:'+'%6d%61%72%74%79%6e%40%6a%75%73%74%77%6f%6f%64%66%6c%6f%6f%72%69%6e%67%2e%63%6f%6d">&#109;&#97;&#114;&#116;&#121;&#110;&#64;&#106;&#117;&#115;&#116;&#119;&#111;&#111;&#100;&#102;&#108;&#111;&#111;&#114;&#105;&#110;&#103;&#46;&#99;&#111;&#109;<\/a>');
</script>.

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