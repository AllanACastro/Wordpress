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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'alura' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'Z*3=90X6Y%*:;8C|dM0chS@U^jL1sO{u;it?qeUiw|a+h@ou]d2>+`1P_3fiY:5Q' );
define( 'SECURE_AUTH_KEY',  'qKOShhH}s]!#uwpZ,Frm(hH=;/0vU3K/SAEG( D)HN70aZM:Do]3{s+S` 1Vus=*' );
define( 'LOGGED_IN_KEY',    'Y2V#W<+Y6c.]p-v8^gG?xseDU<,#*Iv+{f4itH,Ug~hImZFn9qJJC@ySaABiakW~' );
define( 'NONCE_KEY',        'IBDa{N>gsM*+h]Lga]RmkKPtz36rgkE73Ybs$A`yh~XC}5YqH{tYY!`GT{|0%<o{' );
define( 'AUTH_SALT',        '4,0[)d4 $SA?7{zm<f2T<4A<Ays.Z$kE95|0<}W+u;%HU^Phcklx2<7d:s5-W7+~' );
define( 'SECURE_AUTH_SALT', '{;IAICq>/kswd4CI_o~%hx<[3FLA!f=J]}yQXS9d?u^P29T1G^;h6u:Mn}8;y:Pi' );
define( 'LOGGED_IN_SALT',   ')TJ4C =xPOt$my}Gn$I0lSb#NQD6&*F.@#d<|?7lA_S1|7!EJiyVxXK)[;nq}j~@' );
define( 'NONCE_SALT',       'D^uJ&*BbRe5VUC7Gyp%ImtE`pTWUAKXjtxVx[)+;pl*kt!r.]w5`RZ:d@v6|4x66' );

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
