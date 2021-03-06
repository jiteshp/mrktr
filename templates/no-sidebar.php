<?php
/**
 * Template name: No Sidebar Template
 */
get_header(); ?>

	<div id="content" class="site-content">
		<div class="container">
			<div class="row">
				<main id="site-main" class="main col-xs-12 col-md-8 col-md-offset-2" role="main">
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
