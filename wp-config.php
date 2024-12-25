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
define( 'DB_NAME', 'palashevskyi_minimo' );

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
define( 'AUTH_KEY',         ';w.=SZ=s{9[Lm4 @k!{Sliw4<#.HJs|}{G$7|t;N-8`Sb?Ng8X%_-.;b6hywfGLz' );
define( 'SECURE_AUTH_KEY',  ' 1OZrAY^luW6=mRS~Xm1Bn$Wfx.(Tz0Se(xePly6k@COW&ZYnN0w{;AfQ(g[%Rhj' );
define( 'LOGGED_IN_KEY',    ' #mze>3Tr=;-4f$n8v7KR{-!Yu5NHDl+_{%yljI`*L3#SLV/OvU?dA|,=^6/bHID' );
define( 'NONCE_KEY',        'oRj<uJRo`iIJn=0]`!eB(Dc?%,V0*eIr[6?G}TLD?%z%FSo083[6q~FN]>z1/(Nl' );
define( 'AUTH_SALT',        'c`>6cy4C6l1<bR(0QaPqt{z5TpN)LX13(Tlu>]a9,fsY*x~Jr{mk7?l$~2JrJcHo' );
define( 'SECURE_AUTH_SALT', 'q`.eLx)s5>*uau%`kRbqE6n|!R6>IFt=)OLvj?lgdF=!F|4p|y_p{/r&w_R<2cb)' );
define( 'LOGGED_IN_SALT',   'm^6=}k]PgS2IB5_7UV)pG>OG@%AiMhzLk^!/$-G8p}D^JrxY(aeDI-o#X;@2J,|6' );
define( 'NONCE_SALT',       'lrummi&=Da5L~~OJ-5Rcc5/Sx|=u5i 8? nOf`?}V6>7VKl$W2yl%sY9AxGhgGn^' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
