<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make( 'nav_menu_item', __( 'Menu Settings' ) )
    ->add_fields( array(
        Field::make( 'color', 'crb_color', __( 'Color' ) ),
    ));


add_filter( 'nav_menu_link_attributes', 'crb_nav_menu_link_attributes', 10, 4 );
function crb_nav_menu_link_attributes( $atts, $item, $args, $depth ) {
    $crb_color = carbon_get_nav_menu_item_meta( $item->ID, 'crb_color' );
    $atts['style'] = ! empty( $crb_color ) ? 'color: ' . $crb_color . '; ' : '';

    return $atts;
}


add_action( 'carbon_fields_register_fields', 'nav_menu_link_attributes' );