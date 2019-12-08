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
define( 'DB_NAME', 'temursblog' );

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

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Y@X@yoQZBOiMr*d}C|BI1Z3uWe.-/@ehE}5q5doD`!CoI+0@[u8a.H&RwEhJ5Snp' );
define( 'SECURE_AUTH_KEY',  'Es@Fb#=#5uU|>/(rDZ7sLe]l{xKWyL<;-:whfGznf#(9hH!%>wSoUF#7z$A&SYsR' );
define( 'LOGGED_IN_KEY',    '##U&f_B_8xkLOnQ!EX`P]&9%E_-S.DSP&C_%@7KH_*f37#|hR[7a|B]/ GWxk3|=' );
define( 'NONCE_KEY',        '8RW8w1WhW[XVDy?DOLhbRu`c)TA.?<r3ILI <x#K tA`y=nKPInT7O^aEa{`b98Q' );
define( 'AUTH_SALT',        'M_XgOmI@(b&^7Nofgw;^;C8hh3^bt@2;<7OEgN:7ju10xNRa9%gxO,QN7qOe?8^E' );
define( 'SECURE_AUTH_SALT', 'J39TJ{cwnpG8J4y^Y>7l&QaxTedr**U<5sw% Kc!&?G,_t-:95Oy%l rqJ8^s[2_' );
define( 'LOGGED_IN_SALT',   'u0zCQ3ntf o-}~*5&Z=tIuv5~%s]A@TO{IBbcGr{p;X5%d8Qy#*o~j8(&RC51&!t' );
define( 'NONCE_SALT',       ';?-BBg}<@N3!UwL+iMJ=#)mR~}-V]4^pzA]5IbR?Jvn(7#9!aPW(^)w#8F_s2,6O' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'te_';

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
