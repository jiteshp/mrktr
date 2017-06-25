<?php
/**
 * Template name: Landing Template
 */
get_header(); ?>

	<div id="content" class="site-content">
		<div class="container">
			<div class="row">
				<main id="site-main" class="main col-xs-12" role="main">
					<?php
					while ( have_posts() ) :
						the_post();
						get_template_part( 'templates/parts/content', 'page' );

						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;
					endwhile;
					?>
				</main>
			</div>
		</div>
	</div>

<?php get_footer(); ?>
