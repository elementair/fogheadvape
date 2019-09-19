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
define( 'DB_NAME', 'fogheadvape' );

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
define( 'AUTH_KEY',         '[H##-zOro@F%JA#Nqww%CSkDt4eTk#y-PTiX#)Zfk1^Z1;!tXmX-?bhFYLk!GS/u' );
define( 'SECURE_AUTH_KEY',  'c8[ys)`cP%ne)thsEKe[eB,F^4jp&xOK:N$4F%xTsAC(}!:b!y@e!kp0^!&(;Io-' );
define( 'LOGGED_IN_KEY',    'S9);3+B`h8PI]@rkWir)y4P:*b5 :PDZhfi[@aUFov+z!mr$0L;9@9xu`q50$Ehd' );
define( 'NONCE_KEY',        '8kL.uRQ}u{R9o`d/eMJ&W@HipcNf;{&aro<#aC]{T<x+&OCv2b63e=U%/.A4DhAI' );
define( 'AUTH_SALT',        'K)&AE<wWh{RNx&FT%dyF2ZiThK&X[ry#YYQ3I-rK>:x[V-?KZ:;SuH(Y0?&|*Do;' );
define( 'SECURE_AUTH_SALT', '5Ub2<^RJl]wN)/VfQ+U.Agd0Qu@$!EQX<}Ut4n@_a>Lhg@Yc_[M=<Ir6)>-6_f[0' );
define( 'LOGGED_IN_SALT',   'xt?VXU}=LPYBXKJ)kWc`T<JX[uB=pA=^^4VOx}H60/82Xhd=>.l?~]lu.U1!ugaX' );
define( 'NONCE_SALT',       'j9bk{^duM,J;+YY2co<!8hN[bNV[rzY4xk2^H{:$8| 5HRE5AI$,_<u~rh5h!W2Q' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

