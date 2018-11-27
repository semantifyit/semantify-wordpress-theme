<?php

/**
 * theme setup
 */
function semantify_setup()
{

// This theme uses wp_nav_menu() in two locations.
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'title-tag' );
    register_nav_menus(array(
                           'top'    => __('Top Menu', 'semantify')
                       ));
    add_image_size( 'semantify-featured-image', 2000, 1200, true );
    add_image_size( 'semantify-thumbnail-avatar', 100, 100, true );

    add_theme_support( 'post-thumbnails' );

    // Define and register starter content to showcase the theme on new sites.



    $starter_content = array(

        // Specify the core-defined pages to create and add custom thumbnails to some of them.
        'posts' => array(
            'home',
            'whysemantify' => array(
                'post_type' => 'page',
                'post_name' => 'why-semantify',
                'template' => 'page_templates/why-semantify.php',
                'post_title' => 'Why Semantify',
                'post_content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In congue vulputate convallis. Nullam nec elementum neque. Vivamus placerat viverra justo eget feugiat. Duis eu pellentesque justo.'

            ),
            'services' => array(
                'post_type' => 'page',
                'post_name' => 'services',
                'template' => 'page_templates/services.php',
                'post_title' => 'Services',
                'post_content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In congue vulputate convallis. Nullam nec elementum neque. Vivamus placerat viverra justo eget feugiat. Duis eu pellentesque justo.'
            ),
            'gettingstarted' => array(
                'post_type' => 'page',
                'post_name' => 'getting-started',
                'template' => 'page_templates/getting-started.php',
                'post_title' => 'Getting Started',
                'post_content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In congue vulputate convallis. Nullam nec elementum neque. Vivamus placerat viverra justo eget feugiat. Duis eu pellentesque justo.'
            ),
            'latestnews' => array(
                'post_type' => 'page',
                'post_name' => 'latest-news',
                'template' => 'page_templates/latest-news.php',
                'post_title' => 'Latest news',
                'post_content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In congue vulputate convallis. Nullam nec elementum neque. Vivamus placerat viverra justo eget feugiat. Duis eu pellentesque justo.'
            ),
            'detailedinstructions' => array(
                'post_type' => 'page',
                'post_name' => 'detailed-instructions',
                'template' => 'page_templates/detailed-instructions.php',
                'post_title' => 'Detailed Instructions',
                'post_content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In congue vulputate convallis. Nullam nec elementum neque. Vivamus placerat viverra justo eget feugiat. Duis eu pellentesque justo.'
            ),
            'references' => array(
                'post_type' => 'page',
                'post_name' => 'references',
                'template' => 'page_templates/references.php',
                'post_title' => 'References',
                'post_content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In congue vulputate convallis. Nullam nec elementum neque. Vivamus placerat viverra justo eget feugiat. Duis eu pellentesque justo.'
            ),
            'blog' => array(
                'post_type' => 'page',
                'post_title' => 'Blog',
            )
        ),


        // Default to a static front page and assign the front and posts pages.
        'options' => array(
            'show_on_front' => 'page',
            'page_on_front' => '{{home}}',
            'page_for_posts' => '{{blog}}',
        ),

        // Set the front page section theme mods to the IDs of the core-registered pages.
        'theme_mods' => array(
            'panel_1' => '{{whysemantify}}',
            'panel_2' => '{{services}}',
            'panel_3' => '{{gettingstarted}}',
            'panel_4' => '{{detailedinstructions}}',
            'panel_4' => '{{references}}',
            'color' => '#f00',
        ),

        // Set up nav menus for each of the two areas registered in the theme.
        'nav_menus' => array(
            // Assign a menu to the "top" location.
            'top' => array(
                'name' => __( 'Top Menu', 'semantify' ),
                'items' => array(
                    array(
                        'type' => 'post_type',
                        'object' => 'page',
                        'object_id' => '{{whysemantify}}',
                    ),
                    array(
                        'type' => 'post_type',
                        'object' => 'page',
                        'object_id' => '{{services}}',
                    ),
                    array(
                        'type' => 'post_type',
                        'object' => 'page',
                        'object_id' => '{{getting-started}}',
                    ),array(
                        'type' => 'post_type',
                        'object' => 'page',
                        'object_id' => '{{latest-news}}',
                    ),
                    array(
                        'type' => 'post_type',
                        'object' => 'page',
                        'object_id' => '{{detailedinstructions}}',
                    ),
                    array(
                        'type' => 'post_type',
                        'object' => 'page',
                        'object_id' => '{{references}}',
                    )
                )
            )
        )
    );

    /**
     * Filters Twenty Seventeen array of starter content.
     *
     * @since Twenty Seventeen 1.1
     *
     * @param array $starter_content Array of starter content.
     */

    add_theme_support( 'starter-content', $starter_content );


    //update_option( 'fresh_site',1);

    if(get_option( 'fresh_site')) {


        global $pagenow;
        if ( $pagenow === 'customize.php') {
            global $wp_customize;
            add_action('after_setup_theme', array($wp_customize, 'import_theme_starter_content'), 100);
        }

        /*
        $starter_content_applied = 0;
        $wp_customize = WP_Customize_Manager::import_theme_starter_content( );

        foreach ( $wp_customize->changeset_data() as $setting_id => $setting_params ) {
            if ( ! empty( $setting_params['starter_content'] ) ) {
                $starter_content_applied += 1;
            }
        }
        */

        //remove_theme_mods();
        //echo 33;
        //echo("<br><br><div style='text-align: center;'><h3>fresh</h3></div>");
        update_option( "semantify-theme-content", 0 );
        update_option( "fresh_site", 0 );
    }

}
add_action( 'after_setup_theme', 'semantify_setup' );


function semantify_init_content(){
    $con = get_option('semantify-theme-content');
    //echo("<br><br><div style='text-align: center;'><h3>".$con."</h3></div>");

    if($con==0) {
       set_semantify_content();
    }
}
add_action( 'init', 'semantify_init_content' );

function semantify_custom_meta($slug, $id=-1,$delete=0){

    if($id<0){
        $id=semantify_get_id_by_slug($slug);
    }


    switch($slug){

        case"why-semantify":

            if(!$delete){
                semantify_add_meta($id, "preview-box-1-title","Your Website");
                semantify_add_meta($id, "preview-box-1-text","Lorem ipsum dolor sit amet, consectetur adipiscing elit. In congue vulputate convallis. Nullam nec elementum neque. Vivamus placerat viverra justo eget feugiat. Duis eu pellentesque justo, id lacinia tortor. Aliquam porttitor tellus vitae leo hendrerit, ut fringilla sapien euismod.");
                semantify_add_meta($id, "preview-box-2-title","Semantify.it");
                semantify_add_meta($id, "preview-box-2-text","Lorem ipsum dolor sit amet, consectetur adipiscing elit. In congue vulputate convallis. Nullam nec elementum neque. Vivamus placerat viverra justo eget feugiat. Duis eu pellentesque justo, id lacinia tortor. Aliquam porttitor tellus vitae leo hendrerit, ut fringilla sapien euismod.");
                semantify_add_meta($id, "preview-box-3-title","Rich Snippet");
                semantify_add_meta($id, "preview-box-3-text","Lorem ipsum dolor sit amet, consectetur adipiscing elit. In congue vulputate convallis. Nullam nec elementum neque. Vivamus placerat viverra justo eget feugiat. Duis eu pellentesque justo, id lacinia tortor. Aliquam porttitor tellus vitae leo hendrerit, ut fringilla sapien euismod.");
            } else {
                delete_post_meta($id,"preview-box-1-title");
                delete_post_meta($id,"preview-box-1-text");
                delete_post_meta($id,"preview-box-2-title");
                delete_post_meta($id,"preview-box-2-text");
                delete_post_meta($id,"preview-box-3-title");
                delete_post_meta($id,"preview-box-3-text");
            }
            break;

        case"detailed-instructions":
            if(!$delete){
                semantify_add_meta($id, "detail-1-title","Plugins");
                semantify_add_meta($id, "detail-1-text","Lorem ipsum dolor sit am et, consec tetur adipiscing elit. Vivamus plac erat viverra justo eget feugiat.");
                semantify_add_meta($id, "detail-1-icon","fa-plug");

                semantify_add_meta($id, "detail-2-title","Upload API");
                semantify_add_meta($id, "detail-2-text","Lorem ipsum dolor sit am et, consec tetur adipiscing elit. Vivamus plac erat viverra justo eget feugiat.");
                semantify_add_meta($id, "detail-2-icon","fa-cloud-upload");

                semantify_add_meta($id, "detail-3-title","Publications");
                semantify_add_meta($id, "detail-3-text","Lorem ipsum dolor sit am et, consec tetur adipiscing elit. Vivamus plac erat viverra justo eget feugiat.");
                semantify_add_meta($id, "detail-3-icon","fa-book");

                semantify_add_meta($id, "detail-4-title","Download API");
                semantify_add_meta($id, "detail-4-text","Lorem ipsum dolor sit am et, consec tetur adipiscing elit. Vivamus plac erat viverra justo eget feugiat.");
                semantify_add_meta($id, "detail-4-icon","fa-cloud-download");

            } else {
                delete_post_meta($id,"detail-1-title");
                delete_post_meta($id,"detail-1-text");
                delete_post_meta($id,"detail-1-icon");

                delete_post_meta($id,"detail-2-title");
                delete_post_meta($id,"detail-2-text");
                delete_post_meta($id,"detail-2-icon");

                delete_post_meta($id,"detail-3-title");
                delete_post_meta($id,"detail-3-text");
                delete_post_meta($id,"detail-3-icon");

                delete_post_meta($id,"detail-4-title");
                delete_post_meta($id,"detail-4-text");
                delete_post_meta($id,"detail-4-icon");
            }
            break;

        case"getting-started":
            if(!$delete){
                semantify_add_meta($id, "button-1-title","Instant Annotations");
                semantify_add_meta($id, "button-2-title","Validate an Annotation");
                semantify_add_meta($id, "section-title","Do More with Semantify.it");
                semantify_add_meta($id, "section-text","Lorem ipsum dolor sit am et, consec tetur adipiscing elit. Vivamus plac erat viverra justo eget feugiat.");
                semantify_add_meta($id, "section-button-title","Sign up for Semantify!");

                semantify_add_meta($id, "instant-hash-1","ry0lz3ZVf1G");
                semantify_add_meta($id, "instant-hash-2","SyqlG3b4Mkf");
                semantify_add_meta($id, "instant-hash-3","Byigf2ZEfJf");

                semantify_add_meta($id, "instant-title-1","Annotation Title 1");
                semantify_add_meta($id, "instant-title-2","Annotation Title 2");
                semantify_add_meta($id, "instant-title-3","Annotation Title 3");

            } else {
                delete_post_meta($id,"button-1-title");
                delete_post_meta($id,"button-2-title");
                delete_post_meta($id,"section-title");
                delete_post_meta($id,"section-text");
                delete_post_meta($id,"section-button-title");
                delete_post_meta($id,"instant-hash-1");
                delete_post_meta($id,"instant-hash-2");
                delete_post_meta($id,"instant-hash-3");
                delete_post_meta($id,"instant-title-1");
                delete_post_meta($id,"instant-title-2");
                delete_post_meta($id,"instant-title-3");
            }
            break;

        case"latest-news":
            if(!$delete){
                semantify_add_meta($id, "latest-news-category","news");
            } else {
                delete_post_meta($id,"latest-news-category");
            }
            break;




        case"broker-test":
            if(!$delete){
                semantify_add_meta($id, "bellow-tester","<br/><div class=\"center-align\"><div class=\"claim-text\">
                <h2 class=\"entry-title center\">Grow with Broker Beta</h2>
                <p>Cras id tortor nulla. Lorem ipsum dolor sit amet, consectetur adipiscing elit.  Praesent eget faucibus magna. Integer vel ligula consequat.</p>
            </div>
<a href=\"http://broker.semantify.it\"><button class=\"button-red big\">Register now</button></a></div>");

            } else {
                delete_post_meta($id,"bellow-tester");
            }
            break;

        case"services":

            if(!$delete){
                semantify_add_meta($id, "service-1-title","Domain Specification");
                semantify_add_meta($id, "service-1-icon","fa-home");
                semantify_add_meta($id, "service-1-text","Lorem ipsum dolor sit am et, consec tetur adipiscing elit. Vivamus plac erat viverra justo eget feugiat.");
                semantify_add_meta($id, "service-1-button-title","Read more");
                semantify_add_meta($id, "service-1-button-link","#");

                semantify_add_meta($id, "service-2-title","Annotations Repository");
                semantify_add_meta($id, "service-2-icon","fa-server");
                semantify_add_meta($id, "service-2-text","Lorem ipsum dolor sit am et, consec tetur adipiscing elit. Vivamus plac erat viverra justo eget feugiat.");
                semantify_add_meta($id, "service-2-button-title","Read more");
                semantify_add_meta($id, "service-2-button-link","#");

                semantify_add_meta($id, "service-3-title","Easy Deployment");
                semantify_add_meta($id, "service-3-icon","fa-sitemap");
                semantify_add_meta($id, "service-3-text","Lorem ipsum dolor sit am et, consec tetur adipiscing elit. Vivamus plac erat viverra justo eget feugiat.");
                semantify_add_meta($id, "service-3-button-title","Read more");
                semantify_add_meta($id, "service-3-button-link","#");

                semantify_add_meta($id, "service-4-title","Usage Statistics");
                semantify_add_meta($id, "service-4-icon","fa-line-chart");
                semantify_add_meta($id, "service-4-text","Lorem ipsum dolor sit am et, consec tetur adipiscing elit. Vivamus plac erat viverra justo eget feugiat.");
                semantify_add_meta($id, "service-4-button-title","Read more");
                semantify_add_meta($id, "service-4-button-link","#");

            } else {
                delete_post_meta($id,"service-1-title");
                delete_post_meta($id,"service-1-icon");
                delete_post_meta($id,"service-1-text");
                delete_post_meta($id,"service-1-button-title");
                delete_post_meta($id,"service-1-button-link");

                delete_post_meta($id,"service-2-title");
                delete_post_meta($id,"service-2-icon");
                delete_post_meta($id,"service-2-text");
                delete_post_meta($id,"service-2-button-title");
                delete_post_meta($id,"service-2-button-link");

                delete_post_meta($id,"service-3-title");
                delete_post_meta($id,"service-3-icon");
                delete_post_meta($id,"service-3-text");
                delete_post_meta($id,"service-3-button-title");
                delete_post_meta($id,"service-3-button-link");

                delete_post_meta($id,"service-4-title");
                delete_post_meta($id,"service-4-icon");
                delete_post_meta($id,"service-4-text");
                delete_post_meta($id,"service-4-button-title");
                delete_post_meta($id,"service-4-button-link");
            }

            break;

        case"references":

            if(!$delete){
                semantify_add_meta($id, "reference-1-title","Mayrhofen");
                semantify_add_meta($id, "reference-1-text","Lorem ipsum dolor sit amet, consectetur adipiscing elit. In congue vulputate convallis. Nullam nec elementum neque. Vivamus placerat viverra justo eget feugiat. Duis eu pellentesque justo, id lacinia tortor. Aliquam porttitor tellus vitae leo hendrerit, ut fringilla sapien euismod.");
                semantify_add_meta($id, "reference-1-img",get_bloginfo('template_directory')."/assets/img/mayrhofen-z.jpg");

                semantify_add_meta($id, "reference-2-title","Seefeld");
                semantify_add_meta($id, "reference-2-text","Lorem ipsum dolor sit amet, consectetur adipiscing elit. In congue vulputate convallis. Nullam nec elementum neque. Vivamus placerat viverra justo eget feugiat. Duis eu pellentesque justo, id lacinia tortor. Aliquam porttitor tellus vitae leo hendrerit, ut fringilla sapien euismod.");
                semantify_add_meta($id, "reference-2-img",get_bloginfo('template_directory')."/assets/img/seefeld.jpg");

                semantify_add_meta($id, "reference-3-title","Tirol");
                semantify_add_meta($id, "reference-3-text","Lorem ipsum dolor sit amet, consectetur adipiscing elit. In congue vulputate convallis. Nullam nec elementum neque. Vivamus placerat viverra justo eget feugiat. Duis eu pellentesque justo, id lacinia tortor. Aliquam porttitor tellus vitae leo hendrerit, ut fringilla sapien euismod.");
                semantify_add_meta($id, "reference-3-img",get_bloginfo('template_directory')."/assets/img/tirol.jpg");

            } else {
                delete_post_meta($id,"reference-1-title");
                delete_post_meta($id,"reference-1-text");
                delete_post_meta($id,"reference-1-img");

                delete_post_meta($id,"reference-2-title");
                delete_post_meta($id,"reference-2-text");
                delete_post_meta($id,"reference-2-img");

                delete_post_meta($id,"reference-3-title");
                delete_post_meta($id,"reference-3-text");
                delete_post_meta($id,"reference-3-img");
            }

            break;

        default:
            if(!$delete){
                semantify_add_meta($id, "perex","Lorem ipsum dolor sit amet, consectetur adipiscing elit. In congue vulputate convallis. Nullam nec elementum neque. Vivamus placerat viverra justo eget feugiat. Duis eu pellentesque justo, id lacinia tortor. Aliquam porttitor tellus vitae leo hendrerit, ut fringilla sapien euismod.");
            } else {
                delete_post_meta($id,"perex");
            }
            break;


    }

    if($delete){
      //  delete_post_meta($id,"semantify-meta-loaded-do-not-edit");
        delete_post_meta($id,"semantify-meta-template-do-not-edit");
    }else {
        //semantify_add_meta($id, "semantify-meta-loaded-do-not-edit", "1");
        semantify_add_meta($id, "semantify-meta-template-do-not-edit", $slug);
    }
}


add_action( 'save_post_post', function( $post_ID )
{
    if( 'auto-draft' === get_post_status( $post_ID )
        &&  post_type_supports( get_post_type( $post_ID ), 'custom-fields' )
    )
        add_post_meta( $post_ID, 'perex', '' );
} );


/**
 * creates pages if not extists
 */
function set_semantify_content(){

    echo("<br><br><div style='text-align: center;'><h3>Reset successfull</h3></div>");

    $panels = array("why-semantify","services","getting-started","latest-news","detailed-instructions","references");
    update_option( "semantify-theme-panels", json_encode($panels) );

    semantify_custom_meta("why-semantify");
    semantify_custom_meta("services");
    semantify_custom_meta("getting-started");
    semantify_custom_meta("detailed-instructions");
    semantify_custom_meta("references");

    //settings for the web

    update_option('header-section-0-title-top','LET`S MAKE YOUR WEB');
    update_option('header-section-0-title-bellow','SEMANTIC READY');
    update_option('header-section-0-text','Semantify.it gives your website power to be perfectly understandable by search engines  using schema.org structured data with easy-to-use creation and deployment.');
    update_option('header-section-0-button','Start right away!');
    update_option('header-section-0-button-url','#');
    update_option('header-section-0-menu-button','Login');
    update_option('header-section-0-menu-button-url','/login');


    //footer
    update_option('footer-annotations-delivered-text','Annotations delivered by semantify');
    update_option('footer-made-in','MADE WITH <i class="fa fa-heart sematify-red" aria-hidden="true"></i> IN TIROL!');

    update_option('footer-section-1-title','About Semantify');
    update_option('footer-section-1-text','Lorem ipsum dolor sit amet, consectetur adipiscing elit. In congue vulputate convallis. Nullam nec elementum neque. Vivamus placerat viverra justo eget feugiat. Duis eu pellentesque justo, id lacinia tortor. Aliquam porttitor tellus vitae leo hendrerit, ut fringilla sapien euismod.');
    update_option('footer-section-1-address','Techniker Straße 1
6020 Innsbruck
Austria');
    update_option('footer-section-1-phone','+43 677 123 456 78');
    update_option('footer-section-1-email','info@semantify.it');

    update_option('footer-section-2-title','Get connected');
    update_option('footer-section-2-text',' Lorem ipsum dolor sit amet, consectetur adipiscing elit. In congue vulputate convallis.');
    update_option('footer-section-2-twitter','semantify');
    update_option('footer-section-2-facebook','');
    update_option('footer-section-2-googleplus','');
    update_option('footer-section-2-youtube','');
    update_option('footer-section-2-email','');


    update_option('footer-section-3-title','Another claim');
    update_option('footer-section-3-text',' Lorem ipsum dolor sit amet, consectetur adipiscing elit. In congue vulputate convallis.');


    update_option( "semantify-theme-content", 1 );
}

function semantify_get_id_by_slug($page_slug) {
    $page = get_page_by_path($page_slug);
    if ($page) {
        return $page->ID;
    } else {
        return null;
    }
}

function semantify_add_meta($id, $key, $value){
    if ( ! add_post_meta( $id, $key, $value, true ) ) {
        update_post_meta( $id, $key, $value );
    }
}


function add_last_nav_item($items) {
    return $items .= '<li><a href="'.get_option("header-section-0-menu-button-url").'" class="button-parent"><button class="button-transparent" id="button-login-text">'.get_option("header-section-0-menu-button").'</button></a></li>';
}
add_filter('wp_nav_menu_items','add_last_nav_item');





//loads meta boxes into new page
function save_book_meta( $post_id, $post, $update ) {

    /*
     * In production code, $slug should be set only once in the plugin,
     * preferably as a class property, rather than in each function that needs it.
     */

    $last_template = get_post_meta($post_id, "semantify-meta-template-do-not-edit");

    if(count($last_template)>0){
        $last_template=$last_template[0];
    }else{
        $last_template="";
    }

    $template_file = get_page_template_slug( $post_id );
    if($template_file==""){
        $template_loaded="";
    }else {
        $template_file = explode("/", $template_file);
        $template = explode(".", $template_file["1"]);
        $template_loaded = $template[0];
    }


    if($last_template!=$template_loaded){
        semantify_custom_meta($last_template, $post_id, 1);
        semantify_custom_meta($template_loaded, $post_id, 0);
    }




}
add_action( 'save_post', 'save_book_meta', 10, 3 );


// Replaces the excerpt "Read More" text by a link
function new_excerpt_more($more) {
    global $post;
    return '<br><a class="moretag" href="'. get_permalink($post->ID) . '"> Read more...</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');




require get_parent_theme_file_path( '/inc/template-settings.php' );
require get_parent_theme_file_path( '/template-parts/navigation/Single_Page_Walker.php');


?>