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
define( 'DB_NAME', 'codewaves' );

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
define( 'AUTH_KEY',         '[ZLM*b}6AYp)_Up[p2%M *D/bxk`{&-wtY1n4do~SIV7S6Rvs)n0+_U*L B=HU6s' );
define( 'SECURE_AUTH_KEY',  'ktwaIg>ud{2g9#y&FH)bZ4Zy~HzDW8%D}hYLIY35%ElF-_T_-5I,fz/BPxTEBT}@' );
define( 'LOGGED_IN_KEY',    'BfgW9TMgYb4PDaw(IfDD,:j[:9oNa}:~q9P_3=I@6WZc38UP_h*[j=j[L*Zm_m9i' );
define( 'NONCE_KEY',        'hL>MFPMFNK7x3`W?;_*5)xX%<Yb:i%I+v-tEVK95m]K~gPI];GYe_/>!ddJ@vS3_' );
define( 'AUTH_SALT',        '_a#JpD=fCI}pmAvY]3MIX=wo;^9wi&b:c_%n4ug2R#D6i=w4Rr~@yfP1lok:b[W0' );
define( 'SECURE_AUTH_SALT', 'G 4|g(gI<my&TZGH$IDt_qAiDz[J8#f?u?UZtW8j,:u^)yrL>*V7f$ywg8k|U0I0' );
define( 'LOGGED_IN_SALT',   '?FM=ua>p=8ppx*7PL22]v:m.Oc+)-`59FS[?E92Hmh!O[^HBYjQtQuBeibrK+9||' );
define( 'NONCE_SALT',       '`@`Jg)q8LqCOFA@RkBnzVa$kBAUuRQDAjk9NZ{j8mW}s8Qle7kU.!./8VV!biwJt' );

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
