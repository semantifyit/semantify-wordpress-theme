<?php
/**
 * Template Name: Why Semantify
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


    <div class="container" id="whysemantify">
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
                <div class="col s12 l4 m4 lef">
                    <div class="preview-box">
                        <h2 class="">
                            <?php echo get_post_meta($post->ID, 'preview-box-1-title',1); ?>
                        </h2>
                        <p>
                            <?php echo get_post_meta($post->ID, 'preview-box-1-text',1); ?>
                        </p>
                        <div class="example">
                            <div class="tyrol center-align">
                                <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/img/tyrol-hotel-logo.png" class="responsive-img">
                                <div class="menu" >
                                    <a href="#">Accomodation</a> - <a href="#">Eat & Drink</a>  - <a href="#">Location</a> - <a href="#">Infos</a> - <a href="#">Booking</a>
                                </div>
                                <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/img/tyrol-hotel.jpg" class="responsive-img">
                                <div class="h1">Hotel Tyrol</div>
                                <p>
                                    This secluded, laid-back hotel is 4.5 km from the Olympiaregion Seefeld ski and hiking area, and 5 km from the Wildsee Lake and the Golfclub Seefeld Reith.<br>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s12 l4 m4 cente">
                    <div class="preview-box">
                        <h2 class="">
                            <?php echo get_post_meta($post->ID, 'preview-box-2-title',1); ?>
                        </h2>
                        <p>
                            <?php echo get_post_meta($post->ID, 'preview-box-2-text',1); ?>
                        </p>
                        <div class="example">
                            <div class="semantifyit">
                                <div class="rectangle">
                                    <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/img/logo-small.svg">
                                    <div class="hide-on-med-and-down">annotation.jsonld</div>
                                </div>
                                <div class="code">
                                    <code class="json">{
                                        "@context" : "http://schema.org",
                                        "@type" : "Hotel",
                                        "name" : "Hotel Pension Tyrol",
                                        "url" : "http://www.hotel-tyrol.at/",
                                        "address" : {
                                        "postalCode" : "6100",
                                        "addressCountry" : "Austria",
                                        "@type" : "PostalAddress",
                                        "addressLocality" : "Brochweg 28",
                                        "addressRegion" : "Tyrol",
                                        "streetAddress" : "Brochweg 28, 6100 Seefeld in Tirol, Austria"
                                        },
                                        "aggregateRating" : {
                                        "ratingValue" : 5,
                                        "bestRating" : 5,
                                        "reviewCount" : 20,
                                        "@type" : "AggregateRating"
                                        },</code>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s12 l4 m4 righ">
                    <div class="preview-box">
                        <h2 class="">
                            <?php echo get_post_meta($post->ID, 'preview-box-2-title',1); ?>
                        </h2>
                        <p>
                            <?php echo get_post_meta($post->ID, 'preview-box-2-text',1); ?>
                        </p>
                        <div class="example">
                            <div class="bussines">
                                <div class="picture"></div>
                                <div class="cont">
                                    <h1>Hotel Pension Tyrol</h1>
                                    <div class="rating"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i> <span>20 Google reviews</span></div>
                                    <div class="star-hotel">3-star hotel</div>
                                    <div class="line"></div>
                                    <div class="address">
                                        <b>Address:</b> Broch-Weg 28, 6100 Telfs, Austria
                                    </div>
                                    <div class="address">
                                        <b>Phone:</b> +43 5212 4729
                                    </div>
                                    <div class="line"></div>
                                    <h2>Hotel details</h2>
                                    <p class="details">
                                        This secluded, laid-back hotel is 4.5 km from the Olympiaregion Seefeld ski and hiking area, and 5 km from the Wildsee Lake and the Golfclub Seefeld Reith. …
                                    </p>
                                    <div class="amenity row">
                                        <div class="col s4">
                                            <i class="fa fa-wifi" aria-hidden="true"></i> <span>Free Wi-Fi</span>
                                        </div>
                                        <div class="col s4">
                                            <i class="fa fa-coffee" aria-hidden="true"></i> <span>Free Breakfast</span>
                                        </div>
                                        <div class="col s4">
                                            <i class="fa fa-child" aria-hidden="true"></i> <span>Kid-friendly</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
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