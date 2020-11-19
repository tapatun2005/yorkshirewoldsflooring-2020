<?php get_header() ?>
<div id="mainpage">
<?php
$pstId = $post->ID;
$page_data = get_page($pstId);
$content = apply_filters('the_content', $page_data->post_content);
$title = $page_data->post_title;
echo "<h1 class=\"top\">".$title."</h1>";
echo "<a href=\"/glossary/\">Back to Glossary</a>";
echo $content;
?>
</div>
<?php get_footer() ?>