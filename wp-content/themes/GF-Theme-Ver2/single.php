 <?php
    $post = $wp_query->post;
	/* articles */
    if ( in_category('30') ) { //doctor articles
		include(locate_template( 'article-doctor.php'));
	}elseif(in_category('35')){ //grandparent articles
		include(locate_template( 'article-grandparent.php'));
	}elseif(in_category('48')){ //family articles
		include(locate_template( 'article-family.php'));
	}elseif(in_category('32')){ //healthcare articles
		include(locate_template( 'article-healthcare.php'));
	}elseif(in_category('31')){ //nurses articles
		include(locate_template( 'article-nurses.php'));
	}
	
		
	/* blog posts */
	elseif(in_category('45')){//Doctor Blog Posts
		include(locate_template( 'blog-doctor.php'));
	}elseif(in_category('46')){//Nurse Blog Posts
		include(locate_template( 'blog-nurse.php'));
	}elseif(in_category('47')){//Family Law Blog Posts
		include(locate_template( 'blog-family.php'));
	}
	
	
	/* lectures */
	elseif(in_category('36')){ //grandparent lectures
		include(locate_template( 'lectures-grandarent.php'));
	}elseif(in_category('33')){ //healthcare lectures
		include(locate_template( 'lectures-healthcare.php'));
	}
	
	/* podcasts */
	elseif(in_category('38')){//familylaw podcasts
		include(locate_template( 'podcasts-familylaw.php'));
	}elseif(in_category('23')){//grandparent podcasts
		include(locate_template( 'podcasts-grandparent.php'));
	}elseif(in_category('37')){//healthcare podcasts
		include(locate_template( 'podcasts-healthcare.php'));
	}
	
	
	/* recent news */
	elseif(in_category('34')){//recent news
		include(locate_template( 'news-recent.php'));
	}
	
	/* default */
	else{
		include(locate_template( 'single-original.php'));
    }
  ?>