<?php
/**
 * Template Name: Broker Tester
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
                            <br/>
                            <div id="brokertest"></div>
                            <?php echo get_post_meta($post->ID, 'bellow-tester',1); ?>
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