<?php
 
use Carbon_Fields\Block;
use Carbon_Fields\Field;
 
add_action( 'after_setup_theme', 'tc' );
 
function tc_carousel() {
	Block::make( 'Carrossel' )
		->add_fields( array(
			Field::make('complex', 'carousel', 'Carrossel')
			  ->add_fields(array(
			    Field::make('image', 'img', 'Imagem'),
			    Field::make('rich_text', 'text', 'Descrição'),
			    Field::make('text', 'btn', 'Texto do botão'),
			    Field::make('text', 'link', 'Link')
			  ))
			  ->set_layout('tabbed-vertical')
		) )
		->set_render_callback( function ( $block ) {
 
			// ob_start();
			?>
 
			<div class="carousel">
				<?php foreach ($block['carousel'] as $carousel) : ?>
					<?php if ($carousel['img']) : ?>
				<div class="item" style ="background-image: url('<?php echo wp_get_attachment_image_src($carousel['img'],'image_desktop_full_no_crop')[0]; ?>');">
					<?php if($carousel['text']):?>
					<div class="item__description rich-text">
						<?php echo ($carousel['text']) ?>
						<?php if (!empty($carousel['link'])): ?>
							<a target="_blank" href="<?php echo esc_url($carousel['link']); ?>" class="btn">
								<?php echo esc_html($carousel['btn']); ?>
							</a>
						<?php endif; ?>

					</div>
					<?php endif; ?>
				</div>
					<?php endif; ?>
				<?php endforeach;  ?>
			</div>
			<?php
 
			// return ob_get_flush();
		} );
}
add_action( 'carbon_fields_register_fields', 'tc_carousel' );