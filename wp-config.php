<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * @package WordPress
 */
 
$domainToLandingHash = array();
$domainToLandingHash['grandparentrights.net'] = "?page_id=11";
$domainToLandingHash['grandparentvisitation.net'] = "?page_id=11";
$domainToLandingHash['illinois-grandparent.com'] = "?page_id=11";
$domainToLandingHash['illinoisgrandparent.com'] = "?page_id=11";
$domainToLandingHash['illinoisgrandparents-rights.com'] = "?page_id=11";

$domainToLandingHash['doctorsrights.com'] = "?page_id=7";
$domainToLandingHash['illinoisdoctor-idfpr.com'] = "?page_id=7";
$domainToLandingHash['nursesrights.com'] = "?page_id=7";
 
 
 
function isWebsiteAVanityDomain( $domain ) {
  $domain = str_replace( 'www.', '', $domain );
  $domain = str_replace( 'dev.', '', $domain); 
  $hash =  $GLOBALS["domainToLandingHash"];
  return isset($hash[$domain]);
}

if(isWebsiteAVanityDomain($_SERVER['SERVER_NAME'])){
	define('WP_SITEURL', 	'http://'.$_SERVER['SERVER_NAME']);
	define('WP_HOME', 		'http://'.$_SERVER['SERVER_NAME']);
}
 
if(strpos($_SERVER['SERVER_NAME'], "dev.") === false){  

//if not on a dev site use the production configuration settings

	// ** MySQL settings - You can get this info from your web host ** //
	/** The name of the database for WordPress */
	define('DB_NAME', 'gfmain');

	/** MySQL database username */
	define('DB_USER', 'mgoldberg');

	/** MySQL database password */
	define('DB_PASSWORD', 'buckyg');

	/** MySQL hostname */
	define('DB_HOST', 'denebxserve5.denebcorp.com');

	/** Database Charset to use in creating database tables. */
	define('DB_CHARSET', 'utf8');

	/** The Database Collate type. Don't change this if in doubt. */
	define('DB_COLLATE', '');

	/**#@+
	 * Authentication Unique Keys and Salts.
	 *
	 * Change these to different unique phrases!
	 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
	 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
	 *
	 * @since 2.6.0
	 */
	define('AUTH_KEY',         'bA2.)+.bS|0Lqe<;o$(J61K%bGjjVI4|+b%+!ue8bm-D-H+G%@td]+$VZ8EOImC=');
	define('SECURE_AUTH_KEY',  ']y9*y-sV7^F9ao30A|2d0{,8MBKos^yr(2,%R<kVl=pT?sa4.Q.4ewqRBUjpIh|!');
	define('LOGGED_IN_KEY',    '4T8XWoY&G[c+;jHW%.j^rG6vf;R</YXfj,*8oKH1/.y%M6+8np`njzr=qlv%FQUF');
	define('NONCE_KEY',        'eNPBl-`ESa{ycL!|& 5j=UC}adt2nzIq)#+KO)-#9jMd9LKC|jQk+L]u5+@z>n,:');
	define('AUTH_SALT',        '#uB&|6XIx(b#G:8l[roc0ulSf-8B*9AyeG{:F{-A$xq::DtDIc_5=zOJ2G.@KAa/');
	define('SECURE_AUTH_SALT', 'pDI6OtG7&4C$>MX3_Ha)LB5iT3T8X~971f=UdZRi]^+%.w#H,^~YTOD>Nvkm^rR&');
	define('LOGGED_IN_SALT',   ')l/D{H&c|-U2yw)NLFP{yLE?+~Sd<y+|Z!Z?z#+9@F=gQ(taZ:b}b&oK(~j(|`%g');
	define('NONCE_SALT',       'zi-I+>|Rb1gekC3Fv2HfZo.^ZIFxZ-3>e18r460)78/)FDph8o|S^,FSv{IwS^co');

	/**#@-*/

	/**
	 * WordPress Database Table prefix.
	 *
	 * You can have multiple installations in one database if you give each a unique
	 * prefix. Only numbers, letters, and underscores please!
	 */
	$table_prefix  = 'gfmain_';

	/**
	 * WordPress Localized Language, defaults to English.
	 *
	 * Change this to localize WordPress. A corresponding MO file for the chosen
	 * language must be installed to wp-content/languages. For example, install
	 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
	 * language support.
	 */
	define('WPLANG', '');

	/**
	 * For developers: WordPress debugging mode.
	 *
	 * Change this to true to enable the display of notices during development.
	 * It is strongly recommended that plugin and theme developers use WP_DEBUG
	 * in their development environments.
	 */
	define('WP_DEBUG', false);

	/* That's all, stop editing! Happy blogging. */

	/** Absolute path to the WordPress directory. */
	if ( !defined('ABSPATH') )
		define('ABSPATH', dirname(__FILE__) . '/');

	/** Sets up WordPress vars and included files. */
	require_once(ABSPATH . 'wp-settings.php');
}else{

//if is a dev site use the dev configuration settings

	// ** MySQL settings - You can get this info from your web host ** //
	/** The name of the database for WordPress */
	define('DB_NAME', 'dev_gf_main');

	/** MySQL database username */
	define('DB_USER', 'mgoldberg');

	/** MySQL database password */
	define('DB_PASSWORD', 'buckyg');

	/** MySQL hostname */
	define('DB_HOST', 'denebxserve5.denebcorp.com');

	/** Database Charset to use in creating database tables. */
	define('DB_CHARSET', 'utf8');

	/** The Database Collate type. Don't change this if in doubt. */
	define('DB_COLLATE', '');

	/**#@+
	 * Authentication Unique Keys and Salts.
	 *
	 * Change these to different unique phrases!
	 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
	 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
	 *
	 * @since 2.6.0
	 */
	define('AUTH_KEY',         'bA2.)+.bS|0Lqe<;o$(J61K%bGjjVI4|+b%+!ue8bm-D-H+G%@td]+$VZ8EOImC=');
	define('SECURE_AUTH_KEY',  ']y9*y-sV7^F9ao30A|2d0{,8MBKos^yr(2,%R<kVl=pT?sa4.Q.4ewqRBUjpIh|!');
	define('LOGGED_IN_KEY',    '4T8XWoY&G[c+;jHW%.j^rG6vf;R</YXfj,*8oKH1/.y%M6+8np`njzr=qlv%FQUF');
	define('NONCE_KEY',        'eNPBl-`ESa{ycL!|& 5j=UC}adt2nzIq)#+KO)-#9jMd9LKC|jQk+L]u5+@z>n,:');
	define('AUTH_SALT',        '#uB&|6XIx(b#G:8l[roc0ulSf-8B*9AyeG{:F{-A$xq::DtDIc_5=zOJ2G.@KAa/');
	define('SECURE_AUTH_SALT', 'pDI6OtG7&4C$>MX3_Ha)LB5iT3T8X~971f=UdZRi]^+%.w#H,^~YTOD>Nvkm^rR&');
	define('LOGGED_IN_SALT',   ')l/D{H&c|-U2yw)NLFP{yLE?+~Sd<y+|Z!Z?z#+9@F=gQ(taZ:b}b&oK(~j(|`%g');
	define('NONCE_SALT',       'zi-I+>|Rb1gekC3Fv2HfZo.^ZIFxZ-3>e18r460)78/)FDph8o|S^,FSv{IwS^co');

	/**#@-*/

	/**
	 * WordPress Database Table prefix.
	 *
	 * You can have multiple installations in one database if you give each a unique
	 * prefix. Only numbers, letters, and underscores please!
	 */
	$table_prefix  = 'dev_gf_main_';

	/**
	 * WordPress Localized Language, defaults to English.
	 *
	 * Change this to localize WordPress. A corresponding MO file for the chosen
	 * language must be installed to wp-content/languages. For example, install
	 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
	 * language support.
	 */
	define('WPLANG', '');

	/**
	 * For developers: WordPress debugging mode.
	 *
	 * Change this to true to enable the display of notices during development.
	 * It is strongly recommended that plugin and theme developers use WP_DEBUG
	 * in their development environments.
	 */
	define('WP_DEBUG', false);

	/* That's all, stop editing! Happy blogging. */

	/** Absolute path to the WordPress directory. */
	if ( !defined('ABSPATH') )
		define('ABSPATH', dirname(__FILE__) . '/');

	/** Sets up WordPress vars and included files. */
	require_once(ABSPATH . 'wp-settings.php');
}