<?php

 
use Carbon_Fields\Block;
use Carbon_Fields\Field;
 
add_action( 'after_setup_theme', 'tc' );
 
function text_img() {
	Block::make( 'Texto e imagem' )
		->add_fields( array(
			Field::make('text', 'menulink', 'Link para o menu'),
			Field::make( 'rich_text', 'title', 'Texto' ),
			Field::make( 'image', 'img', 'Imagem' ),

		) )
		->set_render_callback( function ( $block ) {
 
			// ob_start();
			?>
 			<div id="$block['menulink'];"class="text-img">
 				<div class="rich-text">
 						<?php echo  $block['title']; ?>
 				</div>
				<img src="<?php echo wp_get_attachment_image_src($block['img'], "ap_carousel_image_desktop_full_no_crop")[0]; ?>">
 			</div>
 
			<?php
 
			// return ob_get_flush();
		} );
}
add_action( 'carbon_fields_register_fields', 'text_img' );