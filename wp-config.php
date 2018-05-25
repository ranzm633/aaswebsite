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
define('DB_NAME', 'wp_aas');

/** MySQL database username */
define('DB_USER', 'aas-admin');

/** MySQL database password */
define('DB_PASSWORD', 'Activeapps32!');

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
define('AUTH_KEY',         '~TN9*p;gx>=EQ8-/KaAp0I@xiZi?%D`vNS?_rD(F7]KLYehcN{tuY .@M45<^w ]');
define('SECURE_AUTH_KEY',  '}sxdy@#~_%c?|;E/D#/S=2{l6D:oKeV3VI%Un!&0zU)?P%[r(nesN[92d9z^o|Wn');
define('LOGGED_IN_KEY',    'p/U^]u6:.+##*;Q@J[hLv^~8iGm5T0y2ikaI8Ft,UWl@oUYp,IVc^&k#Kat@n(6C');
define('NONCE_KEY',        'OKn`9[+U5g@RR:m`6;`#&l}Xm9sxD0mxVBvq]GPjbV[Z`E^:b![j5%=:NKdhS({C');
define('AUTH_SALT',        '+a@PrWu!@xqz@o}k1y#g nwS=$YPR{mDf-H;-KFFc:GBCP:}!<L].Aq]ZF`(Gnya');
define('SECURE_AUTH_SALT', 'rQ3W<B3N*,$OhFyG{ma:?TowkB=Z]exf|7S@HgV`qR?,-n1j`&e,<e3)/H0>WdPB');
define('LOGGED_IN_SALT',   ' }?]K)dhcXe&y2}{9.f>b|@?D0N_V+%Bg/#H(F3N_CG%%Jh3y$m<Pwv-<6*9+Z90');
define('NONCE_SALT',       '~cj~/F@/yNMPo{+elka f.;%1JcK.BZ$8A,vhx&jDooN@p:^2oA[@Cp&oY4$klq1');

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
