	<?php if ( is_active_sidebar( 'footer' ) && ! is_page_template( 'template/landing.php' ) ) : ?>
		<aside id="footer-widgets" class="footer-widgets" role="complementary">
			<?php dynamic_sidebar( 'footer' ); ?>
		</aside>
	<?php endif; ?>

	<footer id="colophon" class="site-footer" role="complementary">
		<div class="container">
			<span class="copyright">
				<?php echo esc_html__( '&copy; Copyright', 'mrktr' ) . ' ' . date( 'Y' ) . ' ' . get_bloginfo( 'name' ); ?>
			</span>

			<span class="generator">
				<?php esc_html_e( 'Powered by ', 'mrktr' ); ?>
				<a href="https://wordpress.org" rel="generator"><?php esc_html_e( 'WordPress', 'mrktr' ); ?></a>
			</span>

			<span class="designer">
				<?php esc_html_e( 'Theme by ', 'mrktr' ); ?>
				<a href="https://jiteshpatil.com" rel="generator"><?php esc_html_e( 'Jitesh Patil', 'mrktr' ); ?></a>
			</span>
		</div>
	</footer>

	<?php wp_footer(); ?>
</body>
</html>
