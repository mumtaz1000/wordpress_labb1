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
define( 'DB_NAME', 'labb1-mumtaz' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '[4P,iOJVTQwt>tlzcOXrwOBl+w{:>];_|(q63bUN?F[Dc&qa^ Q;3t.ksM=,Ndic' );
define( 'SECURE_AUTH_KEY',  'VbFmNN;L[^l29sng4GGP&*7(_s}@^,{ss}A-nje+lUL _vDWU>Ez1J40Q:<iH,z/' );
define( 'LOGGED_IN_KEY',    'k*kxCuKE07S7kZCpVfH2[upT8#v=V5]M#DT#v)^]D&7s+kTU<z5oss?z72Z<hwIO' );
define( 'NONCE_KEY',        'M]M];.xy}]gC,)97P8,pe}OXxHj.P~G4DuRx/Ed(FIpzW7MAEd*eC1wVc~[V0R7t' );
define( 'AUTH_SALT',        'pBWMVgRxnH7*e1t.h-(T)J?K(LoH7;~WsWkPjSF.%dkaFH{|Th6erN0B9p/)Q5W|' );
define( 'SECURE_AUTH_SALT', 'Vk66{a0Fh42{{=F>y71bD]uKH7vUtGNqO]`27<Lj;2Rfxs -Q4loS`0S&7!g.$lV' );
define( 'LOGGED_IN_SALT',   '!yThKWI-uqv)^DnTx|m62)?c4_g`-Y?M8yD(3|cGp$gHn+d!lDVV)x8eW}3rs5{i' );
define( 'NONCE_SALT',       '|g>DvRF.9HYgLda;|;(LFvvkkwkNM.B5` Dv`Q+!w!e20{W}x^^A rqp}?r(HGT%' );

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
