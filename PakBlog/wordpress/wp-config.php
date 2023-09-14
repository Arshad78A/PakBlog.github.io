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
define( 'DB_NAME', 'pakblog' );

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
define( 'AUTH_KEY',         '@Ll+LuKx9 QjhVhbKX,SGM^1zYX#KwpDJ7+(I;%/7b[u+QA`Xw5>t>%N/ za37Un' );
define( 'SECURE_AUTH_KEY',  ',yDOz[]c?]X|T^%mu<9OtE/To5usw1]`$m7jeB]_l R0##md8TW%@pS|VXQQbXzO' );
define( 'LOGGED_IN_KEY',    '?8W@{(V6^@IT`sdxa/+1?xAi4P7f<A0OL.o9^r]t5GLKk}p7P=&4f|;NSJ2V?;d:' );
define( 'NONCE_KEY',        'Lm+T*Rd&$2T:>&Ca;O>=|=-&(GUiySl@wb_6j p1ZczOVUAH4&Vs|)k%TbFJFDnY' );
define( 'AUTH_SALT',        'T 2/_^0DFmdsDbrvEN6L-YiU(.bYR)4xPXd,*N3HAh,^V<xETW@U%tlVzJI^5 >J' );
define( 'SECURE_AUTH_SALT', 'WrZr_)BC)->fEW%$=KH-&.B6FI1BY#%&ko(q}J.A=Ylwvkra;DEE<>,I`h7g#[=.' );
define( 'LOGGED_IN_SALT',   '*k`LdF1>kOd]v&o3&&tR nSo8n6(_]bMmEkMw1*[d7pxDy]PF6}^1hRLq0h,rN5}' );
define( 'NONCE_SALT',       'B+TE]!D0Kf/o|?Pe x,2t&;UTuk=i9biyX`}T3y6Lfn|/#f.l0|`qF~+&Hrv@~eX' );

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
