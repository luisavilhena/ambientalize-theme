<?php

	function ambientalize(){
		wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/style.css', array(), '1.0.0', 'all');
		wp_enqueue_script('customjs',  get_template_directory_uri() . '/js/index.js', array(), NULL, false );
        wp_enqueue_script('slickjs',  get_template_directory_uri() . '/slick/slick.min.js', array(), NULL, false);
        wp_enqueue_style('slickcss', get_template_directory_uri() . '/slick/slick.css', array(), '1.8.0', 'all');
        wp_enqueue_style('slicktheme', get_template_directory_uri() . '/slick/slick-theme.css', array(), '1.8.0', 'all');
	}


add_action('wp_enqueue_scripts', 'ambientalize');



use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
function crb_attach_theme_options() {
    Container::make( 'theme_options', __( 'Theme Options', 'crb' ) )
        ->add_fields( array(
            Field::make( 'text', 'email', 'E-mail' ),
            Field::make( 'text', 'phone', 'Phone' ),
            Field::make( 'text', 'instagram', 'Instagram' ),
            Field::make( 'text', 'linkedin', 'Linkedin' ),
            Field::make( 'text', 'facebook', 'facebook' ),
            Field::make( 'text', 'description', 'Descrição' ),
        ) );
}


add_action( 'after_setup_theme', 'crb_load' );
function crb_load() {
	//define o caminho para o carbon-fields
	define(
		'Carbon_Fields\URL',
		get_template_directory_uri() . '/vendor/htmlburger/carbon-fields'
	);
  require_once('vendor/autoload.php');
  \Carbon_Fields\Carbon_Fields::boot();
}
add_action('after_setup_theme', 'register_carbon_fields');
function register_carbon_fields() {
	require_once('blocks/load.php');
}

///////////
///MENU////
///////////


/**
 * Main menu navigation
 */
register_nav_menus(array(
  'main-menu' => 'Menu principal',
));

add_action( 'wp_head', 'add_viewport_meta_tag' , '1' );

function add_viewport_meta_tag() {
    echo '<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">';
}

///////////
////post///
///////////
function my_theme_setup(){
    add_theme_support('post-thumbnails');
    add_image_size('cc__thumbnail_a4_horizontal_crop', 999, 700, array('center', 'center'));
}

add_action('after_setup_theme', 'my_theme_setup');

//////////
//excerpt//
///////////
add_post_type_support( 'page', 'excerpt' );


////////
//vcard///
///////////
function _thz_enable_vcard_upload( $mime_types ){
    $mime_types['vcf'] = 'text/vcard';
    $mime_types['vcard'] = 'text/vcard';
    return $mime_types;
}
add_filter('upload_mimes', '_thz_enable_vcard_upload' );

function mytheme_add_custom_image_sizes() {
    add_image_size( 'vertical-a', 95, 117, true );
    add_image_size( 'vertical-b', 524, 462, true);
    add_image_size('image_desktop_full_no_crop', 2100 , 1500, false);
}
add_action('after_setup_theme', 'mytheme_add_custom_image_sizes' );

/**
* Removes or edits the 'Protected:' part from posts titles
*/
function the_title_trim($title) {

    $title = attribute_escape($title);

    $findthese = array(
        '#Protected:#',
        '#Private:#',
        '#Protegido:#'
    );

    $replacewith = array(
        '', // What to replace "Protected:" with
        '' // What to replace "Private:" with
    );

    $title = preg_replace($findthese, $replacewith, $title);
    return $title;
}
add_filter('the_title', 'the_title_trim');

// enable gutenberg for woocommerce
function activate_gutenberg_product( $can_edit, $post_type ) {
 if ( $post_type == 'product' ) {
        $can_edit = true;
    }
    return $can_edit;
}
add_filter( 'use_block_editor_for_post_type', 'activate_gutenberg_product', 10, 2 );

// enable taxonomy fields for woocommerce with gutenberg on
function enable_taxonomy_rest( $args ) {
    $args['show_in_rest'] = true;
    return $args;
}
// add_filter( 'woocommerce_taxonomy_args_product_cat', 'enable_taxonomy_rest' );
// add_filter( 'woocommerce_taxonomy_args_product_tag', 'enable_taxonomy_rest' );

/////////// 
/**
 * Change number of products that are displayed per page (shop page)
 */
add_filter( 'loop_shop_per_page', 'new_loop_shop_per_page', 20 );

// function new_loop_shop_per_page( $cols ) {
//   // $cols contains the current number of products per page based on the value stored on Options –> Reading
//   // Return the number of products you wanna show per page.
//   $cols = 3;
//   return $cols;
// }