<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package sanctuary
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<nav class="footer-navigation" role="navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'footer_menu' ) ); ?>
		</nav><!-- #footer-navigation -->

		<div class="copyright-info alignright">
			<p>&copy; copyright Sanctuary Eco-Retreat 2014</p>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
