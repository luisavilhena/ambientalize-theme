<?php

 
use Carbon_Fields\Block;
use Carbon_Fields\Field;
 
add_action( 'after_setup_theme', 'ambientalize' );
 
function ambientalize_title() {
	Block::make( 'Título' )
		->add_fields( array(
			Field::make( 'text', 'title', 'Título' ),
			Field::make( 'text', 'description', 'Subtítulo' ),

		) )
		->set_render_callback( function ( $block ) {
 
			// ob_start();
			?>
 			<div class="title">
 				<h2>
 					<img src="<?php echo get_template_directory_uri() ?>/resources/icons/adorno.png">
 					<?php echo  $block['title']; ?>
 				</h2>
 				<h4>
 					<?php echo  $block['description']; ?>
 				</h4>
 			</div>
 
			<?php
 
			// return ob_get_flush();
		} );
}
add_action( 'carbon_fields_register_fields', 'ambientalize_title' );