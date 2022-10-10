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
define( 'DB_NAME', 'testwp' );

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
define( 'AUTH_KEY',         'brTY(mz2zXKo*/]95r+}TUiVtEWu$~Z3>}:X]OH{E5P*zhw)|aW?.b,iNoFM0T2j' );
define( 'SECURE_AUTH_KEY',  '$9}i7AWrsfXdt!*-fX)f&U(qpl!=q_kphvns}E%b?+/93E(?o>2@~rzx4G{$Bh5Q' );
define( 'LOGGED_IN_KEY',    'LrI=;2H,piVp?b.rrw|VoBw>#wuQ`Rym3J}JU9]iHwyfVKmzjF%6|ND:Ekt:S{.*' );
define( 'NONCE_KEY',        'ekO73D3Xh&ClpSn$K$gcuF@z1*C0[.a*q)H}zZus>b9yuiT>~ICt8-t@lRSvoFUj' );
define( 'AUTH_SALT',        'mCpIgHaCHi.Q%? VBlsuO~RU>eRFB:MuR1|Rq[fGd@jXF!eJ:+=#!$t8Q/?gw?ms' );
define( 'SECURE_AUTH_SALT', '#2/2B{X>eqB0yf&J%u_oX`A#XJt%:GtjZ3r,AkRT)~z]ZXZte|Euc>`@C4z_zw*L' );
define( 'LOGGED_IN_SALT',   'I~5=t(>1}ZI!eqk/l[x`^&}1yFi>a5F?Q~(rS8r|r/3SJLgW-#Gx.O%Uj.QR]cq|' );
define( 'NONCE_SALT',       'G>{3sB%*,&Y[Nb2T0@&(Wd?#nd=eOkW{*uF8Ioi.yk?!4y(1,Oik cl/2%yGUO&<' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_testwp';

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
