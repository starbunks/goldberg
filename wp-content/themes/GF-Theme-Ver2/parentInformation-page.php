<?php
/**
 * Template Name: Parent Information Template
 *
 * The "Template Name:" bit above allows this to be selectable
 * from a dropdown menu on the edit page screen.
 *
 * @package WordPress
 * @subpackage GF Theme Ver2

 */
get_header(); ?>
	<?php include(locate_template( 'nav-parent-info.php' )); ?>
	<br class="clear" />
	<div id="tabs" class="maincontainer">
		
		<?php if ( is_active_sidebar( 'grandparent-visitation-left-sidebar' ) ) : ?>
			<div class="left-sidebar">
				<?php dynamic_sidebar( 'grandparent-visitation-left-sidebar' ); ?>
			</div>
		<?php endif; ?>
		
		<div class="threecol-contentcontainer">
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; ?>
		</div>
		<?php if ( is_active_sidebar( 'grandparent-visitation-right-sidebar' ) ) : ?>
			<div class="right-sidebar">
				<?php dynamic_sidebar( 'grandparent-visitation-right-sidebar' ); ?>
			</div>
		<?php endif; ?>
	</div>
<?php get_footer(); ?>

