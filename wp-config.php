<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_literasi' );

/** Database username */
define( 'DB_USER', 'wp_user' );

/** Database password */
define( 'DB_PASSWORD', 'itacantik100308' );

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
define( 'AUTH_KEY',         'RF.XK_6MC3PtooTJ^I]i*7Y_o5!(h?3$lxybYEn.W^Qo(O7@Si}<1eeaUY6Eq5. ' );
define( 'SECURE_AUTH_KEY',  '`EM}`$fi>oOM00v0pq}Yp#4;9F}RWNKIR;q,x,FItYL=OR&4t]sbT&CHwMm=3a~d' );
define( 'LOGGED_IN_KEY',    'iu9w};P=RNLlFl6xc-_5qi%i/$F~nik30rrr=i4J/&K2[0_x,{-`p|phOoCyj;W/' );
define( 'NONCE_KEY',        'I-+q8w=KKkIjJQ(sm||pFDP?}:=[EODy~h{+;Tq~-MI/k`9BZ,NsZ3QPe}/=AS0,' );
define( 'AUTH_SALT',        'K[/sTk_#{B{&:ulf_$9.()=/ guHucDz/b^3[Tr*q 8mncx6r[kf}oX{.gIu:N|^' );
define( 'SECURE_AUTH_SALT', 'z:Hlng;PS<ky{^I0}C;t*e^X(~4XmlL2{xJ$w.vZ,_F:~:R]znN?a8.e-z^J{o z' );
define( 'LOGGED_IN_SALT',   'hZ#w>d_km4iexc@|]4|~#[tt#`s:$`NU]g:jJBP|EB5}Av^SE!fYt?3Bq{gPgn9q' );
define( 'NONCE_SALT',       '6FGm0^Q=w^j37&|a75$V)6`[%Mrt?m|~tur_D=S6;!&DN.L@=JbQk-iw^ckdN` 4' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wpl_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
