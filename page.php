<?php

get_header(); ?>

<?php while (have_posts()) : the_post(); ?>

<main id="page-default" class="">
  <div class="">
  	<div>
  		<?php the_content(); ?>  		
  	</div>
  </div>
</main>
<?php endwhile; ?>

<?php
get_footer();

