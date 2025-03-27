<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'h51931c_8crew' );

/** Database username */
define( 'DB_USER', 'h51931c_root' );

/** Database password */
define( 'DB_PASSWORD', 'dAyTltM8UT' );

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
define( 'AUTH_KEY',         'P rKk;m9Yo/]{EB9}9kWuu3[Z-5<-j3?.>?Jti>D;,ofWlg&Jpj2Z66<q=}%_2@[' );
define( 'SECURE_AUTH_KEY',  '%VmA,FkgN=RDoMWrtisAC-u(nk4n4A_T~.D`*{2^.KPsG/(kh!6[~`=U#8t@us(9' );
define( 'LOGGED_IN_KEY',    'yUHasXI[)RzE)-rIf~y [5*D,13st{p~{q67DamO@!zUHMte9?$#.0CqT&#XD7IN' );
define( 'NONCE_KEY',        '?9xQ%KK#{;vF+=F=ORPX]UiQ^ck7CZ*BbiUIyesv`iSv0NDI]N7d ?vT$Aq_m]p!' );
define( 'AUTH_SALT',        'vMv*BF17?#^9fiV42}GFoL>(TC>cVkXUwR%of;1E=G&u{KE[_(L126+J$%x)U~xE' );
define( 'SECURE_AUTH_SALT', 'UY=y[>Hepjm=@6q1o!a@iD@GglZOCm3!=W>FOc4wa41o?ri>o4r4HWVv/PNo;m{)' );
define( 'LOGGED_IN_SALT',   'S7@Q5&wopQuFVn)p;kP0#cD<_$>5@:i$&>baX5ATXm.KHlWif-}X5Zl`rAl0|{zP' );
define( 'NONCE_SALT',       ']7.W1;h_x.P(Q*Mo^Q<|t_2UPiBo@dc+f6|>B, ldT|^Q)JjLN{<WoQi[?AgWB@`' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
