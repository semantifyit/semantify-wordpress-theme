<?php
/**
 * Template Name: Services
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

    <div class="services parallax-img" id="services">


        <div class="outer special">
            <div class="triangeldown"></div>
        </div>


        <div class="container section">
            <div class="row">
                <div class="col s12">
                    <div class="nadpis center">
                        <?php the_title( '<h1 class="white">', '</h1>' ); ?>
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
                <?php

                    for($i=1; $i<=4; $i++) {

                        ?>
                        <div class="col s12 m6 l3">
                            <div class="icon-block">
                                <h2 class="center icon"><i
                                            class="fa <?php echo get_post_meta($post->ID, 'service-'.$i.'-icon', 1); ?>"
                                            aria-hidden="true"></i></h2>

                                <h5 class="center"><?php echo get_post_meta($post->ID, 'service-'.$i.'-title', 1); ?></h5>

                                <p class="light center"><?php echo get_post_meta($post->ID, 'service-'.$i.'-text', 1); ?></p>
                                <div class=""><a
                                            href="<?php echo get_post_meta($post->ID, 'service-'.$i.'-button-link', 1); ?>">
                                        <button class="button-transparent small"><?php echo get_post_meta($post->ID,
                                                                                                          'service-'.$i.'-button-title',
                                                                                                          1); ?></button>
                                    </a></div>
                            </div>
                        </div>
                        <?php
                    }

                ?>
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