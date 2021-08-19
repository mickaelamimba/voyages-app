<?php

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
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
define( 'DB_NAME', 'xa7jn1nzwxpfxvof' );

/** MySQL database username */
define( 'DB_USER', 'j83exbptlhec7k5t' );

/** MySQL database password */
define( 'DB_PASSWORD', 'f0u4f66m6pjbo30y' );

/** MySQL hostname */
define( 'DB_HOST', 'j5zntocs2dn6c3fj.chr7pe7iynqr.eu-west-1.rds.amazonaws.com' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY', '20fQitj=o`j|wWOU2vBxvNB:nLDkvDQ+*_dxRV5:xe8F|Rt}4];nCml%n8x:^</y' );
define( 'SECURE_AUTH_KEY', 'D=wp$xaXC@.=EVj~(PqR|@,prziQN)kGuFFy<9RJ4oMzT= ;ZKs3iKIF3@e?arLJ' );
define( 'LOGGED_IN_KEY', '(dplr|hfj0qBx.lID,.^hH_GNubGxN}[R}>,fBZI,SS%1bU$9aZ=2KKNoYPf_&1x' );
define( 'NONCE_KEY', 'g83Sg}R8`nEER4Atq@a$gkFA&`KHA*?_vY6P1Z5<T}UbNL)ttrQKBfI9!X|iOj6%' );
define( 'AUTH_SALT', '+4$<At_d+#i0DsCXyx{c,5:tGdA.jnuFPC<,o8ST`9L9xrQ`!6,9z`;QzONxOM4@' );
define( 'SECURE_AUTH_SALT', '<)QU-g5Un-I:[8dX<~@QGgm!B*_rij|C4U(9ml3!RnSlb+G>?XSz?!>m^)Mj{URm' );
define( 'LOGGED_IN_SALT', '&tJl3I@UmM[?O4]1dZq=Fdgm_#0 | }UXLyF-AG6XB^v$8>g3V2pEt(*X=+RZ8()' );
define( 'NONCE_SALT', '^65%En@|EL`1(>*LIw?qY_hD[]-BEFp$_(F:f>ds|^|ETO` pmKox!~CL@mi9:7j' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
