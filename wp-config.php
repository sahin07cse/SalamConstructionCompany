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
define('DB_NAME', 'test');

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
define('AUTH_KEY',         '^Xj&xhih_`nxJVm)q,^NzJ4,n3~hXk`iD7he=,i{6X3=:i?+vLwvS3,dvK3ctEB%');
define('SECURE_AUTH_KEY',  '5mlZj5b:OM>f^w#|eNwnz#c[6ye/]v&$Z$A5en;LQrk<Rd5$nEuvo<OX<9HD6a0t');
define('LOGGED_IN_KEY',    'XnSye1|YSYVj]sYM9O_7s$SWw6rAJK:ov6<`-)xEp.Rkpp9@f)9veo;ieJ[|rfXv');
define('NONCE_KEY',        'g%UJH<$+iSqK.H/F9,szC;CTrq%UAx[U0we{`utB<Lt.G/B<t_9mvb2N1}r7h/vN');
define('AUTH_SALT',        '=F~5Us3S>01GDJld>a.Rg0dLQOx<<u8`}=x9~qIF1ljyl|2c@(spR,S4&la]hnDW');
define('SECURE_AUTH_SALT', 'O1esfv:6v6exIHW~6&EW5@G)C&w%@hSye4:?&R&%9L1N|d|u$ZnP#4k6h bC6X@R');
define('LOGGED_IN_SALT',   'p9t%*L]q-JHDk{cF0L4L`b<TRbAGQZKQ}ApWeL*h@Z?v1yW|MvVF{0ClKJ6:vI8R');
define('NONCE_SALT',       '{qf$X[C}&7e`$T[vip RGD*VRAuv<ne#wDIX6:[2b{NRYs Gd2g5EafqSju=+M{M');

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
