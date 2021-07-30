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
define( 'DB_NAME', 'aloklempstack' );

/** MySQL database username */
define( 'DB_USER', 'aloklempstack' );

/** MySQL database password */
define( 'DB_PASSWORD', 'aloklempstack' );

/** MySQL hostname */
define( 'DB_HOST', 'aloklempstack.cfdyrms3ajre.ap-south-1.rds.amazonaws.com' );

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
define('AUTH_KEY',         '$tj=7w_jfKZ<?a,%*Qw/1suo-TDD*L>6@VP|fT?sIu3Vb<)ol|%}!#$BVu|7KG<g');
define('SECURE_AUTH_KEY',  '|ZEkWPxn9>Kp>do<E7ILa8V4:@ahFch= K#Tq~r!+c5JZK^y[:A@b~l~0IM7-vJ_');
define('LOGGED_IN_KEY',    ';-x<]9K9mq_dK<+h_;fZTYWJ6A}U*|A< hW`yxsxp%?wQ3Aw5}wW8$y+Xw=r^<e7');
define('NONCE_KEY',        'qZ|y-</2qFe-CSp[wL`)#|G)b-I;J~(Q%FrP>,H>q-VO22`vn.b5RHCaJph$^n`C');
define('AUTH_SALT',        ';k)z@XO* CM;NN(Cuyz]0j77)9pS-dHLk&/bZ{D;$Ma@D#;|:]ST4s*(]>ro+<Wl');
define('SECURE_AUTH_SALT', 'OZ2R#ruIorhzx:)8H9yRFF;5zuoRF4]-V?)SUc,gbs7Y()nqnk]_:/M bCbr[BR?');
define('LOGGED_IN_SALT',   'qh^x/Do-oIPU9T8l/G!G7->`;NEl$)8(5%1(0]rc`rrIMH:GF8BbOGE?<w_!9S:,');
define('NONCE_SALT',       ')Lu+1.i3Yf]xikvo:LYU1)-B#j*fHMJ_fyJo g_gBk-=G44, }c$=yuxk),XCQp~');
/**#@-*/
define('WP_HOME','https://alok.squareops.co.in');
define('WP_SITEURL','https://alok.squareops.co.in');
if (strpos($_SERVER['HTTP_X_FORWARDED_PROTO'], 'https') !== false)   $_SERVER['HTTPS']='on';
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

define('FS_METHOD', 'direct');


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
