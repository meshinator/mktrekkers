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
define('DB_NAME', 'mk_new');

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
define('AUTH_KEY',         'jub)GTJ{WU48=:J|nUq-g%3WN0DoT7lfWH,f f)+i} c6Vv@po{hh*(EG}!n,R/E');
define('SECURE_AUTH_KEY',  '!1Ww(P`MXHBC!!HPb=mC elV-]K|<*q9i4@yc7[I)ix!<V<Ab7o^<%g5~:Ei5wzw');
define('LOGGED_IN_KEY',    'Sh*[^H}7A5]94 ].KZlKNxn(|;cJKB3]q`x7fm^f`e[%k9T#Y3036[;Av]xwQlb_');
define('NONCE_KEY',        ', [g-OyP~i5!liui!,|?bdKM A%![Q]6(7<+?|.) JSP&S~{Nch.w@fvT=:s7]kk');
define('AUTH_SALT',        'bU6woLMr]7s{G/#~wZ#^O 0|@@0S0u_b{c]<q%0}sHtmCniC]W9`j?Up9 bD 3$k');
define('SECURE_AUTH_SALT', 'I=qx+|p;6RXbxvuOp4# +$lX+:S.@XHO<a#3=a)Qsm!?$oFTs61Rzmq_-mj9PhGI');
define('LOGGED_IN_SALT',   'r?NfvqT=sxy3<$|1{e3I0}tgsnQDQC<Gv=lAm}!27*9J?v7b|{bK>XK?m5P3%UF~');
define('NONCE_SALT',       'P*?v/*C_a}%q#U3DJQ^1{c{w.dLC,Is)]Lntgf9,*.W%%NN849M-|FsW8^/|,.8b');

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
