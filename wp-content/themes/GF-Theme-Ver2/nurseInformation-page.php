<?php
/**
 * Template Name: Nurse Information Template
 *
 * The "Template Name:" bit above allows this to be selectable
 * from a dropdown menu on the edit page screen.
 *
 * @package WordPress
 * @subpackage GF Theme Ver2

 */
get_header(); ?>
	<?php include(locate_template( 'nav-nurse-info.php' )); ?>
	<br class="clear" />
	<div id="tabs" class="maincontainer">
		
		<?php if ( is_active_sidebar( 'healthcare-left-sidebar' ) ) : ?>
			<div class="left-sidebar">
				<?php include(locate_template( 'sidebar-left-healthcareAttorneys.php' )); ?>
				<?php dynamic_sidebar( 'healthcare-left-sidebar' ); ?>
			</div>
		<?php endif; ?>
		
		<div class="threecol-contentcontainer">
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; ?>
		</div>
		<?php if ( is_active_sidebar( 'healthcare-right-sidebar' ) ) : ?>
			<div id="base-sidebar" class="right-sidebar">
				<?php dynamic_sidebar( 'healthcare-right-sidebar' ); ?>
			</div>
		<?php endif; ?>
	</div>
<?php get_footer(); ?>