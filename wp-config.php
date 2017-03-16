<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp_store');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'nirFryGRjYI3W*u@81%-TmX=UA?pgBvsxGn)lmDz-C;*~V4WTY34-G@?B) fg2gl');
define('SECURE_AUTH_KEY',  'aZ.eYYXAMU6C|Iw~>WM)ot)%$A%_VtG:Dz(J9k~WuA9W5NycBqivyt]Ns& 3r~ln');
define('LOGGED_IN_KEY',    'nLDPn$T]=*^u/KTJCSt;(%I]d{qjmnlcMG.clV#l-qzT~Pj} O/:9pCfC(;@m1-*');
define('NONCE_KEY',        'y)SgRM]*(pK%CF?mQ)Kj51].>{~gabVg&LpQYtBqKsl6G_^L{|Bu<zw5_0@_b_cW');
define('AUTH_SALT',        'D.+qXL[em;/M#50E!1{jmaWBa2Q&T:)M#3xM(}[EWw0Z!!TU.s&]Di4(=G)R]w2;');
define('SECURE_AUTH_SALT', 'eg%^L=OQp5qqp1ufk_0,6Ag2v~.;sZ?WFLqY4~k([yK,/-|O[eETWEgKT=fCTVGM');
define('LOGGED_IN_SALT',   'kfs% 97#+JS0yBhq{4DSuiG[f|snJzEVt^e3W#r7Nt(_V1L[3d{z&Tc3zEM4wjZg');
define('NONCE_SALT',       '4iI!{5Hz{@S  w`grLB~n#_xBmaj$Sz&HILVJZaeME<|b3LAM=i:cn@,l{r1&pSn');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
