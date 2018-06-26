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
define('DB_NAME', 'aas-starter');

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
define('AUTH_KEY',         ')AJ0qdCa9Tv +;2@:V(WzD>MTe)6FjChbc&o;0<94*_@m&Uv q/ ytDr=QBMs>@4');
define('SECURE_AUTH_KEY',  's2B9Vke AtjiPRQr6N`E96&q}K,G-Hbkj2w#ih#4yhoa?)mHc?B8XPn6Fm0L5&fB');
define('LOGGED_IN_KEY',    '8#HU(~D1G!Z&[Wolw|:T8&%!/}e36!2W{(O>(S&[N/l;~)a)|eE|U&Z7~Ed2?s=;');
define('NONCE_KEY',        'b(D-mr43^DVr;J^S;.P|hp@V>7fuwP+A2e7Dt0<nz_A]0Rbm%:r/_V;vL9fAcM0#');
define('AUTH_SALT',        '}{y}i/ES$B2-ruN:L(LWyaU.f$B}qX6bInIr$*|8<DPJmE3_?~IS3TaZzwUC~+tF');
define('SECURE_AUTH_SALT', 'B]wuK5I=J)sFDE)=pIk)Fw*+UJ.[/Q|PyO*MOa4* eU`cH>sq1vH<0;-a;C`Oav{');
define('LOGGED_IN_SALT',   '#u(]5JdI0[3>$QU#Q!ruqWi7rXXm&A(J].u<|NQ-(0&.[h(e4[P1+7BhI;bx2ai~');
define('NONCE_SALT',       '0=nd?Ju1oO#CAb^D5Z,5t.Fp*U+saQwHO))IY3zU1z4NM[IB+Vbn {p0<jMP,+YD');

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
