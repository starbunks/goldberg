<?php
/**
 * Template Name: Attorney Bio Details Template
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
				<p class="breadcrumbs"><a href="?">Corporate Home</a> &gt; <a href="?page_id=46">About Goldberg Law Group</a> &gt; <a href="?page_id=48">Our Attorneys</a> &gt; <?php the_title(); ?></p>
				<h1 class="bioTitle"><?php the_title(); ?></h1>
				<?php if(has_post_thumbnail(get_the_ID())) {
						$dimensions = array(250, 250);
						$img_args = array(
											'class' => 'bioFull',
											'align' => 'left'
										);
						echo(get_the_post_thumbnail(get_the_ID(), $dimensions, $img_args));
					  } else {
						?>
						<img class="bioFull" align="left" src="/wp-content/themes/GF-Theme-Ver2/images/bio/default.jpg" width="250" height="250" />
						<?php
					  }
				?>
				<?php the_content(); ?>
			<?php endwhile; ?>
		</div>
	</div>
<?php get_footer(); ?>