<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'melindaminch_blog');

/** MySQL database username */
define('DB_USER', '1026901');

/** MySQL database password */
define('DB_PASSWORD', 'pJFpnF2z');

/** MySQL hostname */
define('DB_HOST', 'db151c.pair.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'On+|H=qG9B#b6]--K!^Vc%.9tn+:.W]$wAv3ekOK3+^-YE{y1-M.GmmgxFB7:VJe');
define('SECURE_AUTH_KEY',  'd{$}r+.~SRv3|y| M8&Lkwe}injI:F&Vhgu.e>pD;$zz|LiF*7#/@KZpX^YC<Po?');
define('LOGGED_IN_KEY',    'h2WC<X28OU~$Yv.)4Xe|D|C3.AtewwH-4syCv0mWq?a6POtD6;S@*!drHdD+8vb8');
define('NONCE_KEY',        'w{u7aZ-Li8YDNB= )Q*V}mz({u5!Nqk!(uFSvP}O2p%4ZYG4ZT>ry?I`-x[zTM,s');
define('AUTH_SALT',        'y:F5BgUM6(H-RMPeC_=;7#g=C}Wnx+:@zy4eXJQb=.ueRV]-ur|dNF{,sPj{-Z~{');
define('SECURE_AUTH_SALT', 'rUq9l<r=A7@h;^0mp$PClb|M>)h;etit*TDTRI>}3O-J*:x8QLeLTe[ZYLdZ4jfL');
define('LOGGED_IN_SALT',   'mFfKe<ykp+b`*7M)vyi~T;4;pocZlA&Jr`:QH+O<.=Y<1)IHyvP##,S_JO{-oTZ|');
define('NONCE_SALT',       ')4!!xIR4.G$Vh-klXrBc@$K`poK:RH}0^<W,D_56M,SLJ3c_{vFDAH:)@G7}q-,8');


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
