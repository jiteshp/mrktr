<?php get_header(); ?>

	<div id="content" class="site-content">
		<div class="container">
			<div class="row">
				<main id="site-main" class="main col-xs-12 col-md-8" role="main">
					<?php
					while ( have_posts() ) :
						the_post();
						get_template_part( 'templates/parts/content', 'single' );

						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;
					endwhile;
					?>
				</main>

				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>

<?php get_footer(); ?>
