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
define( 'DB_NAME', 'test_db' );

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
define( 'AUTH_KEY',         'x+(cU/`EK81:J<?e?):w`<U?}{_bpB[-`^E9o_l6_#o51mE2~QVJF{<-`)@S0,bm' );
define( 'SECURE_AUTH_KEY',  'D3|c!%?;#`p>-g9Dbwqf!]X;kygw(Da`O31T-8G!OoIfYElZ.ycr0FpgIM^1ikd(' );
define( 'LOGGED_IN_KEY',    '4Z!+pH>k~OYXKu6V[JH%0k5{CsbDaxBReQsd!HDtT@Ph~4?ETF5xBSKbH}x{-UW}' );
define( 'NONCE_KEY',        'qN2A{=YJUC.^qW@FZGB3b/}lEEbgpkLS4e$>to^,xsDm`Co;rTm5doU(Y,`9U?g7' );
define( 'AUTH_SALT',        'zA +:oLr:&u`z*A/YIvCLTf@hv#_39:Hi6x/n&ha.}cee TQNSH=LkeewV}e8/jf' );
define( 'SECURE_AUTH_SALT', 'w:CM9|}g--Hwq9FO,:80K;3u=BGoph*|NEK6Vmof(3t=0re--6LS|c88-#!hk!c~' );
define( 'LOGGED_IN_SALT',   'GxE@7iDi.2P;Bei!P_61v5 8A?tf~@0HCknFYmK6Tg|Rf&kOk^nlFz_qk]UG+U~4' );
define( 'NONCE_SALT',       '@$1SYMfuDpB#}Bp.~]mTsd[:f2j%MvmXq?hBa{_Zs&{~iTr>9|-^/K~b5.FMu-a7' );

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
