<?php
 
use Carbon_Fields\Block;
use Carbon_Fields\Field;
 
add_action( 'after_setup_theme', 'studio_viridiana' );
 
function columns_image_text_box() {
	Block::make( 'Columns box' )
		->add_fields( array(
			Field::make( 'select', 'select', __( 'Background options' ) )
				->set_options( array(
					'structure-color-light-pink' => light,
					'structure-color-green' => dark,
				) ),
			Field::make('complex', "columns", "Columns")
			->add_fields(array(
			Field::make('image', 'img', 'Image'),
			Field::make('rich_text', 'rich_text', 'Text description'),
				Field::make('complex', 'topic', 'Topic')
				  ->add_fields(array(
				    Field::make('text', 'text', 'Text'),
				    Field::make('rich_text', 'more_text', 'Text'),
				  ))
			))
			  ->set_layout('tabbed-vertical')
		) )
		->set_render_callback( function ( $block ) {
 
			// ob_start();
			?>
			<div class="image-columns  image-columns--special-item">
				<?php foreach ($block['columns'] as $columns) : ?>
				<div class="image-columns__item">
					<div class="image-columns__item__img" style="background-image: url('<?php echo wp_get_attachment_image_src($columns['img'],'ap_image_desktop_full_no_crop')[0]; ?>');">
					</div>
					<div class="image-columns__item__description rich-text"><?php echo $columns['rich_text']; ?></div>

					<div class="text-box <?php echo $block['select']?>" style="background-color: <?php echo $block['background']?>">
						<?php foreach ($columns['topic'] as $topic) : ?>
						<div class="text-box__item">
							<h4><?php echo $topic['text']; ?></h4>
							<?php if($topic['more_text']) :  ?>
							<div class="text-box__item__more">
								<div class="text-box__item__more-button">
									<div>
										<span></span>
										<span></span>
									</div>
								</div>
							</div>
							<div class="text-box__item__more-text rich-text">
								<?php echo $topic['more_text']; ?>
							</div>
							<?php endif; ?>
						</div>
						<?php endforeach;  ?>
					</div>


				</div>
				<?php endforeach;  ?>
			</div>

			<?php
 
			// return ob_get_flush();
		} );
}
add_action( 'carbon_fields_register_fields', 'columns_image_text_box' );