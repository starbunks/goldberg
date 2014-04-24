<div class="navcontainer">
	<?php /* Our navigation menu.  If one isn't filled out, wp_nav_menu falls back to wp_page_menu.  The menu assiged to the primary position is the one used.  If none is assigned, the menu with the lowest ID is used.  */ ?>
	<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary', 'menu' => 'Information For Pharmacists Top Nav' ) ); ?>
	<span class='st_sharethis' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>' displayText='ShareThis'></span>
</div>