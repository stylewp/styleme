<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package styleme
 */

?>

	</div><!-- #content -->
  </div><!-- container -->

	<footer id="colophon" class="site-footer" role="contentinfo">
	  <div class="container">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'styleme' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'styleme' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'styleme' ), 'styleme', '<a href="http://stylewp.net/" rel="designer">StyleWp</a>' ); ?>
		</div><!-- .site-info -->
	   </div><!-- .container -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
