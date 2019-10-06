<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_sample_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Dn|+RGiH|Ci#iUA6T]el,Ojb5-M_D$-mZJ67f##&Ca87sl%lf$}aGpZDPi[4?y s' );
define( 'SECURE_AUTH_KEY',  'm?biAr{Od;LN-Bq0GUFj=<[}+9PPpDX(z4.mGnDc+9!H0|)6?Vjhp`v/c)s:cncx' );
define( 'LOGGED_IN_KEY',    'DCyf#N,(,]4GJ;?89CR9Db xVOD~g?fZIb;K-MK[fNAnrqgkiXl^&F=!x]U)yd:j' );
define( 'NONCE_KEY',        'ezS=w&muTZ13a+4e:jgo~089LcJ*& Wm%0v`]#X2Fm-l&M5;KMP2rnQR7%!9&,>*' );
define( 'AUTH_SALT',        '7O`d~1u5#X&=RCB%(T7Z{. H{o*AWL7qW%Eb&IRB;479>J)NEu?/A1S9^Il}@l)Q' );
define( 'SECURE_AUTH_SALT', 'h6SJ.1JeSUTlURCU7:-iwlqvI>%HPRw]LJL{nuY.7V^|+@oQ;@i)?G>t%(L&dc=*' );
define( 'LOGGED_IN_SALT',   '9=&d=aT)/b?Hq;%I%c:6qSnQQYxqbD2iCjv:4!,{_x2YIH]U zoo2Z!-/DZHw,3[' );
define( 'NONCE_SALT',       '0%1bjseMH+BOX$<un~/~Myr_b|Z2p~C97-;gP/kTpuE_ XL>6;{]cw0`$xO*JT?i' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
