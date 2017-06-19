<?php get_header(); ?>

	<div id="content" class="site-content">
		<div class="container">
			<div class="row">
				<main id="site-main" class="main col-xs-12 col-md-8" role="main">
					<section class="nothing-found hentry">
						<header class="entry-header">
							<h1 class="entry-title"><?php esc_html_e( 'Page not found', 'mrktr' ); ?></h1>
						</header>

						<div class="entry-content">
							<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search?', 'mrktr' ); ?></p>

							<?php get_search_form(); ?>
						</div>
					</section>
				</main>

				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>

<?php get_footer(); ?>
