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
/** The name of the database for WordPress */
define( 'DB_NAME', 'test_website' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'jrXXaRZCKCUNx0Bf' );

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
define( 'AUTH_KEY',         ']Gu>eQ?bO6:}8-@`B)%yRQ^foB/V^S^;~#GA`G>QKLo}4*kP3N6fr2c{;K/$r|2^' );
define( 'SECURE_AUTH_KEY',  '~.N+d%WkqLD]=D{4vypr/GcPfj&mn}KE3),,xJ,C3~E634O/gr>F`;<fihMNT2?L' );
define( 'LOGGED_IN_KEY',    'GU.1P{{9ZuJ3*(&*umqC5*Gw>dw24q9q(^$#$rl?g8|} p`FGVvZ/v4H|fk8=LuL' );
define( 'NONCE_KEY',        '^8^x!BCv,BXe+Tf%x8wJ1/nSiar 528pe5_<Pv`> R4j.;ZB?uQi71@|nZp.KAH(' );
define( 'AUTH_SALT',        '[_Xt)&EfVo? KN/SV=I;,Z}}?4REVyf{lHQi0K+zNU~MUX`#e>H|)%;aRoXuqqBE' );
define( 'SECURE_AUTH_SALT', 'P<@Y`<aGhgWHe/~In6D$q?1lr[M!Cn:z}s7U8N>GIS)H%OO$H9= $e|`YauRy+aB' );
define( 'LOGGED_IN_SALT',   '[!$J#NP1/K2mw{ a8eEP+buk=ut/^pdcw~P p=(}i&g`iDr}}<*<DZ**$t2DBuNU' );
define( 'NONCE_SALT',       'T(nDQtUOZ{>Ts>z? gHza*THGjk^`@IvBA%4Rc7LI!*xG6N3[9?l_1> U{-o!ZZg' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'test_';

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
