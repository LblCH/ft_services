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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'mysql' );

/** MySQL database password */
define( 'DB_PASSWORD', 'pass' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql-service' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('WP_HOME', 'http://192.168.99.100:5050' );
define('WP_SITEURL', 'http://192.168.99.100:5050' );
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '3>+~E/g>4]SL<7WXMq,RG~qW_IBM=l?d0oEHn.?G4QW8CLU0eKx<{mG]/.9f@Z#~' );
define( 'SECURE_AUTH_KEY',  'Q_z83jk3!V#45t6dGYza@DZvOkJcvgllA@~_iH,M*EF^m6SS&Y(3aU^)=6r>-VES' );
define( 'LOGGED_IN_KEY',    'S13|kY>Z1R-Tw^eU/}#iH/a!@i^6&zz^DqV9p{x 6$q(hgt59 nyMS}&q{s]dGzL' );
define( 'NONCE_KEY',        '=`]Z!j*?j#*A70!uyTzDJOf,m.E>&;;[):f:kq#1 # Qx[[X`P>@$rp0,}1 X_Py' );
define( 'AUTH_SALT',        'Uf08St@XP5gw~m)wI^(O]u)<nc7FDy`Lwpo@?{H3(1/)}N^$ZCpl18VYN@zA{fl$' );
define( 'SECURE_AUTH_SALT', 'wmz^=l;8lm{ywXQM``]mRjp*%F8qM+p)Cv.6{e#YFFSGPgW+Zf&j`%dhXgyc,!w+' );
define( 'LOGGED_IN_SALT',   '1e%x|*8L#>XRpBi,CDF& dFkTD6#nOwFEAxJ.s6,,Pd2n.}Ibm2*2GWup `oDv.c' );
define( 'NONCE_SALT',       '>tf!yy%|ue5=5D?4O7Z*592F@+ ZxFHRX~.7cr<7P[0}grtgc 9%7ccOw_Ki;&KT' );

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
