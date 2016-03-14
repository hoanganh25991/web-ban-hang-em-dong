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
define('DB_NAME', 'c9');

/** MySQL database username */
define('DB_USER', 'hoanganh25991');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', '0.0.0.0');

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
define('AUTH_KEY',         '`As|#zAT)q3:Ct36+OqO)9 ^V~h[kURI?-MI@dA9cd}+#JR=Ul/bsWx1:x{v,6LU');
define('SECURE_AUTH_KEY',  'VL a,d~2=Ne%bt(G-fGe8 FA]<_6pr-Iv`G^Med6sm!*Rp#3/1Qg7xynu@iGXW]$');
define('LOGGED_IN_KEY',    '(|ld}:fjO-h>d!7ZG7*7A_Q]MYE-4YwWd*a/Ih,kz?M!`Ru_5}3;VAZqNf/GlX2<');
define('NONCE_KEY',        'hBWIqb1uL] s<l]N|Nm)8_GF|xi!Y{as^x_Bz^Igp)J#:Fi)Y{ycYyfG.loZ)>_.');
define('AUTH_SALT',        '0WaZAEF!e`eH1tUy(SZJNl6QDH8d-:AZEDe?U:S[KbnSGU3_<j1Zs^VL-]?M*}oU');
define('SECURE_AUTH_SALT', 'Gn3q(|{Y*pW8-gVKbC-WGN:9~De$??DEctM)oAT=+Z6aJqV|p|MaV|A,_@.~!(qG');
define('LOGGED_IN_SALT',   '[D 4C;rWTVf5P()a-E^>s!Q~A>Lqh{}gcM8o@m?/,}:k,?V4zwYx}H~pQ7Cy5@/C');
define('NONCE_SALT',       '8?(W?I;gxDo9i:+0kcg)|C!JEUe 9L& seR:J@^ [CKbqI]nFlUe$M|m1K5-89tY');

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
