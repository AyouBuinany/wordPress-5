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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'e-commerce' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '@&`e>II6}%-x`-rq<;Vu+y+Pt?x4}TZ=4@lfC$R[-q*/ey>0!VXV;yb`C~REFW;~' );
define( 'SECURE_AUTH_KEY',  'eALOqE_1YN>cj^.<kn3PthCZYOm/2H}w3E9>?+HCqVlwlI]_7NRKHEt6o3jl~k&P' );
define( 'LOGGED_IN_KEY',    'u0P4RWN/Q}?Ed.]{/e:RMW!MYS|rShc{uN!W/c@ pj9bFFu!Ho^Fai+>gH(]LE6r' );
define( 'NONCE_KEY',        'W5O{o5@+5A!}QQDd3z_,)IDn);&KCdXy>B^hAR}ae88wR$iQA<{.|$d[/ f24AXf' );
define( 'AUTH_SALT',        'N.4BxiVS9(`/zboa_.Y$;WXiUy5OD>{ok/j$v= u7y3|m,.AKwl-bt.S6xDr%4k^' );
define( 'SECURE_AUTH_SALT', '*(*&FNd1+xM4;~C8VjR)lY/yL87xQ3oY(r.ziH5R@eL4~u9fnYeuP1=e=y_tTrq?' );
define( 'LOGGED_IN_SALT',   'J5:EX:8nXofiD1?JvPj&2].a,tk/Wqf[yk#U(w#5P3PuVp$jWGL4UM*4t8>cTCU)' );
define( 'NONCE_SALT',       'jl,w}TE_E ?YVSw-6>dXW}5JaM&*iK_7yT)t8b/!W7>radfqhvN54Oh[>HaXj /,' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
