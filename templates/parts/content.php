<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h2 class="entry-title h1"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>

		<?php if ( ! is_search() ) : ?>
			<div class="entry-meta">
				<span class="entry-author">
					<?php esc_html_e( 'By ', 'mrktr' ); the_author_link(); ?>
				</span>

				<span class="entry-time">
					<time datetime="<?php the_time( 'c' ); ?>"><?php the_time( 'F j, Y' ); ?></time>
				</span>
			</div>
		<?php endif; ?>
	</header>

	<div class="entry-content">
		<?php if ( ! is_search() && has_post_thumbnail() ) : ?>
			<p class="entry-thumbnail">
				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
			</p>
		<?php endif; ?>

		<?php the_excerpt(); ?>
	</div>
</article>
