<?php
/**
 * Template Name: Latest News
 *
 * @package    semantify
 * @subpackage semantify-theme
 * @since      1.0
 * @version    1.0
 */


if (!is_front_page()) {
    get_header();
    the_post();
}


?>
    <article id="<?php global $post;
    echo $post->post_name; ?>">


        <div class="container" id="latest-news">

            <div class="section">
                <!--   Icon Section   -->

                <div class="row">
                    <div class="col s12">
                        <div class="nadpis center">
                            <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
                        </div>
                        <div class="claim-box center-align">
                            <div class="claim-text ">
                                <p>
                                    <?php
                                    /* translators: %s: Name of current post */
                                    the_content();
                                    ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col s12">
                        <div class="claim-box center-align">

                            <?php
                            // the query
                            $the_query = new WP_Query(array(
                                                          'category_name'  => get_post_meta($post->ID,
                                                                                            'latest-news-category', 1),
                                                          'posts_per_page' => 3,
                                                      ));
                            ?>

                            <?php if ($the_query->have_posts()) : ?>
                                <?php while ($the_query->have_posts()) : $the_query->the_post();

                                    $link = get_permalink($post);
                                    ?>

                                    <a href="<?php echo $link; ?>"><h2
                                                style="text-align:left;"><?php the_title(); ?></h2></a>
                                    <div class="claim-text ">

                                        <?php the_excerpt(); ?>

                                    </div>

                                <?php endwhile; ?>
                                <?php wp_reset_postdata(); ?>

                            <?php else : ?>
                                <p><?php __('No News'); ?></p>
                            <?php endif; ?>

                        </div>
                    </div>
                </div>

            </div>

        </div>
    </article>


<?php

if (!is_front_page()) {
    get_footer();
}

?>