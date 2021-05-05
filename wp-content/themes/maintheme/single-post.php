<?php
get_header();

if( have_posts()){
    $cat = get_the_category($post->ID);
    /*print_r($cat);*/
    foreach ($cat as $post_cat){

        if($post_cat->term_id == 15){
            get_template_part('templates/posts/post', $post_cat->slug);
        }
        if($post_cat->term_id == 9){
            get_template_part('templates/posts/post', $post_cat->slug);
        }

    }

}

get_footer();