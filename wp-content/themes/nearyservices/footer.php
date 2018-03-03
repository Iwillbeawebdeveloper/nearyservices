<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package iwillbeawebdeveloper
 */

?>

	</div><!-- #content -->

	<footer id="footer-section" class="site-footer" role="contentinfo">
		<div class="container text-center">
            <p>Neary Services</p>
            <a href="tel:02039502155">02039502155</a><br>
            <a href="mailto:info@nearyservices.co.uk">info@nearyservices.co.uk</a>
            <p>Registered in England & Wales, Company Number 11128833</p>
			<?php printf( esc_html__( 'Website designed and developed by %2$s.', 'iwillbeawebdeveloper' ), 'iwillbeawebdeveloper', '<a href="mailto:hello@iwillbeawebdeveloper.co.uk" rel="designer">James Winfield</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
