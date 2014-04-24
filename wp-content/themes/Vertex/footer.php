<?php if ( is_home() ) : ?>
	<div id="pre-footer">
		<div class="container">
			<p class="tagline"><?php bloginfo( 'description' ); ?></p>

			<br />

			<?php et_vertex_action_button(); ?>
		</div> <!-- .container -->
	</div> <!-- #pre-footer -->
<?php endif; ?>

	<footer id="main-footer">
		<div class="container">
			<?php get_sidebar( 'footer' ); ?>

			

			<nav>
				<?php
			$footerNav = '';
			$footerNav = wp_nav_menu( array( 'theme_location' => 'footer-menu', 'container' => '', 'fallback_cb' => '', 'menu_class' => 'nav', 'echo' => false ) );	
			echo( $footerNav );
			?>
			</nav>

		</div> <!-- .container -->
	</footer> <!-- #main-footer -->

	<?php wp_footer(); ?>
</body>
</html>