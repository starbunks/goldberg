<?php
/**
 * The template for displaying Tag Archive pages.
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


				<h1><?php
					printf( __( 'Tag Archives: %s', 'twentyten' ), '' . single_tag_title( '', false ) . '' );
				?></h1>

				<?php
				/* Run the loop for the tag archive to output the posts
				 * If you want to overload this in a child theme then include a file
				 * called loop-tag.php and that will be used instead.
				 */
				 get_template_part( 'loop', 'tag' );
				?>
		</div>
	</div>
<?php get_footer(); ?>