<?php
/**
 * Displays top navigation
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>

<nav class="z-depth-0" role="navigation">
    <div class="nav-wrapper container row">

        <div class="row">
            <div class="col s12 hide-on-med-and-up" id="mobile-logo" style="text-align: right;"><a id="logo-container right" href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo"><img src="<?php echo get_bloginfo('template_directory'); ?>/assets/img/logo.svg"></a></div>

            <div class="col m2 l2 hide-on-small-and-down med-up-menu" ><a id="logo-container" href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo"><img src="<?php echo get_bloginfo('template_directory'); ?>/assets/img/logo.svg"></a></div>
            <div class="col m10 l10 med-up-menu">
                <div class="menu menu-box">

                    <?php wp_nav_menu( array(
                                           'theme_location' => 'top',
                                           'menu_id'        => 'top-menu',
                                           'menu_class' => "menu-center hide-on-small-and-down",
                                           'walker'=> new Single_Page_Walker,
                                       ) ); ?>



                </div>
            </div>

        </div>

        <?php wp_nav_menu( array(
                               'theme_location' => 'top',
                               'menu_id'        => 'nav-mobile',
                               'menu_class' => "side-nav"
                           ) ); ?>


        <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
</nav>