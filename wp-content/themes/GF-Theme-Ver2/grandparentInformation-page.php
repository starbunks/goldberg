<?php
/**
 * Template Name: Grandparent Information Template
 *
 * The "Template Name:" bit above allows this to be selectable
 * from a dropdown menu on the edit page screen.
 *
 * @package WordPress
 * @subpackage GF Theme Ver2

 */
$page_id = 273;
$parent_id = 11;
get_header(); ?>
	<?php include(locate_template( 'nav-grandparent-disjoined.php' )); ?>
	<br class="clear" />
	<div class="maincontainer">
		<?php if ( is_active_sidebar( 'grandparent-visitation-left-sidebar' ) ) : ?>
			<div class="left-sidebar">
				<?php dynamic_sidebar( 'grandparent-visitation-left-sidebar' ); ?>
			</div>
		<?php endif; ?>
		
		<div class="threecol-contentcontainer">
			<div id="tabbed-content" class="grandparent-content">
				<?php $counter = 0; ?>
				<?php query_posts(array('page_id' => $page_id, 'post_type' => 'page')); 
					  while (have_posts()) { the_post(); ?>
					<?php $counter += 1; ?>
					<div id="tab-<?php echo $counter; ?>">
						<?php the_content(); ?>
					</div>
				<?php } ?>	
				
				<?php query_posts(array('post_parent' => $parent_id, 'post__not_in'=> array(278, 273, 276), 'post_type' => 'page', 'orderby' => 'menu_order', 'order' => 'ASC')); 
					  while (have_posts()) { the_post(); ?>
					<?php $counter += 1; ?>
					<div id="tab-<?php echo $counter; ?>">
						<?php the_content(); ?>
					</div>
				<?php } ?>		
			</div>		
		</div>
		<?php if ( is_active_sidebar( 'grandparent-visitation-right-sidebar' ) ) : ?>
			<div class="right-sidebar">
				<?php dynamic_sidebar( 'grandparent-visitation-right-sidebar' ); ?>
			</div>
		<?php endif; ?>
	</div>
<?php get_footer(); ?>