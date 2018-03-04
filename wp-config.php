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
define('DB_NAME', 'hype_district');

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
define('AUTH_KEY',         '/ik1e@V(0p?t;P.,>ZOJbw9% @>NHkp~`v%A<;ebmsc1`?Y3N:a,=}4X94WL>26p');
define('SECURE_AUTH_KEY',  'r_V46Dy7HBt>)-ufEw^BUg>OQkGm,bEKmZ~S<`4Dtbrv<x)9s.m0*NBo8Aeb+B1Z');
define('LOGGED_IN_KEY',    '=vo~n:`:<p?U@uxfFKj5+/:j>EBRY4fCCt_OSUAP1E.oj=9mW{4-i_Sz ~4BK}]P');
define('NONCE_KEY',        'cIG{Qn^w=aGWZwC}C@)*,6y_ #-j<Mr?1%.rr*w?+:h#)]?!@^ZKdK=$&_s#9=D@');
define('AUTH_SALT',        'lzd-1CMdY{uhE5EhNSj?rL5XF0qFX_>O0FvT5f8xWP-O;_0Nfn]Su$qC;nh([eui');
define('SECURE_AUTH_SALT', '.rJ7Ujc}ps%EVVkFNU$9uL;(7+(.t= 871(lH{Ffw2#3qfnt[Nh[WFERBJD+)Q+:');
define('LOGGED_IN_SALT',   'mr>gwD^jb3YQ@$rvNnH8tZ:O-A,BL(H7mAyVma}/=6Cfm1I~I$4N.`fgQ7Zu04Mr');
define('NONCE_SALT',       'WUG4C V#;oF<#a]nM^8FY)-XJM:FoznmU}pWAe{8G?(xNqhci=;9__AJ(WGJ7|?3');

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
