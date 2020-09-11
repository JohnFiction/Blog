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
define( 'AUTH_KEY',         'Z)8v<4)HuqO)#p5$CIQzKE7CQv4=R9#u22,cY p}d(24W8,L754>{)bZ!shi}suN' );
define( 'SECURE_AUTH_KEY',  'Y_|aoV9Lq5L+#qj>ia!^AP,J9%iT#|oevHm|Y09f~5[A9>~;o>V^~sb=VfXtyY9S' );
define( 'LOGGED_IN_KEY',    '(wD*~;Up~`a?^f4(n0`zU/$[Mg^B5~]&pfhcIqbkkTtV?q=[(*=T8IZ)wV:,VL)_' );
define( 'NONCE_KEY',        '&N_E1n A-BF()=u}i;v jdpyC},Lf/=>!<!!aDz-IViOr0x-Nd6vJ`3+|#Ik+3ZB' );
define( 'AUTH_SALT',        '-Q*H{$R*00dy%E`Ng4SQxl#2HWPRUhV=X[3[6+=_aO/9xc:#IPHlfW[h$}%A^N`6' );
define( 'SECURE_AUTH_SALT', ';fMmFmwb#z[5hT2pvAp2G*;f=!fafaJRHoWP?LJAGl:Ocmpdl7 5[;%o=F8:i^LW' );
define( 'LOGGED_IN_SALT',   '7+c=Dz:<oAno%C<blcU}Kp-0}])~yw0(dKb(&h6v@wuAl!a wcd,qrDz~45PQ!)>' );
define( 'NONCE_SALT',       '_!v5A_|VOb0djIRXEhDJ[c_yn?-)Yj}[?:UF9dA[w,%.V>uh3AHi+Y;:XOjSO. .' );

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
