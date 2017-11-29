<?php
/**
 * Template Name: Getting started
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


    <div class="container" id="gettingstarted">
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
            <div class="row">
                <div class="col s12 buttons-box">
                    <button class="button-transparent red big"><?php echo get_post_meta($post->ID, 'button-1-title',1); ?></button>
                    <button class="button-transparent red big"><?php echo get_post_meta($post->ID, 'button-2-title',1); ?></button>
                </div>
            </div>
            <div class="row line">
                <div class="col s12 line-fix">
                    <div class="">
                        <h2 class="line"><?php echo get_post_meta($post->ID, 'section-title',1); ?></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s12 buttons-box">
                    <div class="claim-box small center-align">
                        <div class="claim-text ">
                            <p>
                                <?php echo get_post_meta($post->ID, 'section-text',1); ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s12 buttons-box">
                    <button class="button-red big"><?php echo get_post_meta($post->ID, 'section-button-title',1); ?></button>
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