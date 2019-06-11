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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpressuser' );

/** MySQL database password */
define( 'DB_PASSWORD', 'vob0TrOofnfV1lZo' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '|lT,.Lt*8L uHpJ@>bQbs?[U[vXb<^y|vfeEXZ9I/YrY(kbH8s$wSe!rx?@&}.f~');
define('SECURE_AUTH_KEY',  '9p[xKB7y|!-@FKm-&:-7fTPfT]3D1(;o0KL&!tc-^P|6y!eBXzp]HaHO{pilHxIz');
define('LOGGED_IN_KEY',    '1bM(V{wdB}KDK~a?=CX+0HdNwF$4*E^:!X!38Za&J/`Q-^N;W>`9O};]G(rI#VrT');
define('NONCE_KEY',        'Qby1PIBAAl--QfzqUepJ|~Q98|99@xT=C{qw%SF8-6?Ac_Sqzb~bh;({NYI9rO-w');
define('AUTH_SALT',        'ActiY|>>;-;ZHa*mMt-RJJ*xM7vMKsb3:+G@*hl]-_2@d~Bj;JMa?Z_jh5(u!0+)');
define('SECURE_AUTH_SALT', '(&qng9vZ6d~/!s]9%[VW``8o6H:UUz&-0_$hwL.D@|P$eM{W.LO{k{2$^ry1*o~H');
define('LOGGED_IN_SALT',   '-0/T~T6;F+a<.mtF0|WoWrHd1#|3tzRt~[P{{_=)A_i-PfghH@aheUr);XFdVl4U');
define('NONCE_SALT',       ')Jm6uv[ZeQ;+!qE?p&TJsR^*&[%]l I/LY67^k&aG,9mltRUg|-0h_Q8b5;$*Tit');


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
