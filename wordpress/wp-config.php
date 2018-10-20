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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'cbfdn' );

/** MySQL database username */
define( 'DB_USER', 'devadmin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'RnRd*bDjRjnhktf9$Chq9VKzFuScRLRJ' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'I% ,R4|:cD82m^DDG:!C_i#Vc8n/V3&bCxbG:$q=vBvBM-*_R[Z{BR#IEd 6h,(8' );
define( 'SECURE_AUTH_KEY',   'GrVu2B?p 4$MpJi9K{7>2V[Cb/kspxXzgMZEt43%aK]xy-oRQ[^k1FcD2cM30V7V' );
define( 'LOGGED_IN_KEY',     'N:f%/$eO}k}Kr9o?HLA}e(!0?LuH<*ped!I98zB]dD+)%,?V3g{|Zf}O=aJ{$$U%' );
define( 'NONCE_KEY',         'bk2;M`@7U/!}p@Bh]_3KQE=m)ADDBi3} l?t,>)amEFZv*ngA)qO&U~g@+}Ou/!V' );
define( 'AUTH_SALT',         '[gqE8%ik)-feIHd3c()f)c2x)n{_Vu9a%.PYSqEWOq@pT9]E_LUYQ9s_Pk.U^r^Z' );
define( 'SECURE_AUTH_SALT',  'P?T/AOzaT/yW^gKXe,<CyR?s8XgA*-/pjP*VE:U}&qoy.yf<)uW&=e8:MHfD.3wC' );
define( 'LOGGED_IN_SALT',    '#UR&l,3?shdrYX)sV72[@?%c>fQt6pj=olsJ;%_g#$eJvlnyAsd9DllUD5v+zg:b' );
define( 'NONCE_SALT',        'AIK|nlW2eIWx#W}b$fL`x$i>1,*FHV.Qn##AM.TcyVJSS49%<%L|h~8I2]-~AX${' );
define( 'WP_CACHE_KEY_SALT', 'sfrv85YAWg:qDzbrg=;0WXG~+}guk]~v7nY[/_u^LJme1e+;/6D514:eG`taKYbn' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
