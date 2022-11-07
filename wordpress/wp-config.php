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
define( 'DB_NAME', 'database_first' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '16W]J{.6 QiK.J+&e)ebblrp](7wJ:<<V3v`x7mLnhZoSgPBh|U6`qs.Ea~UI8Sn' );
define( 'SECURE_AUTH_KEY',  '7#+=BkGn-F}J%=:45Sz`VYFS5,_x_m)N$cGPRxLdz+B_7w0dnsjx7a^B/mW]%KX=' );
define( 'LOGGED_IN_KEY',    '^RY_dR?/[[-x3}w%-9;u*d} rYYm)sa)WEP7Bzhnaf@Ts3p7$dG=opw!=.17Bw;O' );
define( 'NONCE_KEY',        'AD0X;oz;Ihu+FuzAN1{%w`k-8uvPwE26Dt+pBr!?xcX%%`S:VhATgFEo6XkW~iV(' );
define( 'AUTH_SALT',        '__J|kZAvS?N )*QB`h4E+dMunkP/nJ345%:XI9-rj&v7YxS&7=7`y^Jd%!E`orA0' );
define( 'SECURE_AUTH_SALT', 'W.11/av:S@Z<Cj3[W0n4k.3`#TZ((0*1dA&DhN`W2E!h9/n@|&VhYH71F{MV]ikf' );
define( 'LOGGED_IN_SALT',   'p`i~UTl5L0ye3zLxj/1vf+f1eZfw8(?;P&dv]Fw$Bs-<i-?sPa5CW}|L^@n@GW>@' );
define( 'NONCE_SALT',       'M*[$Ml[m!T-suk`KUN%I#a4?~iuS21{XvF0dF Jf-e-1X?P,lPI;CgHynwlZeBCt' );

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
