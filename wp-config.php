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
define( 'DB_NAME', 'placedb' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3307' );

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
define( 'AUTH_KEY',         'A;[n6G;^c&%i;G2Kn;203nk|#{5cA!C`0X}7IY6~l>M5-df{!aY<XuWKz_wDK=<V' );
define( 'SECURE_AUTH_KEY',  ']Z50h}!c0,jg!Of#kFv@lIKC3#?ANgAi(Jbx|hKOn}@$NF`,Mq~D;][RS0UsL*d8' );
define( 'LOGGED_IN_KEY',    '[ryePTYvnIlN.9j!m~;#V_qy,[hAXO=oU8{!DK,oa:y_Pn[-&|`Jn XBI3m$NP+k' );
define( 'NONCE_KEY',        '7qG>dyg`4Hmf!eix;:^D80j*E0)Si$^}C<GSPKelR6:hIUxB/Evyf}g}Hh~}f-ZZ' );
define( 'AUTH_SALT',        'AG Cj)z|)@0rf65t)!>G(tT3I+l)NkKEx9VQ/~?_A15~3~>ivgs(9bOk%0/b/E2n' );
define( 'SECURE_AUTH_SALT', 'Mzu%c&QzPSE%4<)[ZZ.ktM3.q bGx?:N0$V9Y}O|`MSaIfIOnb772OT_7ScgL6+h' );
define( 'LOGGED_IN_SALT',   '^di!T^Lm)_#RTaO,j|jJ]uNn>qk_?{Eh|=dd`lbxpkl.(B)4R[DX,)MuCpG~XZr8' );
define( 'NONCE_SALT',       'mc[-HG#?W~J;SA916P=eS<Zjy3]><1Pkb7].zcnA<6>rtSK#vw;3jY]HXk^9Er|C' );

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
