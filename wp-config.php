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
define( 'DB_NAME', 'blogjf_db' );

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
define( 'AUTH_KEY',         'ZJgzo`TT+*-7-`7BK@Jvcu.`1=fD8,b0$Jfc``g$,7zP43_h@U&2Cafa$^]h`0x~' );
define( 'SECURE_AUTH_KEY',  '4%X.ZyA8YA@&hF2oj~,K+i,o1/Jc<|h+LS+D5X4+~9ri#KARSCk24Mj$Z4`ZqpO[' );
define( 'LOGGED_IN_KEY',    'W0m>q1f?HR}S<;<Y*=Aa>Sup/bCHpOHy%.1iu)GNzL-Z}JREe& h~+DBlcW&m+FM' );
define( 'NONCE_KEY',        '`,u*bYr!WkG7[Xt!+;F+%@?pkDqi2P.^,DL3f}Hr1*7g^5RorM)?N*&TbQoXVXp*' );
define( 'AUTH_SALT',        'm?J*d.+-:NznNUEZ$!dtQKV[lT4*ir;9}soGvN}V^w/wn)fxz0R9Q%))2NWS:T>f' );
define( 'SECURE_AUTH_SALT', 'dp|}yBe@qP==FMGO%qx&LiJ)!hYrnBv#_r-QCLspZ_/f{= <?_gouY]chFLAtTq7' );
define( 'LOGGED_IN_SALT',   'hj7Te(iL^q#^t0>C1 q:.Q:NO)T1@z(&T;y2d#wO1+8aJ QofNx=vZe!B,s-IW 6' );
define( 'NONCE_SALT',       'TH4=(uc[6?DWN+7XjZ*-W8+zhmS4f.#{r];6t=n>vvm2,$Bm]{Rd]y<E4Ps0<|rK' );

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
