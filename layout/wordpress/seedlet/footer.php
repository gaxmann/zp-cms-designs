<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Seedlet
 * @since 1.0.0
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer default-max-width" role="contentinfo" aria-label="<?php esc_attr_e( 'Footer', 'seedlet' ); ?>">

		<?php get_template_part( 'template-parts/footer/footer-widgets' ); ?>

		<?php if ( has_nav_menu( 'footer' ) ) : ?>
		<nav class="footer-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Menu', 'seedlet' ); ?>">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'footer',
					'menu_class'     => 'footer-menu',
					'depth'          => 1,
				)
			);
			?>
		</nav><!-- .footer-navigation -->
		<?php endif; ?>

		<div class="site-info">
		<?php echo $GLOBALS['zconf']['foot'][0]."  &nbsp; &ndash; &nbsp; ".$GLOBALS['zconf']['foot'][1]; ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
