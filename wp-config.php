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
define( 'DB_NAME', 'multisitesdb' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '%x^0f]oj<*o`++VE@,8p@~hMF6B=gg|k}DaFnAeWW(GB6Kc!vw.,r8PPkYl<3T[p' );
define( 'SECURE_AUTH_KEY',  'VScfqz,?lq|~`0wL7om.Ph,ZiH5hBE-)-8A,3jbOg)X/caCl2&im%OlLc5]5h0*a' );
define( 'LOGGED_IN_KEY',    '|oWF^:HpR4p<gRI{]f)5(W}V~Tz:ZA3Nu*aRaqt4E}M-9c-BZY=*@d_:au&InZ<>' );
define( 'NONCE_KEY',        '0hYpU<|sfL8eu)k[I5?NUlS65kgppS=C@&?oa=?n$ 5|<Ge3><}Vgmw/%vh81UGD' );
define( 'AUTH_SALT',        'hlp/}o.Fv;{~;?ZFC2%$s+PGj^|MC41ytDx_hhNK[w nw?`w3Ud^HT~6kc|G`~80' );
define( 'SECURE_AUTH_SALT', 'P_ERUpb)#0NPh<|+9T5JxkN.X2X~pM[,}INFE2i]-KNdAE&M==Cf7RpB7h5} -8H' );
define( 'LOGGED_IN_SALT',   'B?X^_(/hpAkrZ~Weqtbjss1mZZ2}Z-zrgO>yN.Rzh5Q<#m7~irC7Z>;4tc]$Q|g=' );
define( 'NONCE_SALT',       'fp6oKV(21b3b*@)vNwg<*!/!cnP)1z_C`~nmZH&hG VNzf&-Uu,`|MUdiR~oR]z?' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
