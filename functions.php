<?php
/**
 * Content width
 *
 * Sets content with based on the theme's design.
 *
 * @since 1.0.0
 */
function mrktr_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'mrktr_content_width', 600 );
}

add_action( 'after_setup_theme', 'mrktr_content_width' );

/**
 * Theme features
 *
 * Adds support for various theme features.
 *
 * @since 1.0.0
 */
function mrktr_setup() {
	load_theme_textdomain( 'mrktr' );

	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array(
		'caption',
		'comment-form',
		'comment-list',
		'gallery',
		'search-form',
	) );
	add_theme_support( 'custom-logo', array(
		'header-text' => 'site-title',
		'flex-width'  => true,
		'height' 	  => 90,
		'width' 	  => 270,
	) );
	add_theme_support( 'custom-header', array(
		'flex-height' => true,
		'flex-height' => true,
		'header-text' => false,
		'width' 	  => 1920,
	) );

	set_post_thumbnail_size( 1200, 630, true );

	register_nav_menus( array(
		'primary-menu' => esc_html__( 'Primary Menu', 'mrktr' ),
	) );
}

add_action( 'after_setup_theme', 'mrktr_setup' );

/**
 * Widget areas
 *
 * Registers the widget areas used in the theme.
 *
 * @since 1.0.0
 */
function mrktr_widget_areas() {
	register_sidebar( array(
		'id'			=> 'sidebar',
		'name'			=> esc_html__( 'Sidebar', 'mrktr' ),
		'before_widget'	=> '<section id="%1$s" class="widget %2$s">',
		'after_widget'	=> '</section>',
		'before_title'	=> '<h3 class="widget-title">',
		'after_title'	=> '</h3>',
	) );

	register_sidebar( array(
		'id'			=> 'front',
		'name'			=> esc_html__( 'Front Page', 'mrktr' ),
		'before_widget'	=> '<section id="%1$s" class="widget %2$s"><div class="container">',
		'after_widget'	=> '</div></section>',
		'before_title'	=> '<h2 class="widget-title">',
		'after_title'	=> '</h2>',
	) );
}

add_action( 'widgets_init', 'mrktr_widget_areas' );

/**
 * Theme assets
 *
 * Enqueues the theme's styles & scripts.
 *
 * @since 1.0.0
 */
function mrktr_assets() {
	wp_enqueue_style( 'mrktr-fonts', 'https://fonts.googleapis.com/css?family=PT+Serif:700|Lato:400,400i,700,700i|Inconsolata' );
	wp_enqueue_style( 'mrktr-style', get_stylesheet_uri(), array( 'marketer-fonts', 'dashicons' ), null );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	wp_enqueue_script( 'mrktr-script', get_template_directory_uri() . '/js/functions.js', array( 'jquery' ), null, true );
}

add_action( 'wp_enqueue_scripts', 'mrktr_assets' );

/**
 * Excerpt more
 *
 * Customizes the excerpt more HTML tag.
 *
 * @since 1.0.0
 */
function mrktr_excerpt_more( $more ) {
	global $post;

	return sprintf( esc_html__( '&hellip;', 'mrktr' ) . '<p><a href="%1$s">%2$s</a></p>', esc_url( get_permalink( $post->id ) ), esc_html__( 'Read post', 'mrktr' ) );
}

add_filter( 'excerpt_more', 'mrktr_excerpt_more' );

/**
 * Excerpt length
 *
 * Customizes the excerpt length.
 *
 * @since 1.0.0
 */
function mrktr_excerpt_length( $length ) {
	return 30;
}

add_filter( 'excerpt_length', 'mrktr_excerpt_length' );

/**
 * Custom styles
 *
 * Adds the custom header image as a background to the site header on the front page.
 *
 * @since 1.0.0
 */
function mrktr_styles() {
	$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

	if ( is_front_page() && is_active_sidebar( 'front' ) && ( 1 == $paged ) ) : ?>
		<style type="text/css">
			.home .site-header {
				background-image: url( '<?php header_image(); ?>' );
			}
		</style>
	<?php endif;
}

add_action( 'wp_head', 'mrktr_styles', 100 );

/**
 * Widget shortcodes
 *
 * Enables shortcodes in widgets.
 *
 * @since 1.0.0
 */
add_filter( 'widget_text','do_shortcode' );
