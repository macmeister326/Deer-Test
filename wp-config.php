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
define( 'AUTH_KEY',          'qP2R>Tc ?@-IC>+#ZSWL5fMx%{~~-Q!R$+i<)nqcJnX7VLNm9k`]kf1 33|myH8p' );
define( 'SECURE_AUTH_KEY',   '6`Z4pUXHD S#<Y|GfF%C#tojeGwQr~;cxHu~I%p&[%gHh2s4T(UZ&tuODWTzc^=F' );
define( 'LOGGED_IN_KEY',     '|$PoYwqu9EuGoj9/;dZwH;QUN2zE]U>Is`L$.HR|~t|]qS`1Fd&n%2eU!x&-nK}&' );
define( 'NONCE_KEY',         ']_.{&=X3}pMQx%$<LSdprY4h{5:tE^Dy1w8r=.,31p -}j(-Ch9Nwm^q2@a;I yW' );
define( 'AUTH_SALT',         'IzriRHHUc4d]!$)NZFIiP*nlc=)~+2%}O1e5]>K>^m#Lg&mqRd[ p9]P=,8tkF&*' );
define( 'SECURE_AUTH_SALT',  'jhrMEY}^>7(J+Oy(X *@~p:!k`8tg&t+);##^}MBZ4,gwuP/^!N6(Sr)0h7?|AO ' );
define( 'LOGGED_IN_SALT',    ',!j/GfW{8iM^:o8*nd=/GEtU5e7UgMeTX Hw4[h= :T- (ox+ffHOQ)BAgUbL6_b' );
define( 'NONCE_SALT',        'p+jN_v=HsOy3}zT%l0|2N|`n>~=mr4,Fv*B Xg8t+HSXasCWW;1.rOfi(^qqWK/g' );
define( 'WP_CACHE_KEY_SALT', '71,(Izf|U>{,9;s~}*PP^8V!-gIm.iw-DPA=[lSXB=qq:v m&!_$D87@j_$Hd#+f' );


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
