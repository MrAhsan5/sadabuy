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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sadabuy' );

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
define( 'AUTH_KEY',         'g`by}C9h)/;5`iq0dO??th|+?Z[7OXQ?t[r>Q$QnWnWBKc!4iub-xnmRXWz|!-nW' );
define( 'SECURE_AUTH_KEY',  '%-1!]:sC1m6VZ{x/hk6>4B8zLHzwCPvG!B=9AV{UjiE0u}PcH?3`[^X2yD5+SDXP' );
define( 'LOGGED_IN_KEY',    'G.8M9d4T3i-D4}.B8)Jd7+Hi?aRA5a@Trs/Rb=Ri+F~B:0I]4v=E%G74T.IA5BNN' );
define( 'NONCE_KEY',        'ur{bWvU}NWd#*|_:_D`,*ER9hy]R0 P:g8Vs;/r&Q[m.|u+@=x2GM`9:*LcSCtd.' );
define( 'AUTH_SALT',        'b/wuYAZ/R>lMqT,8>]HSH9aO(TjjWI:3i!-`~ZuZlzQI4)-fYi!n?PsC?Jka4^^J' );
define( 'SECURE_AUTH_SALT', '9u1dF7tx#)&1VJW1ZZt4O<bo7>_sVO.<KPx394zz.Q)Zo|r5eH%v1sD86WNHMxZ4' );
define( 'LOGGED_IN_SALT',   '6fD39rFekj5,_T|{.7;xRC/_3aM=cMqc#@(eY3~B5Q|.90?faT}Ssb-0(8%dNPGv' );
define( 'NONCE_SALT',       ',%j2/xCA5F+<$A{QW<}Cr*x#T(.8R4M/;cPX,j:?@`L6=E`pys<<3S<Qc~MB&q z' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
