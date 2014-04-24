<?php
/**
 * Template Name: About Us Template
 *
 * The "Template Name:" bit above allows this to be selectable
 * from a dropdown menu on the edit page screen.
 *
 * @package WordPress
 * @subpackage GF Theme Ver2

 */

get_header(); ?>
	<?php include(locate_template( 'nav.php' )); ?>	
	<br class="clear" />
	<div class="maincontainer">
		<div class="left-sidebar">
			<?php include(locate_template( 'sidebar-left-corporateAttorneys.php' )); ?>		
		</div>
		<div class="twocol-contentcontainer">
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; ?>
		
			<?php  /*if ( is_active_sidebar( 'aboutus-subpage-teaser' ) ) : ?>
				<br class="clear" />
				<div id="about-subpage-teaser" class="aboutus-subpage-teaser">
					<?php dynamic_sidebar( 'aboutus-subpage-teaser' ); ?>
				</div>
			<?php endif;*/  ?>
		</div>
	</div>
<?php get_footer(); ?>