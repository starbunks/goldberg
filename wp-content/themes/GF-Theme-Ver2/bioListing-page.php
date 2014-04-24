<?php
/**
 * Template Name: Bio Listing Template
 *
 * The "Template Name:" bit above allows this to be selectable
 * from a dropdown menu on the edit page screen.
 *
 * @package WordPress
 * @subpackage GF Theme Ver2

 */
$page_id = 48; 
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
			<?php 	
				$args = array(
								"child_of" => $page_id,
								"sort_column" => 'post_title'
							);
				$bioPages = get_pages($args);
				foreach($bioPages as $page){
					$content = $page->post_content;
					if(!$content){
						continue;
					} 
					$content = apply_filters('the_content', $content); ?>
					<div>
						<a href="?page_id=<?php echo($page->ID); ?>">
							<?php if(has_post_thumbnail($page->ID)) {
								$dimensions = array(100, 100);
								$img_args = array(
													'class' => 'bioThumb',
													'align' => 'left'
												);
								echo(get_the_post_thumbnail($page->ID, $dimensions, $img_args));
							} else {?>
								<img class="bioThumb" align="left" src="/wp-content/themes/GF-Theme-Ver2/images/bio/default.jpg" width="100" height="100" />
							<?php }	?>
						</a>					
						<h3><a href="?page_id=<?php echo($page->ID); ?>"><?php echo($page->post_title); ?></a></h3>
						<p>
						 <?php 
							if ($page->post_excerpt){
								echo($page->post_excerpt);
							}else{
								echo("no excerpt");						
							}?>
						</p>
					</div>
					<br class="clear" />	
				<?php } ?>		
		</div>
	</div>
<?php get_footer(); ?>