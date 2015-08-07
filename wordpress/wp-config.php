<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '111111');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '411d|WK,,aoGz$KFnLUZVHMw=%0?Wb#|k`DkM4]H~<I}Gvs8 R|cm:mY/:6^xhe3');
define('SECURE_AUTH_KEY',  '%M2.@k1j]H)L/Q$TJOA*#u__iH~g|g:~FlWxvwS-4KIE}^B 8%]B9AL2hi-3!-8o');
define('LOGGED_IN_KEY',    '3G+QAL*,cASgGnR:]#M8jEA!dKMa9/i{S-+MsX/fQBcxv#cK|Ew6K)uK;W.brjqt');
define('NONCE_KEY',        'OkAyqtb]`(IIM63@H8~q1^{d<UMBeT#kYtK6.^6lZdP)@.Npi!TOEnN^W2DfBoeG');
define('AUTH_SALT',        'BphZ9KkG$i$N?j{qb{jD3{{+GBo0O1;`.3,29>;G4d_u-)obDbw,T#C~db+gl3z|');
define('SECURE_AUTH_SALT', '|>ipqJ]gC=:1alQCLN{T-Q56Rv)uU?G0#ZL{4x@WcpXdvqCC/]sLYQ:`~H:x^H.2');
define('LOGGED_IN_SALT',   'v|zJSH//VXw4^CZC65U%|GQi>|*F9+p!Q+zgNcz*JV5Z&Cw!T8_Rp95R{@l+KkdE');
define('NONCE_SALT',       '3m6]ll,_D_@Q||M$er<jb*p:LFWH:ttN@%_8Avp?&LLoi8G<>g%{W(VY?y~-+U$0');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
