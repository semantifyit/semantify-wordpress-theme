<?php

/* Custom nav walker */

class Single_Page_Walker extends Walker_Nav_Menu
{
    public $sub=0;

    function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
    {
        $attributes;
        global $wp_query;
        $indent = ($depth) ? str_repeat("\t", $depth) : '';
        $class_names = $value = '';
        $classes = empty($item->classes) ? array() : (array)$item->classes;
        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item));
        $class_names = ' class="' . esc_attr($class_names) . '"';
        $output .= $indent . '<li id="menu-item-' . $item->ID . '"' . $value . $class_names . '>';
        $attributes      = !empty($item->attr_title) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
        $attributes     .= !empty($item->target) ? ' target="' . esc_attr($item->target) . '"' : '';
        $attributes     .= !empty($item->xfn) ? ' rel="' . esc_attr($item->xfn) . '"' : '';

        $id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
        //$id = $id ? ' id="' . esc_attr( $id ) . '"' : '';

        if ($item->object == 'page') {
            $varpost = get_post($item->object_id);
            if (is_front_page()) {

                if( $depth == 1){
                    $attributes .= !empty($item->url) ? ' href="' . esc_attr($item->url) . '"' : '';
                }else{
                    $attributes .= ' href="#' . $varpost->post_name . '" data-id="' . $varpost->post_name . '"';
                }

            } else {
                $attributes .= ' href="' . home_url() . '/#' . $varpost->post_name . '" ';
            }
        } else {
            $attributes .= !empty($item->url) ? ' href="' . esc_attr($item->url) . '"' : '';
        }

        if( in_array( 'menu-item-has-children', $classes) && ($args->menu_id != "nav-mobile" )) {
            $this->sub++;
            $classes[] = "dropdown-button";
            $attributes .= ' class="dropdown-button" data-activates="dropdown' .$this->sub. '" data-constrainwidth="false" data-hover="true" data-beloworigin="true" data-induration="250" data-outduration="150"';
        }

        $item_output = $args->before;
        $item_output .= '<a' . $attributes . '>';
        $item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID);
        $item_output .= $args->link_after;
        $item_output .= '</a>';
        $item_output .= $args->after;
        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args, $id);
    }


    function start_lvl(&$output, $depth = 0, $args = Array())
    {
        $arg = "";
        if(($args->menu_id != "nav-mobile" )){
            $arg = "id=\"dropdown".$this->sub."\" class=\"dropdown-content z-depth-0\"";
        }
        $indent = str_repeat("\t", $depth);
        $output .= "\n".$indent."<ul ".$arg.">\n";
    }
}

?>