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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'flylinkers_news_wp_site' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'localRootUser' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'f-#HAKp@gM&8<Y^l5#f[01l2ib)?Cv~X;*U0nlWm>i>eR[b{7}[u1,(.vX7m2Hel' );
define( 'SECURE_AUTH_KEY',  '0i/h! 6e_CSh15C+#!hN#X0<}SD5 ,SmAjfTc4rC(YA?-?o$:=]-(Ca(z7iB>bHA' );
define( 'LOGGED_IN_KEY',    '9-!tx)/me)$m^6!D !6z1 F>YHBp>ykqCP(5y3 3e;dG]uzDA8vYcO(x~7bU3:Tb' );
define( 'NONCE_KEY',        '=yQAF>Y};r{]dU;_DIhD~zW#%HnbQgCKAH_%2k6H~Ew0#^k|+G|-J-)@Y{(HYG`P' );
define( 'AUTH_SALT',        'i(cW/#$T0l !|>UR|?S3s^dx1ygcdUbhBtE`}4xgGrRashv2Fpy#<8.dRp@R#]Ho' );
define( 'SECURE_AUTH_SALT', 'jC3@]Itu+UU,N-kZ :H%C-[t[t$|Uw?OgD/LW&z9FXVJ||40nK[{$j56=*chz7c8' );
define( 'LOGGED_IN_SALT',   'hK(lRsk|.w1b}OL#(XYsp~~cO*35s [yOLxsxS5hTCB ;U%gn51+;b?ouNd9A<q7' );
define( 'NONCE_SALT',       '3Xh#~AMM6>ernu(f9FVtGumd{WUzS4@uhnneZ(RmALmLQ?=+g1j z@e@dwG4t{(k' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'fln_';

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
