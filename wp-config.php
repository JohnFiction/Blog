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
define( 'DB_NAME', 'blog_db' );

/** MySQL database username */
define( 'DB_USER', 'johnfiction_user' );

/** MySQL database password */
define( 'DB_PASSWORD', 'H%4dc"3s=9o5' );

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
define( 'AUTH_KEY',         '={<kK5^BZZVB[2-zqtyklc>%QFcYJ0H]-$zD=c]9OM2;6&nkWO`kO9UAeJW.$k7p' );
define( 'SECURE_AUTH_KEY',  'Y7(I8|e5X8:)`7x)bGHERk4*x{G!`)QHFbv]Q|URT%c$M%eTs/>IAqDn8[hv1sM}' );
define( 'LOGGED_IN_KEY',    '$4#~GyLxz`>lfH}c [<Ye_}7UoJEHd]gQ95X[d8.F[P-q)SR@Lm!9oZpQ3{FAABJ' );
define( 'NONCE_KEY',        '-pVOyycR4:s6A+C-2&mdt/7X9Cujo6sS`#5,Kw?3(78;_Zl@W>Hr.rrkioa%VnK-' );
define( 'AUTH_SALT',        '>~xCmy=>IZ WUt%@G^Xq:7.}Z7C83>5A>)e%&d_FIL]bcTT6Bx[dr^LY7<Q$m~]/' );
define( 'SECURE_AUTH_SALT', 'kYC^hH254V`m^!y0yne4?-4BC<u?s3v<((UGG{Vae[PZlfdL~^!xvt^j86{fYcyd' );
define( 'LOGGED_IN_SALT',   'bJ+U=<1|]@aQ4o9vQe0i(7aKl.z7Wc_P$;ay(`/tYuNE`FQLJda5}YUjT3VR ?),' );
define( 'NONCE_SALT',       '#6qJN2a1+A22`N_Igc8sTN),9N[b05YGd5oj.Z,lp}xH<Ahq^D*-#7fen~[wd0Gv' );

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
