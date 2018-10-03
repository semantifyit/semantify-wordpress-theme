<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
    <?php wp_head(); ?>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="<?php echo get_bloginfo( 'description' ); ?>">
    <link href="<?php echo get_bloginfo('template_directory'); ?>/assets/css/fontawesome-all.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="<?php echo get_bloginfo('template_directory'); ?>/assets/css/materialicons.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="<?php echo get_bloginfo('template_directory'); ?>/assets/css/roboto.css" type="text/css" rel="stylesheet" media="screen,projection">


    <link href="<?php echo get_bloginfo('template_directory'); ?>/components/materialize/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- Base MasterSlider style sheet -->
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/components/mastersider1.5.0/quick-start/masterslider/style/masterslider.css" />
    <!-- MasterSlider default skin -->
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/components/mastersider1.5.0/quick-start/masterslider/skins/default/style.css" />
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/components/highlight/styles/default.css" />
    <!-- user styles -->
    <link href="<?php echo get_bloginfo('template_directory'); ?>/style.css?v=1.1.9<?php echo rand(0,99)?>" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="<?php echo get_bloginfo('template_directory'); ?>/components/instant-annotator-master/css/instantAnnotations.css" type="text/css" rel="stylesheet" media="screen,projection">

    <title><?php echo get_bloginfo( 'name' ); ?></title>

    <style type="text/css">

        .parallax-img.services{
            background: url(<?php echo get_bloginfo('template_directory'); ?>/assets/img/banner-gauss.jpg) no-repeat;
            background-position: -760px -752px;
        }

        .parallax-img.details{
            background: url(<?php echo get_bloginfo('template_directory'); ?>/assets/img/banner-gauss.jpg) no-repeat;
            background-position: -271px -502px;
        }

        .ms-skin-default .ms-bullet {
            background: url(<?php echo get_bloginfo('template_directory'); ?>/assets/img/bullet_empty.svg) no-repeat;
        }

        .ms-skin-default .ms-bullet.ms-bullet-selected {
            background: url(<?php echo get_bloginfo('template_directory'); ?>/assets/img/bullet_full.svg) no-repeat;
        }

        .example .bussines .picture{
            background: url(<?php echo get_bloginfo('template_directory'); ?>/assets/img/tyrol-hotel.jpg) no-repeat center center;
        }

        <?php if(is_front_page()) { ?>
        .semantify .header-img{
            background: url(<?php echo get_bloginfo('template_directory'); ?>/assets/img/banner.jpg) no-repeat center center;
            background-size: cover;
        }

        .parallax-img.footer{
            background: url(<?php echo get_bloginfo('template_directory'); ?>/assets/img/banner-gauss.jpg) no-repeat;
            background-position: -670px -220px;
        }

        <?php } else { ?>
        .semantify .header-img{
            background: url(<?php echo get_bloginfo('template_directory'); ?>/assets/img/banner-gauss.jpg) no-repeat center center;
            background-position: -<? echo rand(2,7).rand(0,9).rand(0,9);?>px -<? echo rand(2,9).rand(0,9).rand(0,9);?>px;
        }
        .parallax-img.footer{
            background: url(<?php echo get_bloginfo('template_directory'); ?>/assets/img/banner-gauss.jpg) no-repeat;
            background-position: -<? echo rand(200,760)?>px -<? echo rand(2,5).rand(0,9).rand(0,9);?>px;
        }
        <?php } ?>

    </style>

</head>

<body class="semantify <?php if(!is_front_page()) {echo "not-front";}else{echo "is-front";} ?>" id="top">

<div class="top-container header-img">

    <?php if ( has_nav_menu( 'top' ) ) : ?>

        <?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>

    <?php endif; ?>

    <?php if(is_front_page()) { ?>
        <div class="row">
            <div class="col s12">
                <div class="center capiton-box">
                    <div class="ms-layer ms-caption">
                        <h1 class="slide"><?php echo get_option('header-section-0-title-top'); ?></h1>
                        <h1 class="slide bellow"><?php echo get_option('header-section-0-title-bellow'); ?></h1>
                        <br/>
                        <div class="slide-box"><h4 class="slide"><?php echo get_option('header-section-0-text'); ?></h4>
                        </div>
                        <br/><br/><br/>
                        <a href="<?php echo get_option('header-section-0-button-url'); ?>">
                            <button class="button-red"><?php echo get_option('header-section-0-button'); ?></button>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <?php } ?>

    <div class="inner">
        <div class="row">
            <div class="col s6 links"><div class="triangel links"></div><div class="halbe links"></div></div>
            <div class="col s6 rechts"><div class="triangel rechts"></div><div class="halbe rechts"></div></div>
        </div>
    </div>
</div>