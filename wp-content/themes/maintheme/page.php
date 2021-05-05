<?php
get_header();

//Write template for post by his slug
$post_slug = $post->post_name;
get_template_part('templates/pages/page',$post_slug);

get_footer();
