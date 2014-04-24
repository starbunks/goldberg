<?php
/**
 * Template Name: Family Law Template
 *
 * The "Template Name:" bit above allows this to be selectable
 * from a dropdown menu on the edit page screen.
 *
 * @package WordPress
 * @subpackage GF Theme Ver2

 */
$home_page_id = 13;
$faq_page_id = 58;
get_header(); ?>
	<?php include(locate_template( 'nav-family.php' )); ?>
	<br class="clear" />
	<div class="maincontainer">
		<?php if ( is_active_sidebar( 'familylaw-home-left-sidebar' ) ) : ?>
			<div class="left-sidebar">
				<?php dynamic_sidebar( 'familylaw-home-left-sidebar' ); ?>
			</div>
		<?php endif; ?>	
	
		<div class="threecol-contentcontainer">
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; ?>

			<?php /*if ( is_active_sidebar( 'familylaw-home-subpage-teaser' ) ) : ?>
				<div id="subpage-teaser" class="familylawcontent-subpage-teaser">
					<?php dynamic_sidebar( 'familylaw-home-subpage-teaser' ); ?>
				</div>
			<?php endif;*/ ?>	
		</div>
		<?php if ( is_active_sidebar( 'familylaw-home-right-sidebar' ) && get_the_ID() != $faq_page_id ) : ?>
			<div id="base-sidebar" class="right-sidebar">
				<?php dynamic_sidebar( 'familylaw-home-right-sidebar' ); ?>
			</div>
		<?php endif; ?>
		<?php if ( is_active_sidebar( 'faq-form-sidebar' ) && get_the_ID() == $faq_page_id ) : ?>
			<div id="faq-form-sidebar" class="right-sidebar">
				<?php dynamic_sidebar( 'faq-form-sidebar' ); ?>
			</div>
		<?php endif; ?>		
	</div>
<?php get_footer(); ?>