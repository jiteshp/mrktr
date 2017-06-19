<section class="no-results hentry">
	<header class="entry-header">
		<h2 class="entry-title h1"><?php esc_html_e( 'Nothing found' ); ?></h2>
	</header>

	<div class="entry-content">
		<?php
		if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<p><?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'mrktr' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

		<?php else : ?>

			<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'mrktr' ); ?></p>

			<?phpget_search_form();

		endif; ?>
	</div>
</section>
