<?php
get_header();

echo '<main class="main">';

	if( have_posts() ) :

		while( have_posts() ) : the_post();

			get_template_part('templates/partials/content', 'index');

		endwhile;

	else :

		get_template_part('templates/partials/content', 'none');

	endif;

echo '</main>';

get_footer();
?>
