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
define('DB_NAME', 'fswl2');

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
define('AUTH_KEY',         'Oh~SCD4tS(f@F=OXA+%k2o,Vm)1f[k3I-?+-Oz`KMEtMu/|hsA/xj |R-niJPR.Z');
define('SECURE_AUTH_KEY',  'hp95`dX9e%m&$<qvw=$z5D7Y9:#sqK*$1x0E791 +L!&8/[a7A6@rEH1DGI>{B8:');
define('LOGGED_IN_KEY',    'Bjbb)?q;R=3yb3C,B{Ck!a1sDu|0W%|[).1>.E{U&N)u`pclxl|,+EA/ci-vH7Kc');
define('NONCE_KEY',        'CY7TNDlk~y29zg&d95+6q{5eI+H-4w<hDc2V-g$Ln(SpIe+=^JgbgH I8!_s_sK?');
define('AUTH_SALT',        '{7H?_l{/g4[YL1rtDw/v[DrS+N4Anc}`Hj)znufYYoieG4c+e[E;o!lZ3|%gwKH,');
define('SECURE_AUTH_SALT', '`X.s)j$~L6|LBnr?6e1G/IH}%a5Gvhf+/6X6mj)-%q>J!4mbM/O*wGYV+n0U9lex');
define('LOGGED_IN_SALT',   'HIhn;>;BP?3qN6OTk`EU+)wz!Ii7>UGu)|p:Ei?QY8z}tKq9(>wu4Tf!(K7k@/!|');
define('NONCE_SALT',       'zcHCo.5]T}ulUOPDS5q;g#[wX:E&T L|v_Hv9( a|A@+gh5>|oA?<UCD3Tt0`#)M');

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
