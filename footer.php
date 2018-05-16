<?php
/**
 * The template for displaying the footer.
 *
 * @package Integer
 */

?>
	<footer id="colophon" class="site-footer" role="contentinfo">

			<div class="footer-content">
				<a href="https://aiindex.org" target="_blank"><img class="footer-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/img/index_logo_wide_white.png"/></a>
				<a href="http://blog.aiindex.org" class="footer-title">Indexed</a>
				<div class="footer-social">
					<a href="https://twitter.com/indexingai" target="_blank"><img class="footer-twitter" src="<?php echo get_stylesheet_directory_uri(); ?>/img/twitter.png"/></a>
					<a href="https://www.linkedin.com/company/18178884/" target="_blank"><img class="footer-linkedin" src="<?php echo get_stylesheet_directory_uri(); ?>/img/linkedin.png"/></a>
				</div>
			</div>

			<?php if ( has_nav_menu( 'footer' ) ) : ?>

				<nav id="site-footer-navigation" class="footer-navigation" role="navigation">

					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'footer',
								'depth' => 1,
								'fallback_cb' => false,
							)
						);
					?>
				</nav><!-- #site-navigation -->

			<?php endif; ?>

	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
