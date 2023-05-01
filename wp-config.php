<?php

/**

 * The base configuration for WordPress

 *

 * The wp-config.php creation script uses this file during the installation.

 * You don't have to use the web site, you can copy this file to "wp-config.php"

 * and fill in the values.

 *

 * This file contains the following configurations:

 *

 * * Database settings

 * * Secret keys

 * * Database table prefix

 * * ABSPATH

 *

 * @link https://wordpress.org/support/article/editing-wp-config-php/

 *

 * @package WordPress

 */


// ** Database settings - You can get this info from your web host ** //

/** The name of the database for WordPress */

define( 'DB_NAME', 'bitnami_wordpress' );


/** Database username */

define( 'DB_USER', 'bn_wordpress' );


/** Database password */

define( 'DB_PASSWORD', '691191915eb8046c058bb97bdb21333987b7259a0d49e9c992e68029d8bbb758' );


/** Database hostname */

define( 'DB_HOST', '127.0.0.1:3306' );


/** Database charset to use in creating database tables. */

define( 'DB_CHARSET', 'utf8' );


/** The database collate type. Don't change this if in doubt. */

define( 'DB_COLLATE', '' );


/**#@+

 * Authentication unique keys and salts.

 *

 * Change these to different unique phrases! You can generate these using

 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.

 *

 * You can change these at any point in time to invalidate all existing cookies.

 * This will force all users to have to log in again.

 *

 * @since 2.6.0

 */

define( 'AUTH_KEY',         '$*_mg!@A|bA}i}{H:jv<}[qO_J>]l!>}Aa$@|0~6bjUowFq=yDv{8!RPXJ<ukrV#' );

define( 'SECURE_AUTH_KEY',  'M#TFTLE/tV{ncCofVTMOs+zRMv&}zCu~c7iLOVkXY4&A|yLRz5-H)N{86+([CNz4' );

define( 'LOGGED_IN_KEY',    'AIiLm)J|%<7)C#VI/[I7iL5Dt=$E~]pBJ6ZgHsPX-]h|WH@^3hno;CC[)W1Lh=|v' );

define( 'NONCE_KEY',        'H%>56w=SFURnS]|p,T_C+Z#Q(Sp.Na-H[A8KvJJ=:qNYGDLyNdbMnrF4AFL*;hlQ' );

define( 'AUTH_SALT',        '(^R,:xOmq4ga]v$LsxoYi3%b 7xU$fu{:*)bo.n>8GA,fQ%5OXK<Cxr+O%(Lh&k' );

define( 'SECURE_AUTH_SALT', 'ez?>lLEF6l)OPbCa/5Suv|=#XxN_xqrwkG|`WO@KEmkl-BISaSH6&5UR?8}8bmj;' );

define( 'LOGGED_IN_SALT',   'T3kl[]`G3*1yn&4X7R 6| ^1jH^~lYc7,>_WFUc/zJ+%e?3]:79z`,$YaF #F-1O' );

define( 'NONCE_SALT',       'Wy#;NR<3`P$I/lU)tC)V9k79Ot19>~-<9S1xf6v;kKJuV8=UM3sKf2t+U!1ne~OJ' );


/**#@-*/


/**

 * WordPress database table prefix.

 *

 * You can have multiple installations in one database if you give each

 * a unique prefix. Only numbers, letters, and underscores please!

 */

$table_prefix = 'wp_';


/**

 * For developers: WordPress debugging mode.

 *

 * Change this to true to enable the display of notices during development.

 * It is strongly recommended that plugin and theme developers use WP_DEBUG

 * in their development environments.

 *

 * For information on other constants that can be used for debugging,

 * visit the documentation.

 *

 * @link https://wordpress.org/support/article/debugging-in-wordpress/

 */

define( 'WP_DEBUG', false );


/* Add any custom values between this line and the "stop editing" line. */




define( 'FS_METHOD', 'direct' );
/**
 * The WP_SITEURL and WP_HOME options are configured to access from any hostname or IP address.
 * If you want to access only from an specific domain, you can modify them. For example:
 *  define('WP_HOME','http://example.com');
 *  define('WP_SITEURL','http://example.com');
 *
 */
if ( defined( 'WP_CLI' ) ) {
	$_SERVER['HTTP_HOST'] = '127.0.0.1';
}

define( 'WP_HOME', 'http://' . $_SERVER['HTTP_HOST'] . '/' );
define( 'WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] . '/' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */


/** Absolute path to the WordPress directory. */

if ( ! defined( 'ABSPATH' ) ) {

	define( 'ABSPATH', __DIR__ . '/' );

}


/** Sets up WordPress vars and included files. */

require_once ABSPATH . 'wp-settings.php';

/**
 * Disable pingback.ping xmlrpc method to prevent WordPress from participating in DDoS attacks
 * More info at: https://docs.bitnami.com/general/apps/wordpress/troubleshooting/xmlrpc-and-pingback/
 */
if ( !defined( 'WP_CLI' ) ) {
	// remove x-pingback HTTP header
	add_filter("wp_headers", function($headers) {
		unset($headers["X-Pingback"]);
		return $headers;
	});
	// disable pingbacks
	add_filter( "xmlrpc_methods", function( $methods ) {
		unset( $methods["pingback.ping"] );
		return $methods;
	});
}
