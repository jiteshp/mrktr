<?php get_header(); ?>

	<div id="content" class="site-content">
		<div class="container">
			<div class="row">
				<main id="site-main" class="main col-xs-12 col-md-8" role="main">
					<?php if ( is_home() && ! is_front_page() ) : ?>
						<header class="page-header screen-reader-text">
							<h1 class="page-title h3"><?php single_post_title(); ?></h1>
						</header>
					<?php endif; ?>

					<?php
					if ( have_posts() ) :
						while ( have_posts() ) :
							the_post();
							get_template_part( 'templates/parts/content', get_post_format() );
						endwhile;

						the_posts_pagination( array(
							'prev_text' => esc_html__( '&larr;', 'mrktr' ),
							'next_text' => esc_html__( '&rarr;', 'mrktr' ),
						) );
					else :
						get_template_part( 'templates/parts/content', 'none' );
					endif;
					?>
				</main>

				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>

<?php get_footer(); ?>
