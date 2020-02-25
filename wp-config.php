<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define('DB_NAME', 'wp');

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
define('AUTH_KEY',         'uHl[r?!]x^i_HYu_Ah)@7_JpsP%[>kJ>rjA3C[OZ:d%x(Zh; z+gY!9|,Ak8/p33');
define('SECURE_AUTH_KEY',  '1(TK8 L%>>5Kq2DQkuaq.4eR|74]@`+Dt;<D.J@z12})3HM!me,zGR@I+qa6;G_4');
define('LOGGED_IN_KEY',    '=VoF?-z;2fJX6ZG#EMv^^_tk)DBK}nY. :Kdg*P{7N{~tfCYARn6(D+81S5r^_XB');
define('NONCE_KEY',        ',$)=zEhjd [ ]pi`%UQP.jrZq|&]]m2)G0_g<oE=?*{=MTXybnFX|su7rhhsMS|R');
define('AUTH_SALT',        '+n7rcd#&]Q+d&+a^rUvCv2iS;2+lpH;?QMU5lYCOpO5:@Xys#k-|?^.@F?Vo!rD6');
define('SECURE_AUTH_SALT', 'U+<:N6[#)L>]Nn}3?~_kj8]@8(o>#YXH/as*ZxY=@X3FJH!RkHO|-PIFD]j/r)ta');
define('LOGGED_IN_SALT',   'Q~6c^#5<0=S>#|7-_cA/hX|lE|+qdsY6(h^9gImlDj<9>YM8-Oe.MH@Yfg)j_A[)');
define('NONCE_SALT',       'xWT,m4Zr9{C7zbJ;gK.V+|NI!Wq!JKJu?0V`zN-KxnUR-|P}vSW$O_r!$cX c(U5');

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
