<?php
/**
 * Template Name: Grandparents Single Page Template
 *
 * The "Template Name:" bit above allows this to be selectable
 * from a dropdown menu on the edit page screen.
 *
 * @package WordPress
 * @subpackage GF Theme Ver2

 */
get_header(); ?>
	<?php include(locate_template( 'nav-grandparent.php' )); ?>
	<br class="clear" />
	<div class="maincontainer">
		<div class="corporate-home-content">
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			<h1><?php the_title(); ?></h1>
			<?php the_content(); ?>
		<?php endwhile; ?>
		</div>
	</div>
<?php get_footer(); ?>