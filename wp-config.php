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
define('DB_NAME', 'auto_db');

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
define('AUTH_KEY',         'x>Q=+(%wuhG~C8bfQ0/c[G)ougE?]SffZLjidsm+iSdQik9[NIIZ;/Ul7`0LP&ZK');
define('SECURE_AUTH_KEY',  'ft|K (e#lXVwS1ZW XwLJ]2wKx$1s8^q crU>kRLGHk$g< {idE`B(476 w-DnIE');
define('LOGGED_IN_KEY',    'e9m-VMl5aI<wNE@1ja@z62^N`,BsYg%<[i]LYvNk]LRD_Ir=.AeXB5p`d<aUBRYT');
define('NONCE_KEY',        'pFii{C?j=-~e!wTu`2>>@EUvx#~2)}hgAD5`<[g<zHQWPfdi;L=V`oc=}d$?4Wr7');
define('AUTH_SALT',        '{0/q~#p#y3Wde2rD<Yq{j@aW0o]]_a5 }5w@(6 *#:[A?f(%q]b>EbaorJb!(;]*');
define('SECURE_AUTH_SALT', 'dwY5k3^5Av>wh38]qlcv>!g+=nBP:t7XOEI@Ftk^bx FcH.o>xyK]4q_yw`t(?4{');
define('LOGGED_IN_SALT',   'W-gf58WPqP*N7@]t)%t#(i`1bS,I1/TaKZmjmj}!DcRrm6||#7#R$}x_CS|ZGC7#');
define('NONCE_SALT',       '%EU-D?Ex_Dr^bm1W4C7dn+-3bMzf##P~m,fb{,S33<qg}5+w[tPbjR#vjU+essIE');

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
