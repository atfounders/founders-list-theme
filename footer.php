<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Founders List Theme
 * @since Founders List Theme 1.0
 */
?>

	</div><!-- #main .site-main -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<?php do_action( 'founders_list_credits' ); ?>
			<a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'founders_list' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'founders_list' ), 'WordPress' ); ?></a><br />
			<?php printf( __( 'Theme: %1$s by %2$s.', 'founders_list' ), 'founders_list', '<a href="http://automattic.com/" rel="designer">Automattic</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon .site-footer -->
</div><!-- #page .hfeed .site -->

<?php wp_footer(); ?>

</body>
</html>