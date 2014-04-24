<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage GF Theme Ver2

 */

get_header(); ?>
	<?php include(locate_template( 'nav-healthcare.php' )); ?>
	<div class="maincontainer">
		<div class="left-sidebar">
			<?php include(locate_template( 'sidebar-left-healthcareAttorneys.php' )); ?>		
		</div>

		<div class="twocol-contentcontainer">
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				<?php //previous_post_link( '%link', '' . _x( '&larr;', 'Previous post link', 'twentyten' ) . ' %title' ); ?>
				<?php //next_post_link( '%link', '%title ' . _x( '&rarr;', 'Next post link', 'twentyten' ) . '' ); ?>
				<h1><?php the_title(); ?></h1>
				<p><?php twentyten_posted_on(); ?><br/>
				<?php twentyten_posted_in(); ?></p>

				<?php the_content(); ?>
				<?php wp_link_pages( array( 'before' => '' . __( 'Pages:', 'twentyten' ), 'after' => '' ) ); ?>

				<?php if ( get_the_author_meta( 'description' ) ) : // If a user has filled out their description, show a bio on their entries  ?>
					<?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'twentyten_author_bio_avatar_size', 60 ) ); ?>
					<h2><?php printf( esc_attr__( 'About %s', 'twentyten' ), get_the_author() ); ?></h2>
					<?php the_author_meta( 'description' ); ?>
					<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>">
						<?php printf( __( 'View all posts by %s &rarr;', 'twentyten' ), get_the_author() ); ?>
					</a>
				<?php endif; ?>
				<?php 
					if('open' == $post->comment_status): 
						comments_template( '', true );
					endif;
				?>
			<?php endwhile; // end of the loop. ?>
		</div>
	</div>
<?php get_footer(); ?>