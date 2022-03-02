<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Leighton_2.0
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<p>
				<?php
				/* translators: %s: Country name */
				printf( esc_html__( 'Made with love in %s', 'iamleigh' ), 'Ecuador' );
				?>
			</p>
			<p>
				<?php
				/* translators: 1: Copyright name, 2: Current year, 3: Theme autor */
				printf(
					esc_html__( 'All visuals are protected under %1$s © %2$s %3$s', 'iamleigh' ),
					'<a href="/">Digital Millenium Copyright Act</a>',
					date( 'Y' ),
					'Leighton Quito'
				);
				?>
			</p>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
