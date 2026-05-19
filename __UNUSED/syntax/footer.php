<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Syntax
 */
?>

	</div><!-- #main -->
	<footer id="colophon" class="site-footer" role="contentinfo">
		<?php if ( has_nav_menu( 'secondary' ) ) : ?>
			<div class="secondary-navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'secondary', 'depth' => 1 ) ); ?>
			</div>
		<?php endif; ?>
		<div class="site-info">
			<?php echo $GLOBALS['zconf']['foot'][0]."  &nbsp; &ndash; &nbsp; ".$GLOBALS['zconf']['foot'][1]; ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>