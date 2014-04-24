<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage GF Theme Ver2

 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 * We filter the output of wp_title() a bit -- see
	 * twentyten_filter_wp_title() in functions.php.
	 */
	wp_title( '|', true, 'right' );

	?></title>
<?php wp_enqueue_script('jquery'); ?>

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	 if($page->ID){
		echo($page->ID);
	 }
	 
	wp_head();
?>


<script type="text/javascript" src="<?php bloginfo("template_url"); ?>/js/gf-core.js"></script>
<script type="text/javascript">
	function goHome(){
		window.location = "?";
	}
</script>
</head>

<body <?php body_class(); ?>>
	<div class="pagecontainer">
	<div class="header" >
		<a href="/" class="header-logo"></a>
		<?php //get_search_form(); ?>
		<div class="header-meta">Call us today at (312) 930-5600</div>
	</div>
	<br class="clear" />