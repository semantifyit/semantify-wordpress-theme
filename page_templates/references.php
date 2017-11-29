<?php
/**
 * Template Name: References
 *
 * @package semantify
 * @subpackage semantify-theme
 * @since 1.0
 * @version 1.0
 */


if(!is_front_page()) {
    get_header();
    the_post();
}
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
                                <?php
                                /* translators: %s: Name of current post */
                                the_content();
                                ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row references">
                <div class="col s12 l4 m4 lef">
                    <div class="preview-box">
                        <div class="inside-preview-box">
                            <div class="img-box">
                                <img src="<?php echo get_post_meta($post->ID, 'reference-1-img', 1); ?>" class="responsive-img">
                            </div>
                            <h2 class="">
                                <?php echo get_post_meta($post->ID, 'reference-1-title', 1); ?>
                            </h2>
                            <p>
                                <?php echo get_post_meta($post->ID, 'reference-1-text', 1); ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col s12 l4 m4 cente">
                    <div class="preview-box">
                        <div class="inside-preview-box">
                            <div class="img-box">
                                <img src="<?php echo get_post_meta($post->ID, 'reference-2-img', 1); ?>" class="responsive-img">
                            </div>
                            <h2 class="">
                                <?php echo get_post_meta($post->ID, 'reference-2-title', 1); ?>
                            </h2>
                            <p>
                                <?php echo get_post_meta($post->ID, 'reference-2-text', 1); ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col s12 l4 m4 righ">
                    <div class="preview-box">
                        <div class="inside-preview-box">
                            <div class="img-box">
                                <img src="<?php echo get_post_meta($post->ID, 'reference-3-img', 1); ?>" class="responsive-img">
                            </div>
                            <h2 class="">
                                <?php echo get_post_meta($post->ID, 'reference-3-title', 1); ?>
                            </h2>
                            <p>
                                <?php echo get_post_meta($post->ID, 'reference-3-text', 1); ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</article>



<?php

if(!is_front_page()){
    get_footer();
}

?>