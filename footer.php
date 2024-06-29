<?php
/**
 * The template for displaying the footer.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Hamilton
 */

?>
		</main>

		<footer class="site-footer section-inner">

			<p>&copy; <?php echo date( 'Y' ); ?> <a href="<?php echo esc_url( home_url() ); ?>" class="site-name"><?php bloginfo( 'name' ); ?></a></p>
			<p class="theme-by"><?php _e( 'Theme by', 'hamilton' ); ?> <a href="https://andersnoren.se">Anders Nor&eacute;n</a></p>

		</footer><!-- footer -->

	    <?php wp_footer(); ?>

	</body>
</html>
