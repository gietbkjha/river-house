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
define( 'DB_NAME', 'wp_holiday' );

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

define( 'FS_METHOD', 'direct' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'v. (|OV`(aKc=+Au6;e/(1Ubf.*o}Cqy57N B(<dzaCz4H.x>,6:@<F-xgHi(NcI' );
define( 'SECURE_AUTH_KEY',  '/,caR_vv%`$&uiq[-cif>zOPDq{;c-.iC0.QL=Q9` a)!$ZMTGUypxTbx&?<^G5,' );
define( 'LOGGED_IN_KEY',    'U)4PoHb6<?~OY&nC;N<JWAgMt <g=cgh{M[E,WlT=8<IEDVQko.a=o5,{-!F_FCX' );
define( 'NONCE_KEY',        'Mr;@{50YIlXp`,1i6C^>3yz_4JqGSU*^<B8<rnMD#&/a>V1#Mwz1jOmFe,5mNHN2' );
define( 'AUTH_SALT',        'eLKEWP]uRHAs<*AK#JHx8^gS4`Macr?R~39PAt`766j0%aQ|D5=b}A4V_$7/iq8h' );
define( 'SECURE_AUTH_SALT', 'YV|Qd)BD9QZyS%Q<uTdFjGme:7$4)65pZr;a HCxP7_YzuI]uZ5G>/5w0Q`E@9a=' );
define( 'LOGGED_IN_SALT',   'x$rv[ns_dC&&7V ACpGgvzX~p%ik{o:ry}29b_T!pn06Y,P+P-Va>c*#=6C cqcR' );
define( 'NONCE_SALT',       ']j]QJL|>L^r0#a(r7SD^/:>=Lg5Jza*1QdbMT)aU9#?05wAkGv#gBcm1l:3<_CkB' );

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
