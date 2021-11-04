<?php

use Carbon_Fields\Block;
use Carbon_Fields\Field;
 
add_action( 'after_setup_theme', 'tc' );
 
function tc_gallery () {
	Block::make( 'TC-Galeria' )
		->add_fields( array(
			Field::make('image', 'img', 'Foto inicial'),
			Field::make('complex', 'galeria', 'Galeria')
			  ->add_fields(array(
			    Field::make('image', 'img_item', 'Imagem')
			  ))
			  ->set_layout('tabbed-vertical')
		) )
		->set_render_callback( function ( $block ) {
 
			// ob_start();
			?>
 
			<div id="gallery" class="gallery">
				<div class="gallery__destak">
					<img src="<?php echo wp_get_attachment_image_src($block['img'],'ap_image_2_desktop_full_no_crop')[0]; ?>">
				</div>
				<div class="gallery__items">
				<?php foreach ($block['galeria'] as $galeria) : ?>
				<?php if ($galeria['img_item']) : ?>
					<img id="img" src="<?php echo wp_get_attachment_image_src($galeria['img_item'],'ap_image_2_desktop_full_no_crop')[0]; ?>">
				<?php endif; ?>
				<?php endforeach;  ?>
				</div>
			</div>
			<?php
 
			// return ob_get_flush();
		} );
}
add_action( 'carbon_fields_register_fields', 'tc_gallery' );