<?php /* Display navigation to next/previous pages when applicable */ ?>
<?php if ( $wp_query->max_num_pages > 1 ) : ?>
		<?php next_posts_link( __( '&larr; Older posts', 'twentyten' ) ); ?>
		<?php previous_posts_link( __( 'Newer posts &rarr;', 'twentyten' ) ); ?>
<?php endif; ?>

<?php /* If there are no posts to display, such as an empty archive page */ ?>
<?php if ( ! have_posts() ) : ?>
		<h3><?php _e( 'Not Found', 'twentyten' ); ?></h3>
		<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'twentyten' ); ?></p>
<?php endif; ?>

<?php
	/* Start the Loop.
	 *
	 * In Twenty Ten we use the same loop in multiple contexts.
	 * It is broken into three main parts: when we're displaying
	 * posts that are in the gallery category, when we're displaying
	 * posts in the asides category, and finally all other posts.
	 *
	 * Additionally, we sometimes check for whether we are on an
	 * archive page, a search page, etc., allowing for small differences
	 * in the loop on each template without actually duplicating
	 * the rest of the loop that is shared.
	 *
	 * Without further ado, the loop:
	 */ ?>
<?php while ( have_posts() ) : the_post(); ?>
	<div class="searchItem">
		<a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyten' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><h3><?php the_title(); ?></h3></a>
		<?php 
			if($post->post_type == 'post'){
				twentyten_posted_on(); 
				echo('<br/>');
			}
		?>
		<?php 
			$little_excerpt = trim(substr(strip_tags(get_the_content()),0,200))."..."; 
			echo($little_excerpt);
		?>
		<?php 
			//$cleanExcerpt = strip_tags(get_the_excerpt()); 
			//echo($cleanExcerpt);
		?>
		<hr />
	</div>
<?php endwhile; // End the loop. Whew. ?>

<?php /* Display navigation to next/previous pages when applicable */ ?>
<?php if (  $wp_query->max_num_pages > 1 ) : ?>
				<?php next_posts_link( __( '&larr; Older posts', 'twentyten' ) ); ?>
				<?php previous_posts_link( __( 'Newer posts &rarr;', 'twentyten' ) ); ?>
<?php endif; ?>