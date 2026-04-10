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
define( 'DB_NAME', 'websiteblog' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'mW0]s-A~Mj(!q#C*V!*XpMzTq^LJ@-`P.|o(~C.&9A6kSZ^$2_~4$:Y,r?b^I9m:' );
define( 'SECURE_AUTH_KEY',  'NrZetY(<_M}t.QlDjzRNu:S![lvIj&tN!VNow|SA*(&.nYWndZzwX5>3[,J8[.py' );
define( 'LOGGED_IN_KEY',    'tC#inv?:q(x#hZG^i1 N!ZlLD@ yq..-:X+4DND5zJ^$Os7dAMZA(Lm(,:GX+ K7' );
define( 'NONCE_KEY',        'I~BBCY^oya8aZ8If4&dB !V^$McP^Fl[qB_i%K+$aVT<9*n5J>oHa?Rl9Ax|ZI82' );
define( 'AUTH_SALT',        'Q{|TM=yP123L`wQEdb)Y|X|fpHa _^2>-j#B&bk0JrJc9n%eg80udULFnish]h]c' );
define( 'SECURE_AUTH_SALT', '55:fm#0qm$IF0d9-0O.AfX,2SjyOLqG}+aB>%0]H}XnsLL<=yJ7 jz8Qk0pv{BY-' );
define( 'LOGGED_IN_SALT',   '3GPfD>c12yL?g#!ti0@D6ogF`Gp5;2`m.x./X#Nt&kp9D]CGsyxLvIhqR~_R~=s}' );
define( 'NONCE_SALT',       '.Xv=DnGiOpRVYjM{9z7q0~)nVVO)*{>_:$?3Nh9rov,fuuC%fj,HAURka}q)%HMW' );

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
