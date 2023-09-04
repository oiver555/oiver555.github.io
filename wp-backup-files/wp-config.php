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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u851164972_l4Uf9' );

/** Database username */
define( 'DB_USER', 'u851164972_4kYNH' );

/** Database password */
define( 'DB_PASSWORD', '2hwaYW8RJc' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '+r0Nm{paKIXtCc>l,C`j1W54+RslAkJaJ7ruRpX~J!mr3V4&q2z3/YC.a}0+<oe|' );
define( 'SECURE_AUTH_KEY',   'jIvjE?(f~Ft(XzBR_c+_~FwJR9D@]v-_A?RtUjUwIT@ztp^#yoY>W;paDv_zlFT9' );
define( 'LOGGED_IN_KEY',     '9(`GDwgd`}Z^gu&jM$a8l]=H.uE;}A,TnoSm1P<38p;msz868Ff$rD0ppI%I79~u' );
define( 'NONCE_KEY',         'K])*syU:v*HRT{tWL8Fg!C@nyG(LJ%$Yi0QO,fbw#Ol](XlU#6g_C@X+n<t>F Y%' );
define( 'AUTH_SALT',         'hARN)2Tas~G8Y3|<|]OUws^=P]PWsj6pQ|DTv$K>P,}sEJ@Mw=&zu+0MYisc-/b/' );
define( 'SECURE_AUTH_SALT',  'p2mhnJ[q`NHG!Nft05<X:[S%<:}fjx~wwj0SG@0u>i_<[O5}#Ofss!}l~I^9U|.h' );
define( 'LOGGED_IN_SALT',    'xKS2D$jIB4]|1}2!lY=vOga~a/F^&%xwhqWYQ]+E_6TGU$xo3,6t[@)>Og1LI$ Z' );
define( 'NONCE_SALT',        ':4k}`uPz vf[Ay]5DhMm?z`?M2q$;C!{,/zD*~O><8^]yJx< om5ig^{ *htSzo5' );
define( 'WP_CACHE_KEY_SALT', ']TJmwAo<&n>Z<0^Lad~.7,IAiF89#s82`!lzx %Nx|ndi3c xJJ :6OrW%l:vb>B' );


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



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );


/* Multisite */
define( 'WP_ALLOW_MULTISITE', true );


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
