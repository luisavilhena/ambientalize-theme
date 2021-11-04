<?php

get_header(); ?>

<main class="structure-container">
	<div class="structure-container__content">
		<div class="project-list">
			<?php while (have_posts()) : the_post(); ?>
			<a href="<?php the_permalink(); ?>" class="blog-list-item">
				<div class="project-list__item">
					<?php the_post_thumbnail('ap_carousel_image_desktop_full_no_crop'); ?>
				</div>
			  <h2 class="">
			    <?php the_title(); ?>
			  </h2>
			</a>
			<?php endwhile; ?>
		</div>
	</div>

</main>


<?php
get_footer();
