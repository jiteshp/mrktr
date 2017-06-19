<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>

		<div class="entry-meta">
			<span class="entry-author">
				<?php esc_html_e( 'By ', 'mrktr' ); the_author_link(); ?>
			</span>

			<span class="entry-time">
				<time datetime="<?php the_time( 'c' ); ?>"><?php the_time( 'F j, Y' ); ?></time>
			</span>
		</div>
	</header>

	<div class="entry-content">
		<?php if ( has_post_thumbnail() ) : ?>
			<p class="entry-thumbnail"><?php the_post_thumbnail(); ?></p>
		<?php endif; ?>

		<?php the_content(); ?>
	</div>

	<footer class="entry-footer entry-meta">
		<span class="entry-categories">
			<?php esc_html_e( 'Category: ', 'mrktr' ); the_category( ', ' ); ?>
		</span>

		<?php the_tags( '<span class="entry-tags">' . esc_html__( 'Tags: ', 'mrktr' ), ',', '</span>' ); ?>
	</footer>
</article>
