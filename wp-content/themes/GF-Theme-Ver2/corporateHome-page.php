<?php
/**
 * Template Name: Corporate Home Template
 *
 * The "Template Name:" bit above allows this to be selectable
 * from a dropdown menu on the edit page screen.
 *
 * @package WordPress
 * @subpackage GF Theme Ver2

 */
$page_id = 15; 
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
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			<?php the_content(); ?>
		<?php endwhile; ?>
		</div>
	</div>
<?php get_footer(); ?>