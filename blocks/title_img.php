<?php

 
use Carbon_Fields\Block;
use Carbon_Fields\Field;
 
add_action( 'after_setup_theme', 'tc' );
 
function tc_title_img() {
	Block::make( 'Título e imagem' )
		->add_fields( array(
			Field::make( 'text', 'title', 'Título' ),
			Field::make( 'image', 'img', 'Imagem' ),
			Field::make( 'text', 'link', 'Link' ),

		) )
		->set_render_callback( function ( $block ) {
 
			// ob_start();
			?>
 			<div class="title-image">
 				<a target="_blank" href="<?php echo  $block['link']; ?>">
 					<div>
 						<img src="<?php echo wp_get_attachment_image_src($block['img'], "ap_carousel_image_desktop_full_no_crop")[0]; ?>">
 					</div>
 					<div class="">
 						<div>
 							<h2><?php echo  $block['title']; ?></h2>
 						</div>
 					</div>
 				</a>
 			</div>
 
			<?php
 
			// return ob_get_flush();
		} );
}
add_action( 'carbon_fields_register_fields', 'tc_title_img' );