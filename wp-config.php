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
define('DB_NAME', 'shesharp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'Tq~kKB<y`d@Ote%jw+_7>U<4P>80_XS*@RzriNX>~AI^yKqdoX%ALfW0~<AC4w?>');
define('SECURE_AUTH_KEY',  'vy-S]LcUXmV(`=z!Hm|.e (m~q|+71?6W,#0cpB/L=xPz+-Q:*0d}W<:v(RBSvRR');
define('LOGGED_IN_KEY',    'Z%Jj:,J>gBJ=^`9J/c$FJ_1({zXi+%<K|v(lPjYkN,+n!iakQ<.=l:l$ h0wwD)I');
define('NONCE_KEY',        '91%{LSr@W2:bzm]Q;QwzDC#[#&w4ptD4{4!!uI@{u^~wQ q[i{7a~mDB}l}_2g4L');
define('AUTH_SALT',        'M@ow9kQV3t_WRXNc+-pB^;Z9u}ksz)4A17_iO0 hd@=n?d:i::dIM:0sMWD0C3m!');
define('SECURE_AUTH_SALT', 'iqM4C2,alp8 1?sKT)}?w:<c(`63f*1a$A2TM%E[%1f6!@VhP{l=ph|}mv&{gD&v');
define('LOGGED_IN_SALT',   '~^#6WprNKvrdS2kGiN{8^Y_$V(u>E54~>/=G@r= xl%%8`D9E4x{${G1.U2OlCE&');
define('NONCE_SALT',       'l+X}-R4K<zB5Cz68W)FppYnI7P+pyW%Z/?iCW|&^S]<k&?R6%a2?R`c:B#=KUJ!F');

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
