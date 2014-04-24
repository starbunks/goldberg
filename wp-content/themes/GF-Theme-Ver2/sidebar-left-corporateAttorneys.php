<li class="widget-container widget_text">
	<h3 class="widget-title">Meet the Team</h3>
	<?php 	
	$args = array( "child_of" => 48, "include" => array(211,207,52) );
	$bioPages = get_pages($args);
	$orderedPages = array();
	foreach($bioPages as $orderPage){
		switch($orderPage->ID){
			case 211:
				$orderedPages[1] = $orderPage;
				break;
			case 207:
				$orderedPages[2] = $orderPage;
				break;
			case 52:
				$orderedPages[0] = $orderPage;
				break;
		}
	}
	ksort($orderedPages);
	foreach($orderedPages  as $page){
		$content = $page->post_content;
		if(!$content){
			continue;
		} 
		$content = apply_filters('the_content', $content); 
	?>
	<div class="bio-sidebar-item">
	<h3><a href="?page_id=<?php echo($page->ID); ?>"><?php echo($page->post_title); ?></a></h3>
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
		 <?php 
			if ($page->post_excerpt){
				echo($page->post_excerpt);
			}else{
				echo("no excerpt");						
			}?>
	</div>
	<br class="clear" />	
<?php } ?>
</li>