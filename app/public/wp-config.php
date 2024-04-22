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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'BQ96[h?,U:yh33L]NRcd~p0m&W|~<[sJJ|ZL19iX=](U`j-)e&bbBJ/`l}K[fUuO' );
define( 'SECURE_AUTH_KEY',   'hCT?$; B&n!G|R+_I70OQ%`]OQ%<~_a!];L4!PxQ{CGie/l&Uqc3@h6<W| }7S[^' );
define( 'LOGGED_IN_KEY',     '|DeaCE%l@JU$7cLI=3Fbr4]M{3%>I.|7FGa$jO`v~8azo2.A;h^U;KDugPCVh6X[' );
define( 'NONCE_KEY',         'n`ZMXF9;_=ZQ8CQ&kc~rsx`U;/])w)?v`u-ru]L[gZ]IK[m7:j+R>NHKdOPwgked' );
define( 'AUTH_SALT',         ':/mCJZL~|u:a$Ed~=xGP2lORM[c%$OT!6$a1=~EI/[ C XCMsKqn<Kg/y7;,&P.c' );
define( 'SECURE_AUTH_SALT',  '2@^;?uM] ,6~52Olu$Y?2Tq?&>dLaKI}Kglz=@[Le~b.c3Ia@#>W18]rf 0Z:5%A' );
define( 'LOGGED_IN_SALT',    'MVn65CL:jPh$d}1kV>X!P]Vp+5FmS&FsiIJ(kO:&,1p*d$f;Snfmg{`kN=S7X;K&' );
define( 'NONCE_SALT',        'BkH9E,$;!8tci0X^a][UlCEXXCVWN)tvadOC1[gvH{Kaw+ !~`EA5-|1k;d?ox:0' );
define( 'WP_CACHE_KEY_SALT', 'liNFltFXc}g,4P59y$bBi^{Uew7X.ww^57R`/?j#6jKu`?H+YKX|bR&Z<8L~VugC' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
