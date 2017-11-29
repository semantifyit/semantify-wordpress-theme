<?php

get_header(); ?>

<?php
// Get each of our panels and show the post data.
$panels = json_decode(get_option('semantify-theme-panels'));
$count = count($panels);
if ( (false !== $panels ) && ($count>0)) {

    //remove_theme_mods();
    //var_dump(get_theme_mods());

    $post_id_list = array();
    for ($i = 0; $i < $count; $i++) {
        $post = $panels[$i];

        if (is_numeric($post)) {
            $post_id_list[] = $post;
        } else {
            $post_id = semantify_get_id_by_slug($post);
            $post_id_list[] = $post_id;
        }
    }


        $args = array(
            'post_type' => 'page',
            'post__in' => $post_id_list,
            'post_status' => 'publish',
            'orderby' => 'post__in',
        );
        // The Query
        global $wp_query;
        $my_query = new WP_Query( $args );
        //query_posts($args);

        if ( $my_query->have_posts() ) {
            while ($my_query->have_posts()) : $my_query->the_post();


                $template = get_page_template_slug();

                include($template);

                //get_template_part($template);
            endwhile;
        }


}
else {

    if (have_posts()) {
        while (have_posts()) : the_post();
            get_template_part('template-parts/page/content', 'front-page');
        endwhile;
    } else { // I'm not sure it's possible to have no posts when this page is shown, but WTH.
        get_template_part('template-parts/post/content', 'none');

    }
}

?>


<?php get_footer();
