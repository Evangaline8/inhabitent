<?php
/**
 * The template for displaying the footer.
 *
 * @package Inhabitent_Theme
 */

/**
 * The sidebar containing the main widget area.s
 *
 * @package Inhabitent_Theme
 */

if ( ! is_active_sidebar( 'footer-1' ) ) {
	return;
}
?>

			</div><!-- #content -->
			
			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="site-info">
				<?php dynamic_sidebar( 'footer-1' ); ?>

				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>
		

	</body>
</html>
