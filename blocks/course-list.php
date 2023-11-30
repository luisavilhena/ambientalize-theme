<?php
 
use Carbon_Fields\Block;
use Carbon_Fields\Field;
 
add_action( 'after_setup_theme', 'studio_viridiana' );
 
function course_list() {
	Block::make( 'Lista de Cursos' )
		->add_fields( array(
			Field::make('rich_text', 'obs', 'Observação'),
			Field::make('complex', 'icons', 'Ícones')
			  ->add_fields(array(
			    Field::make('image', 'icon', 'Ícone'),
			  )),
			Field::make( 'select', 'select', __( 'Background options' ) )
				->set_options( array(
					'color-green' => ('verde'),
					'color-light-blue' => ('azul_claro'),
					'color-light-blue-2' => ('azul_claro_2'),
					'color-dark-blue' => ('azul_escuro'),
					'color-dark-blue-2' => ('azul_escuro_2'),
				) ),
			Field::make('complex', "list", "Cursos")
			->add_fields(array(
			Field::make('text', 'title', 'Título'),
			Field::make('rich_text', 'rich_text', 'Descrição'),
				Field::make('complex', 'topic', 'Itens')
				  ->add_fields(array(
				    Field::make('text', 'text', 'Título'),
				    Field::make('rich_text', 'more_text', 'Descrição'),
				    Field::make('text', 'hour', 'Texto ao lado do relógio'),
				    Field::make('image', 'icon', 'Ícone'),
				    Field::make('text', 'link', 'Link do botão'),
				    Field::make('text', 'text_link', 'Texto do botão'),
				    Field::make('text', 'more_text_btn', 'Texto acima do botão'),
				  ))
				  ->set_layout('tabbed-vertical')
			))
			  ->set_layout('tabbed-vertical')
		) )
		->set_render_callback( function ( $block ) {
 
			// ob_start();
			?>
			<div class="course-list">
				<?php foreach ($block['list'] as $items) : ?>
				<div class="course-list__item">
					<div class="course-list__item__box <?php echo $block['select']; ?>">
						<div class="course-list__item__box__title">
							<h4><?php echo $items['title']; ?></h4>
							<p><?php echo $items['rich_text']; ?></p>
						</div>
						<div class="material-icons-round">
						arrow_drop_down
						</div>
					</div>
					<div class="course-list__item__dropdown">
						<?php foreach ($items['topic'] as $item) : ?>
							<div class="course-list__item__dropdown__item">
								<div class="course-list__item__dropdown__item-text">
									<div class="course-list__item__dropdown__item-text__title">
										<h4 class=""><?php echo $item['text']?></h4>
										<img src="<?php echo get_template_directory_uri() ?>/resources/icons/relogio.png">
										<h5><?php echo $item['hour']?></h5>
									</div>
									<p><?php echo $item['more_text']; ?></p>
								</div>
								<img src="<?php echo wp_get_attachment_image_src($item['icon'],'image_desktop_full_no_crop')[0]; ?>">
								<div class="course-list__item__dropdown__item__btn">
									<h5><?php echo $item['more_text_btn']; ?></h5>
									<a target="_blank" class="btn" href="<?php echo $item['link']; ?>">
										<?php echo $item['text_link']; ?>
									</a>
								</div>
							</div>
						<?php endforeach;  ?>
					</div>
				</div>
				<?php endforeach;  ?>
			</div>
			<div class="course-list__obs">
				<div class="rich-text">
					<?php echo $block['obs']; ?>
				</div>
				<div>
					<?php foreach ($block['icons'] as $icon) : ?>
					<img src="<?php echo wp_get_attachment_image_src($icon['icon'],'image_desktop_full_no_crop')[0]; ?>">
					<?php endforeach; ?>
				</div>
			</div>

			<?php
 
			// return ob_get_flush();
		} );
}
add_action( 'carbon_fields_register_fields', 'course_list' );