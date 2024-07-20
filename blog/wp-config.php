<?php


 // By Speed Optimizer by SiteGround

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
define( 'DB_NAME', 'dbzudrkb7qm3af' );

/** Database username */
define( 'DB_USER', 'ujd63kmestubs' );

/** Database password */
define( 'DB_PASSWORD', 'ghhoyyiiir88' );

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
define( 'AUTH_KEY',          '`+m#+!2/jQh>.#-^Lh3o^,[n{FKqH@q?F;|rpMtIih,EX#!O_^Mf05b!e(>yA7py' );
define( 'SECURE_AUTH_KEY',   'UT_yA6F[D%xrtl84Omw;,2i3< /nN}6T?GxCTf82R-FQ1a-p~gp`Yq[01Sm[AUK]' );
define( 'LOGGED_IN_KEY',     'Zj]o:1l~sT!C-=L!+kRM1T06_[]/3?ME>:c[`qVFp&>c#4SIa<1#|y]A<ZIQ-Oce' );
define( 'NONCE_KEY',         ')BR81|&Z}t`#``Z@XC:]UUTsihro#r=j]tMIB>f*W&T~AQU?UjtQ%w&],vHky}3d' );
define( 'AUTH_SALT',         '=Ew^A-0yT>S[}R,xcB]5iuY<Xnhu*/Dg!,h&.qC2KjbL_H8Oi}729P!gONpO:Bkc' );
define( 'SECURE_AUTH_SALT',  '|NC%b{N]=vTJB=<hJ*w ;C)Z!iy?)e;?,ix%(<GgCZ[2y+)&A8]Mc:nWd,onRejH' );
define( 'LOGGED_IN_SALT',    'xVV3iTMMVtfN^coQvLj%zYkg|kX?8EGlplT=V~L}H{8Q@16i@$Xicsw@;4N-2;M[' );
define( 'NONCE_SALT',        '!|n7E;)NqIulqC:czm>Ld/a=qDdl@ua4:2IB.,<Az:L,<_Z;a{utf$P|w-0v]28n' );
define( 'WP_CACHE_KEY_SALT', 'BX6K-BIfXD TFSS1k8|=_HBt$b1b$a3D1tva$0NrJ5]},D9b:^;[-P6A9yw`UVA%' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'nqh_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
@include_once('/var/lib/sec/wp-settings-pre.php'); // Added by SiteGround WordPress management system
require_once ABSPATH . 'wp-settings.php';
@include_once('/var/lib/sec/wp-settings.php'); // Added by SiteGround WordPress management system
