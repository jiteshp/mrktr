<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<header id="masthead" class="site-header" role="banner">
		<div class="container">
			<div class="row">
				<div id="site-branding" class="branding col-xs-12 col-md-4">
					<?php the_custom_logo(); ?>

					<?php if ( is_front_page() && is_home() ) : ?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php else : ?>
						<p class="site-title h1"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php endif; ?>
				</div>

				<?php if ( has_nav_menu( 'primary-menu' ) ) : ?>
					<a href="#primary-menu" class="primary-menu-toggle"><span class="dashicons dashicons-menu"></span></a>

					<nav id="site-menu" class="primary-menu col-xs-12 col-md-8" role="navigation">
						<?php
						wp_nav_menu( array(
							'container' 	 => false,
							'depth' 	 	 => 1,
							'theme_location' => 'primary-menu',
						) );
						?>
					</nav>
				<?php endif; ?>
			</div>
		</div>

		<?php if ( is_front_page() && is_active_sidebar( 'front' ) ) : ?>
			<aside id="front-page-widgets" class="front-page-widgets" role="complementary">
				<?php dynamic_sidebar( 'front' ); ?>
			</aside>
		<?php endif; ?>
	</header>
