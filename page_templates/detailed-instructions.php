<?php
/**
 * Template Name: Detailed Instructions
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

//check if our metaboxes are created




?>
<article id="<?php  global $post; echo $post->post_name; ?>"  >

    <div class="details parallax-img" id="details">
        <div class="outer special">
            <div class="triangeldown"></div>
        </div>
        <div class="container section">
            <div class="row bigger">
                <div class="col s12">
                    <div class="nadpis center">
                        <h1 class="white">
                            <?php the_title( '<h1 class="white">', '</h1>' ); ?>
                        </h1>
                    </div>
                    <div class="claim-box center-align">
                        <div class="claim-text whit">
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

            <div class="row jobs">
                <div class="col s12 l6">
                    <div class="icon-block">
                        <div class="icon-block-table">
                            <h2 class="center icon"><i class="fa <?php echo get_post_meta($post->ID, 'detail-1-icon',1); ?>" aria-hidden="true"></i></h2>
                        </div>
                    </div>
                    <div class="details-text">
                        <h5 class="future">
                            <?php echo get_post_meta($post->ID, 'detail-1-title',1); ?>
                        </h5>
                        <p class="light center">
                            <?php echo get_post_meta($post->ID, 'detail-1-text',1); ?>
                        </p>
                    </div>
                </div>
                <div class="col s12 l6">
                    <div class="icon-block">
                        <div class="icon-block-table">
                        <h2 class="center icon"><i class="fa <?php echo get_post_meta($post->ID, 'detail-2-icon',1); ?>" aria-hidden="true"></i></h2>
                        </div>
                    </div>
                    <div class="details-text">
                        <h5 class="future">
                            <?php echo get_post_meta($post->ID, 'detail-2-title',1); ?>
                        </h5>
                        <p class="light center">
                            <?php echo get_post_meta($post->ID, 'detail-2-text',1); ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="row jobs">
                <div class="col s12 l6">
                    <div class="icon-block">
                        <div class="icon-block-table">
                        <h2 class="center icon"><i class="fa <?php echo get_post_meta($post->ID, 'detail-3-icon',1); ?>" aria-hidden="true"></i></h2>
                        </div>
                    </div>
                    <div class="details-text">
                        <h5 class="future">
                            <?php echo get_post_meta($post->ID, 'detail-3-title',1); ?>
                        </h5>
                        <p class="light center">
                            <?php echo get_post_meta($post->ID, 'detail-3-text',1); ?>
                        </p>
                    </div>
                </div>
                <div class="col s12 l6">
                    <div class="icon-block">
                        <div class="icon-block-table">
                        <h2 class="center icon"><i class="fa <?php echo get_post_meta($post->ID, 'detail-4-icon',1); ?>" aria-hidden="true"></i></h2>
                        </div>
                    </div>
                    <div class="details-text">
                        <h5 class="future">
                            <?php echo get_post_meta($post->ID, 'detail-4-title',1); ?>
                        </h5>
                        <p class="light center">
                            <?php echo get_post_meta($post->ID, 'detail-4-text',1); ?>
                        </p>
                    </div>
                </div>
            </div>


        </div>
        <div class="inner special">
            <div class="row">
                <div class="col s6 links"><div class="triangel links"></div><div class="halbe links"></div></div>
                <div class="col s6 rechts"><div class="triangel rechts"></div><div class="halbe rechts"></div></div>
            </div>
        </div>
    </div>

</article>

<?php

if(!is_front_page()){
    get_footer();
}

?>