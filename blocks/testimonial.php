<?php

use Carbon_Fields\Block;
use Carbon_Fields\Field;
 
add_action( 'after_setup_theme', 'ambientalize' );
 
function testimonial() {
	Block::make( 'Depoimentos' )
		->add_fields( array(
			Field::make('complex', 'items', 'Depoimentos')
			->add_fields(array(
				Field::make( 'textarea', 'text', 'Depoimento' ),
				Field::make( 'text', 'author', 'Author' ),
			))

		) )
		->set_render_callback( function ( $block ) {
 
			// ob_start();
			?>

				<div id ="depoimentos"class="testimonial">
					<div class="testimonial__items">
						<?php foreach ($block['items'] as $items) : ?>
							<div class="testimonial__item">
								<img src="<?php echo get_template_directory_uri() ?>/resources/icons/balao.png">
								<div class="testimonial__item__text">
									<p><?php echo  $items['text']; ?></p>
									<h4>
										<?php echo  $items['author']; ?>
									</h4>
								</div>
							</div>
						<?php endforeach;  ?>
					</div>
					<div class="btn btn-testimonial">
						ver mais
					</div>
				</div>
			<?php
 
			// return ob_get_flush();
		} );
}
add_action( 'carbon_fields_register_fields', 'testimonial' );