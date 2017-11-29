<?php


function custom_settings_add_menu() {

    add_menu_page( 'Semantify Theme Settings', 'Semantify Theme Settings', 'manage_options', 'theme-options-for-semantify', 'custom_settings_page', null, 99 );
}
add_action( 'admin_menu', 'custom_settings_add_menu' );





function setting_semantify_theme_panels() { ?>
    <textarea type="text" class="big" name="semantify-theme-panels"  /><?php echo get_option( 'semantify-theme-panels' ); ?></textarea>
<?php }

function setting_header_section_0_title_top() { ?>
    <input type="text" class="big" name="header-section-0-title-top"  value="<?php echo get_option( 'header-section-0-title-top' ); ?>" />
<?php }

function setting_header_section_0_title_bellow() { ?>
    <input type="text" class="big" name="header-section-0-title-bellow"  value="<?php echo get_option( 'header-section-0-title-bellow' ); ?>" />
<?php }

function setting_header_section_0_text() { ?>
    <textarea type="text" class="big" name="header-section-0-text"  /><?php echo get_option( 'header-section-0-text' ); ?></textarea>

<?php }

function setting_header_section_0_button() { ?>
    <input type="text" class="big" name="header-section-0-button"  value="<?php echo get_option( 'header-section-0-button' ); ?>" />
<?php }

function setting_header_section_0_button_url() { ?>
    <input type="text" class="big" name="header-section-0-button-url"  value="<?php echo get_option( 'header-section-0-button-url' ); ?>" />
<?php }

function setting_header_section_0_background() { ?>
    <input type="text" class="big" name="header-section-0-button-background"  value="<?php echo get_option( 'header-section-0-button-background' ); ?>" />
<?php }

function setting_header_section_0_menu_button() { ?>
    <input type="text" class="big" name="header-section-0-menu-button"  value="<?php echo get_option( 'header-section-0-menu-button' ); ?>" />
<?php }

function setting_header_section_0_menu_button_url() { ?>
    <input type="text" class="big" name="header-section-0-menu-button-url"  value="<?php echo get_option( 'header-section-0-menu-button-url' ); ?>" />
<?php }





function setting_footer_annotations_delivered_text() { ?>
    <input type="text" class="big" name="footer-annotations-delivered-text" value="<?php echo get_option( 'footer-annotations-delivered-text' ); ?>" />
<?php }

function setting_footer_made_in() { ?>
    <textarea type="text" class="big" name="footer-made-in"  /><?php echo get_option( 'footer-made-in' ); ?></textarea>
<?php }


function setting_footer_section_1_title() { ?>
    <input type="text" class="big" name="footer-section-1-title"  value="<?php echo get_option( 'footer-section-1-title' ); ?>" />
<?php }

function setting_footer_section_1_text() { ?>
    <textarea type="text" class="big" name="footer-section-1-text"  /><?php echo get_option( 'footer-section-1-text' ); ?></textarea>
<?php }

function setting_footer_section_1_address() { ?>
    <textarea type="text" class="big" name="footer-section-1-address"  /><?php echo get_option( 'footer-section-1-address' ); ?></textarea>
<?php }

function setting_footer_section_1_phone() { ?>
    <input type="text" class="big" name="footer-section-1-phone"  value="<?php echo get_option( 'footer-section-1-phone' ); ?>" />
<?php }

function setting_footer_section_1_email() { ?>
    <input type="text" class="big" name="footer-section-1-email"  value="<?php echo get_option( 'footer-section-1-email' ); ?>" />
<?php }

function setting_footer_section_2_title() { ?>
    <input type="text" class="big" name="footer-section-2-title"  value="<?php echo get_option( 'footer-section-2-title' ); ?>" />
<?php }

function setting_footer_section_2_text() { ?>
    <textarea type="text" class="big" name="footer-section-2-text"  /><?php echo get_option( 'footer-section-2-text' ); ?></textarea>
<?php }

function setting_footer_section_2_twitter() { ?>
    <input type="text" class="big" name="footer-section-2-twitter"  value="<?php echo get_option( 'footer-section-2-twitter' ); ?>" />
<?php }

function setting_footer_section_2_facebook() { ?>
    <input type="text" class="big" name="footer-section-2-facebook"  value="<?php echo get_option( 'footer-section-2-facebook' ); ?>" />
<?php }

function setting_footer_section_2_email() { ?>
    <input type="text" class="big" name="footer-section-2-email"  value="<?php echo get_option( 'footer-section-2-email' ); ?>" />
<?php }

function setting_footer_section_2_youtube() { ?>
    <input type="text" class="big" name="footer-section-2-youtube"  value="<?php echo get_option( 'footer-section-2-youtube' ); ?>" />
<?php }

function setting_footer_section_2_googleplus() { ?>
    <input type="text" class="big" name="footer-section-2-googleplus"  value="<?php echo get_option( 'footer-section-2-googleplus' ); ?>" />
<?php }



function setting_footer_section_3_title() { ?>
    <input type="text" class="big" name="footer-section-3-title"  value="<?php echo get_option( 'footer-section-3-title' ); ?>" />
<?php }

function setting_footer_section_3_text() { ?>
    <textarea type="text" class="big" name="footer-section-3-text"  /><?php echo get_option( 'footer-section-3-text' ); ?></textarea>
<?php }

function reset_settings_0_all() {
    ?>
    <input type="text" class="big" name="fresh_site"  value="<?php echo get_option( 'fresh_site' ); ?>" />
<?php }




function semantify_sanitization($option)
{
    //sanitize
    $option = sanitize_text_field($option);
    return $option;
}




function custom_settings_page() {

    ?>
    <div class="wrap">
        <h1>Semantify Theme Settings</h1>

        <?php

        for($i=0; $i<1;$i++){
            ?>
                    <form method="post" action="options.php">
                        <?php
                        settings_fields( 'page-section-'.$i );
                        do_settings_sections( 'theme-options-for-semantify-page-'.$i );
                        submit_button();
                        ?>
                    </form>
            <?php
        }

        ?>


        <?php

            for($i=0; $i<1;$i++){

            ?>
            <form method="post" action="options.php">
                <?php
                settings_fields( 'header-section-'.$i );
                do_settings_sections( 'theme-options-for-semantify-header-'.$i );
                submit_button();
                ?>
            </form>
            <?php
        }

        ?>

        <?php

        for($i=0; $i<4;$i++){
            ?>

                <form method="post" action="options.php">
                    <?php
                    settings_fields( 'footer-section-'.$i );
                    do_settings_sections( 'theme-options-for-semantify-'.$i );
                    submit_button();
                    ?>
                </form>
            <?php
            }

        ?>

        <?php

        for($i=0; $i<1;$i++){
            ?>

            <form method="post" action="options.php">
                <?php
                settings_fields( 'reset-settings-'.$i );
                do_settings_sections( 'theme-option-for-semantify-reset-'.$i );
                submit_button();
                ?>
            </form>
            <?php
        }

        ?>





    </div>
    <style>
        input.big, textarea.big{
            width:500px;
        }
    </style>
    <?php
}



function custom_settings_page_setup() {

    add_settings_section( 'page-section-0', 'Main Page Order', null, 'theme-options-for-semantify-page-0' );
    add_settings_field( 'semantify-theme-panels', 'Front-page Panels slugs', 'setting_semantify_theme_panels', 'theme-options-for-semantify-page-0', 'page-section-0' );
    register_setting('page-section-0', 'semantify-theme-panels');


    add_settings_section( 'header-section-0', 'Header', null, 'theme-options-for-semantify-header-0' );
    add_settings_field( 'header-section-0-title-top', 'Title top', 'setting_header_section_0_title_top', 'theme-options-for-semantify-header-0', 'header-section-0' );
    register_setting('header-section-0', 'header-section-0-title-top');
    add_settings_field( 'header-section-0-title-bellow', 'Title bellow', 'setting_header_section_0_title_bellow', 'theme-options-for-semantify-header-0', 'header-section-0' );
    register_setting('header-section-0', 'header-section-0-title-bellow');
    add_settings_field( 'header-section-0-text', 'Claim', 'setting_header_section_0_text', 'theme-options-for-semantify-header-0', 'header-section-0' );
    register_setting('header-section-0', 'header-section-0-text');
    add_settings_field( 'header-section-0-button', 'Button text', 'setting_header_section_0_button', 'theme-options-for-semantify-header-0', 'header-section-0' );
    register_setting('header-section-0', 'header-section-0-button');
    add_settings_field( 'header-section-0-button-url', 'Button text', 'setting_header_section_0_button_url', 'theme-options-for-semantify-header-0', 'header-section-0' );
    register_setting('header-section-0', 'header-section-0-button-url');
    add_settings_field( 'header-section-0-menu-button', 'Menu Button text', 'setting_header_section_0_menu_button', 'theme-options-for-semantify-header-0', 'header-section-0' );
    register_setting('header-section-0', 'header-section-0-menu-button');
    add_settings_field( 'header-section-0-menu-button-url', 'Menu Button url', 'setting_header_section_0_menu_button_url', 'theme-options-for-semantify-header-0', 'header-section-0' );
    register_setting('header-section-0', 'header-section-0-menu-button-url');



    add_settings_section( 'footer-section-0', 'Footer', null, 'theme-options-for-semantify-0' );
    add_settings_field( 'footer-annotations-delivered-text', 'Annotations Delivered Text', 'setting_footer_annotations_delivered_text', 'theme-options-for-semantify-0', 'footer-section-0' );
    register_setting('footer-section-0', 'footer-annotations-delivered-text');
    add_settings_field( 'footer-made-in', 'Made in claim', 'setting_footer_made_in', 'theme-options-for-semantify-0', 'footer-section-0' );
    register_setting('footer-section-0', 'footer-made-in');

    add_settings_section( 'footer-section-1', 'Left Column', null, 'theme-options-for-semantify-1' );
    add_settings_field( 'footer-section-1-title', 'Title', 'setting_footer_section_1_title', 'theme-options-for-semantify-1', 'footer-section-1' );
    register_setting('footer-section-1', 'footer-section-1-title');
    add_settings_field( 'footer-section-1-text', 'Text', 'setting_footer_section_1_text', 'theme-options-for-semantify-1', 'footer-section-1' );
    register_setting('footer-section-1', 'footer-section-1-text');
    add_settings_field( 'footer-section-1-address', 'Address', 'setting_footer_section_1_address', 'theme-options-for-semantify-1', 'footer-section-1' );
    register_setting('footer-section-1', 'footer-section-1-address');
    add_settings_field( 'footer-section-1-phone', 'Phone', 'setting_footer_section_1_phone', 'theme-options-for-semantify-1', 'footer-section-1' );
    register_setting('footer-section-1', 'footer-section-1-phone');
    add_settings_field( 'footer-section-1-email', 'Email', 'setting_footer_section_1_email', 'theme-options-for-semantify-1', 'footer-section-1' );
    register_setting('footer-section-1', 'footer-section-1-email');

    add_settings_section( 'footer-section-2', 'Middle Column', null, 'theme-options-for-semantify-2' );
    add_settings_field( 'footer-section-2-title', 'Title', 'setting_footer_section_2_title', 'theme-options-for-semantify-2', 'footer-section-2' );
    register_setting('footer-section-2', 'footer-section-2-title');
    add_settings_field( 'footer-section-2-text', 'Text', 'setting_footer_section_2_text', 'theme-options-for-semantify-2', 'footer-section-2' );
    register_setting('footer-section-2', 'footer-section-2-text');
    add_settings_field( 'footer-section-2-twitter', 'Twitter', 'setting_footer_section_2_twitter', 'theme-options-for-semantify-2', 'footer-section-2' );
    register_setting('footer-section-2', 'footer-section-2-twitter');
    add_settings_field( 'footer-section-2-facebook', 'Facebook', 'setting_footer_section_2_facebook', 'theme-options-for-semantify-2', 'footer-section-2' );
    register_setting('footer-section-2', 'footer-section-2-facebook');
    add_settings_field( 'footer-section-2-youtube', 'Youtube', 'setting_footer_section_2_youtube', 'theme-options-for-semantify-2', 'footer-section-2' );
    register_setting('footer-section-2', 'footer-section-2-youtube');
    add_settings_field( 'footer-section-2-email', 'Email', 'setting_footer_section_2_email', 'theme-options-for-semantify-2', 'footer-section-2' );
    register_setting('footer-section-2', 'footer-section-2-email');
    add_settings_field( 'footer-section-2-googleplus', 'Google plus', 'setting_footer_section_2_googleplus', 'theme-options-for-semantify-2', 'footer-section-2' );
    register_setting('footer-section-2', 'footer-section-2-googleplus');


    add_settings_section( 'footer-section-3', 'Right Column', null, 'theme-options-for-semantify-3' );
    add_settings_field( 'footer-section-3-title', 'Title', 'setting_footer_section_3_title', 'theme-options-for-semantify-3', 'footer-section-3' );
    register_setting('footer-section-3', 'footer-section-3-title');
    add_settings_field( 'footer-section-3-text', 'Text', 'setting_footer_section_3_text', 'theme-options-for-semantify-3', 'footer-section-3' );
    register_setting('footer-section-3', 'footer-section-3-text');

    add_settings_section( 'reset-settings-0', 'Core things', null, 'theme-option-for-semantify-reset-0' );
    add_settings_field( 'fresh_site', 'Reset theme to default settings', 'reset_settings_0_all', 'theme-option-for-semantify-reset-0', 'reset-settings-0' );
    register_setting('reset-settings-0', 'fresh_site');


}


add_action( 'admin_init', 'custom_settings_page_setup' );
