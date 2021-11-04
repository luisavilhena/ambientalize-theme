<?php
 
use Carbon_Fields\Block;
use Carbon_Fields\Field;
 
add_action( 'after_setup_theme', 'tc' );
 
function tc_text_link_list() {
	Block::make( 'Lista de links' )
		->add_fields( array(
			Field::make('text', 'color-link', 'Cor do link'),
			Field::make('complex', 'links', 'Links')
			  ->add_fields(array(
			    Field::make('text', 'text', 'Texto'),
			    Field::make('text', 'color-text', 'Cor do Texto'),
			    Field::make('text', 'text-link', 'Texto do link'),
			    Field::make('text', 'link', 'Link'),
			  ))
		) )
		->set_render_callback( function ( $block ) {
 
			// ob_start();
			?>
 
			<div class="link-list">
				<?php foreach ($block['links'] as $links) : ?>
				<div class="link-list__item">
					<a style="color:<?php echo $block['color-link']; ?> " href="<?php echo $links['link']; ?>">
						<h3 style="color:<?php echo $links['color-text']; ?> "><?php echo $links['text']; ?></h3>
						<?php echo $links['text-link']; ?>
					</a>
				</div>
				<?php endforeach;  ?>
			</div>
			<?php
 
			// return ob_get_flush();
		} );
}
add_action( 'carbon_fields_register_fields', 'tc_text_link_list' );