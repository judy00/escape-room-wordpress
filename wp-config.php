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
define( 'DB_NAME', 'practice' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '@uF=xPJt(@8lYxl@@om`q9tK~T5te#oB>m,Q#w ?{t9PI*6/3wV=v3SuN53XB1vk' );
define( 'SECURE_AUTH_KEY',  'Kwg2u5%1&x<>qOYKq:RmGSQbuu|w[Ftq#ZCjs}mB2E:M5wv/Uf<34~<B2 }>=X((' );
define( 'LOGGED_IN_KEY',    'M[G{M7X4~5rR~IY_U1{LXZ,lYIh4!uZ.WTa%gT5HbG<S<S3mFwVf[BLc1OYlSJOo' );
define( 'NONCE_KEY',        'mT!z]s);)2bP*AtA155)sz3|+#a#F<)Q5QX(F59Dv3C7p:trRbS{?Nv^~j ,*U@n' );
define( 'AUTH_SALT',        'OLjoHM{c-]PE2{*!G:B9)t&@lJTGQ=V}PbO^ANfZIw-Op ^!d]0aBH+ E;pKk@vU' );
define( 'SECURE_AUTH_SALT', 'yJ Af6Xu84;)gB{i4yl;I^}M5Bt8LbxA&WXy4:0Dn5K!EnxT9mtP,_-eqFt9_$!K' );
define( 'LOGGED_IN_SALT',   ';lQB%:a&(36oT0Gz&w9}ISok6:X:n>EDi*hX]SGiDk@RJ<:~?0^,WOedS$]qVIUH' );
define( 'NONCE_SALT',       '|NNB?Fp_9WAN<c|DGo%0E<)UqW-/c+[?uG%1bSGAS:m{vsHpP][.ft$&YvtR lE2' );

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
