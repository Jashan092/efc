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
/** Th name of the database for WordPress */
define('FS_METHOD', 'direct');
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'S3d9uaoc`_+*IbNP^8fH^XgP*pn;5zNeU)LVDH9AD`okg~*zu~m4ieNG-V $spV6' );
define( 'SECURE_AUTH_KEY',  'Z^l6fVD@y@rb#m^fN.;ktb!W7}2#ZbIW[`v1(_l;CKy?OSw@6,3z_PdQ<);Xj|SY' );
define( 'LOGGED_IN_KEY',    'P#K]c6>8pk@X?]~:bHvWEKAN<iS+G,LB$gX@<ZsGqT91Z.-6iSwaJ=MKniyjdE,%' );
define( 'NONCE_KEY',        '#kt#I3@mHTI{id^-|rtIv.]N=%{[berbYw85J.! ,UN0h}i5@,HE)a`.EcrNEr4{' );
define( 'AUTH_SALT',        'PW9B$!&wi=c^5199+b,03/)2& 84*?E$0 OKZaGRa3#F^hg@I-tbs=bt8W:]T:.Z' );
define( 'SECURE_AUTH_SALT', '[8W`M-uiX6ra#MEis72}O@@aoX3l(o}DPX@-o1%Z;*).9):1{ig p<;w1DLt,aU}' );
define( 'LOGGED_IN_SALT',   't,t;+SqIO#b-:#8SuDYOA^mBac>oG^t|jca=|@}tFi9d/@wwdBE^CwFgjrNl_.jC' );
define( 'NONCE_SALT',       '!V9$?dJ)y?yC[}a>7qJML;3Ptw`a_L2T`sBd1waf_>l]w(_BWT%F+ry;NexDo@v>' );

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
?>
