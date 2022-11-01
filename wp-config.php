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
define( 'DB_NAME', 'intranet' );

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
define( 'AUTH_KEY',         'T{{S#c|/MViPyv/K_G$prWyWFg`J(Qe+GXaG0d. l:Q`p3$>|NpHysyg,YLW$~bX' );
define( 'SECURE_AUTH_KEY',  '<8]3oq>Y EYB!9Ncd!z.wZCFE{&$P+TdY{HCF?xhV(Ab]s}R@fddg0;=cCjHpe~V' );
define( 'LOGGED_IN_KEY',    '6s<3i_$7,u0)2]q2+tHB_`3!.(2VRaa9>rVS;&8>=4g~%*L7N6%u~nKN4&PM=]dc' );
define( 'NONCE_KEY',        's(3{y$5~e0RPMt,}ohMh>+% %IgA5d;[efVq:(_#aW,H%69dRewVWNFt6j:E:ojx' );
define( 'AUTH_SALT',        '[3fD3VO%H]kui_D1Ugq9#3PY?fd@b4H0QZQ|xd?|5XfY23_RmU.%{VCI>V?Y<5%a' );
define( 'SECURE_AUTH_SALT', 'H*x{.L>Jet-bQ~i[?U1SxA<3(nvV4C!SG?kpa!xmt)fyJW,p_U6jriQ4L6a!A^`O' );
define( 'LOGGED_IN_SALT',   '|(I<?~v:?j{NQ|ds8/BV41)a9I~hOq`x4SDs3nvU p4@t?J8G~qw9Ni$g=7RJ 0M' );
define( 'NONCE_SALT',       'n8WsFxONy<(B8?dc!?<t}Awc{GsA%@dA[! ^zYXPI>]wEuQ.m#GJX|q&mB3dOI7=' );

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
