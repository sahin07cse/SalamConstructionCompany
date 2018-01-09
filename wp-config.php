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
define('DB_NAME', 'scl');

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
define('AUTH_KEY',         '0(#9.2YO%G8r%c&sl9!N=K))Y{&ZIa{tvk&Km.?vI91iz!e3~g`;v36;*ri$jVE{');
define('SECURE_AUTH_KEY',  'MB9E1(n=I4!=rB)iEL^V:b[)#|h7d$R~;NHI^R-I[vRDbZHuZ5!0LbTj*z ,N7~4');
define('LOGGED_IN_KEY',    'LxN2@OM!W5N2],bGl$3z+J:}c5Ov.{9^l&X*b]r5{j`!+oq%*,aVS51(&;&(}c~-');
define('NONCE_KEY',        'pR}*-83}sWOLltz#s-h{GjG2@{P4=KgTxR<-HpMgYSDWz7R)A;h6w=3(P1Tg}(fs');
define('AUTH_SALT',        '?GFwcFaLo&m3]z2>Zd)2Unty${YF6`PN#UVh`-4HeL_H Cy%J;Lp-IqrwU@,W+VK');
define('SECURE_AUTH_SALT', 'dLSsODkx3=Lg%QsLW6|LJ42cwTV]F66.!,-j[Wu+z0hO#GvHH2w>%Gq1/Jv}8rXE');
define('LOGGED_IN_SALT',   '4W(RCZKLVWu]M.Km]IDA:4omaZC][OuzL6/ c11XSa[CDap}h+3:t5vW]ls!$l?A');
define('NONCE_SALT',       'T]!M8i%6Wq}xxD8>Vv9r;tPU:6%8S[(Ob)w(i}#>2sc(>]gj2~F@Zjdon57&&-]a');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'scl_';

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
