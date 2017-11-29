<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header();
the_post();
?>

    <article id="<?php  global $post; echo $post->post_name; ?>"  >


        <div class="container references" id="references">
            <div class="section">
                <!--   Icon Section   -->

                <div class="row">
                    <div class="col s12">
                        <div class="nadpis center">
                            <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                        </div>
                        <div class="claim-box center-align">
                            <div class="claim-text ">
                                <p>
                                    <?php echo get_post_meta($post->ID, 'perex',1); ?>
                                </p>
                            </div>
                            <div class="page-text">
                                <?php
                                /* translators: %s: Name of current post */
                                the_content();
                                ?>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

        </div>

    </article>




<?php get_footer();
