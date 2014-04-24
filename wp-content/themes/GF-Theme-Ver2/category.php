<?php
/**
 * The template for displaying Category Archive pages.
 *
 * @package WordPress
 * @subpackage GF Theme Ver2

 */
get_header(); ?>
	<?php 
		if(
			is_category('Health Care Articles') || 
			is_category('Doctor Articles') ||
			is_category('Nurse Articles') ||
			is_category('Doctor Blog Posts') ||		
			is_category('Nurse Blog Posts') ||		
			is_category('Health Care Lectures') ||	
			is_category('Healthcare Podcast')			
		){
			$type = "health";
		}elseif(
			is_category('Family Law Articles') || 
			is_category('Family Law Blog Posts') || 
			is_category('Family Law Lectures') || 		
			is_category('Familylaw Podcasts')				
		){
			$type = "family";
		}elseif(
			is_category('Grandparent Visitation Articles') || 
			is_category('Grandparent Rights Lectures') || 
			is_category('Grandparent Podcast')
		){
			$type = "grandparent";
		}else{
			$type = "default";
		}
	?>
	<?php
		switch($type){
			case "health":
				include(locate_template( 'nav-healthcare.php' ));
				break;
			case "family":
				include(locate_template( 'nav-family.php' ));
				break;
			case "grandparent":
				include(locate_template( 'nav-grandparent.php' ));
				break;
			default:
				include(locate_template( 'nav.php' ));
				break;
		}
	?>
	<div class="maincontainer">
		<div class="left-sidebar">
			<?php 
				switch($type){
					case "health":
						include(locate_template( 'sidebar-left-healthcareAttorneys.php' ));
						break;
					case "family":
						include(locate_template( 'sidebar-left-familyAttorneys.php' ));
						break;
					case "grandparent":
						include(locate_template( 'sidebar-left-grandparentAttorneys.php' ));
						break;
					default:
						include(locate_template( 'sidebar-left-corporateAttorneys.php' )); 
						break;
				}
			?>		
		</div>
		<div class="twocol-contentcontainer">
				<h1><?php
					echo(single_cat_title( '', false ));			
				?></h1>
				<?php
					$category_description = category_description();
					if ( ! empty( $category_description ) ){
						echo '' . $category_description . '';
					}

				/* Run the loop for the category page to output the posts.
				 * If you want to overload this in a child theme then include a file
				 * called loop-category.php and that will be used instead.
				 */
				get_template_part( 'loop', 'category' );
				?>
		</div>
	</div>
<?php get_footer(); ?>