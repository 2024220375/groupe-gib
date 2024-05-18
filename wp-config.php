<?php
define( 'WP_CACHE', false ); // Added by WP Rocket

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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('WP_MEMORY_LIMIT','512M') ;

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
define( 'AUTH_KEY',          '_ojo.s1u7KlS1?5[.U[FFfPNh:qtl4?^WY,A7dn&mQZZxxt_18Yx`R$d$:{ 1o#9' );
define( 'SECURE_AUTH_KEY',   'P>LR<+J^qh|vH=8,$:exN|69R^cq.pB~6A`CVi2?:{Ml`%A(?#Iv~C01,p+Ri_Q2' );
define( 'LOGGED_IN_KEY',     'ZAQJSN4{ ]9ml~c_8f(LaK76O7$3ndFrt7%p#7KPP3L>5krFvp,#Cke9.K*<fpX<' );
define( 'NONCE_KEY',         '%FwBA{.-5.y[4gw,J$qC(a1cE[,%:lqP6h@=G+:]k~K}qhpOXAXz/(**^5fSnh47' );
define( 'AUTH_SALT',         'j%J4ljNSNh4J1kKH-)V0B{ vw#hlFW*qUk=c1G3>hMP0,fsFC2tLeX|vdTE}=za+' );
define( 'SECURE_AUTH_SALT',  '<h-lMg11hFN1A1G2HrS$^^ohpK%*~MUwY{P]!5>8SQt` STOJ;C5e4$?zGZoX&&(' );
define( 'LOGGED_IN_SALT',    '02?,s&~zOOAmxg2TPEB<7olod#%wExpkieh&T]|e:X!;e<!I@mk-:RXE[,2Xbu Y' );
define( 'NONCE_SALT',        'B|NGchxaN/q5GE@Yd->g:I`:Z}]6B#;-F>lDy#MQGS&WJA!bJb6wrM|#t f2!SBy' );
define( 'WP_CACHE_KEY_SALT', 'bLUH~pEdcBZ>L_Ue3_a%ct1l4H@[GOrM<]wt3@o_w[Vb %TCSSIwUB?CkIMxWysH' );

@ini_set( 'max_input_vars' , 10000 );
/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/* Paste below code just above $table_prefix = 'wp_'; */
 
/*define('WP_DEBUG', false);
/*define('WP_HTTP_BLOCK_EXTERNAL', false);
/*define('FS_METHOD', 'direct');
/*define('DISABLE_WP_CRON', true);
/*define('WP_MEMORY_LIMIT', '256M');
/*define('WP_CACHE', true);
/*define('WP_ALLOW_REPAIR', true);
/*require_once(ABSPATH.'wp-settings.php');
/*add_filter('auto_update_plugin', '_return_false');
/*add_filter('auto_update_theme', '_return_false');
/*define('WP_AUTO_UPDATE_CORE', 'major');


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';