<?php
/**
 * Template Name: One column, no sidebar
 *
 * A custom page template without sidebar.
 *
 * The "Template Name:" bit above allows this to be selectable
 * from a dropdown menu on the edit page screen.
 *
 * @package WordPress
 * @subpackage GF Theme Ver2

 */

get_header(); ?>
	<div class="header">
		<?php get_search_form(); ?>
	</div>
	<br class="clear" />
	<div id="access" role="navigation">
		<?php /* Our navigation menu.  If one isn't filled out, wp_nav_menu falls back to wp_page_menu.  The menu assiged to the primary position is the one used.  If none is assigned, the menu with the lowest ID is used.  */ ?>
		<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
	</div><!-- #access -->
	<br class="clear" />
	<div class="maincontainer">
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				<span class='st_sharethis' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>' displayText='ShareThis'></span>
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
				<?php wp_link_pages( array( 'before' => '' . __( 'Pages:', 'twentyten' ), 'after' => '' ) ); ?>
				<?php edit_post_link( __( 'Edit', 'twentyten' ), '', '' ); ?>

				<?php comments_template( '', true ); ?>

		<?php endwhile; ?>
	</div>
<?php get_footer(); ?>