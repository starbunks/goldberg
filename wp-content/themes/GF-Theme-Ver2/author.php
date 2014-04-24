<?php
/**
 * The template for displaying Author Archive pages.
 *
 * @package WordPress
 * @subpackage GF Theme Ver2

 */

get_header(); ?>
	<?php include(locate_template( 'nav.php' )); ?>	
	<br class="clear" />
	<div class="maincontainer">
		<?php if ( is_active_sidebar( 'corporate-home-sidebar' ) ) : ?>
			<div class="left-sidebar">
				<?php dynamic_sidebar( 'corporate-home-sidebar' ); ?>
			</div>
		<?php endif; ?>
		<div class="twocol-contentcontainer">
			<?php
				/* Queue the first post, that way we know who
				 * the author is when we try to get their name,
				 * URL, description, avatar, etc.
				 *
				 * We reset this later so we can run the loop
				 * properly with a call to rewind_posts().
				 */
				if ( have_posts() )
					the_post();
			?>

				<h1><?php printf( __( 'Author Archives: %s', 'twentyten' ), esc_attr( get_the_author() )); ?></h1>

				<?php
				// If a user has filled out their description, show a bio on their entries.
				if ( get_the_author_meta( 'description' ) ) : ?>

											<?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'twentyten_author_bio_avatar_size', 60 ) ); ?>
											<h2><?php printf( __( 'About %s', 'twentyten' ), get_the_author() ); ?></h2>
											<?php the_author_meta( 'description' ); ?>

				<?php endif; ?>

				<?php
					/* Since we called the_post() above, we need to
					 * rewind the loop back to the beginning that way
					 * we can run the loop properly, in full.
					 */
					rewind_posts();

					/* Run the loop for the author archive page to output the authors posts
					 * If you want to overload this in a child theme then include a file
					 * called loop-author.php and that will be used instead.
					 */
					 get_template_part( 'loop', 'author' );
				?>
		</div>
	</div>
<?php get_footer(); ?>
