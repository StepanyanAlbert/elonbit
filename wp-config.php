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
define( 'DB_NAME', 'wp_qyzed' );

/** MySQL database username */
define( 'DB_USER', 'wp_ezlyj' );

/** MySQL database password */
define( 'DB_PASSWORD', 'L0P6bp#~2B&6t#R%' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define('AUTH_KEY', ')&zx3D_Q07ID9/7h74ZO6V-H195@uWja3w67Yr93alRp3~02D0048z|8jCg42)bz');
define('SECURE_AUTH_KEY', '18V1qZ@:u#Kh06|9Px@4A1_KIk-[Vft@y~(!sOVmG7RYv%fX%a:1n9w~&hLd|dAX');
define('LOGGED_IN_KEY', 'B2+9u8tQmEnW@]053e9#/4z*EwI@n][643FA49[2[!i)(~sZ_+51cYwCEpx##IO5');
define('NONCE_KEY', 'bGlR(9u[QjB-(;mOVih1F|(:wv4D:w3f;r+xT+8f*:-1v9+6xF384lm29w39NiU1');
define('AUTH_SALT', 'M2&-(Rh!78(@ET27Bp6+6a95uV~Pteq0%@-Ob9pu~+#Z9:]SycT7|p5x]J2H;6IG');
define('SECURE_AUTH_SALT', 'q%rU0G)bv12qBV]Gp~knn]:~#0samP|P&@PBVT5T)h|Bz3ii4:GM7_-5Z9soVT4_');
define('LOGGED_IN_SALT', '*5]#pHdED(161M6]Ffj@2-GR3582i0BptC02jj:mJ6Zp@(N79ui2q[4tb|n60Agk');
define('NONCE_SALT', 'Ao#@7s330IfSw2ish:~*dU*8I2f3oT]/-0J0T0uS*|#0]n!cyr*90#J9jf0|d&-l');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'iWrkZbZ_';


define('WP_ALLOW_MULTISITE', true);
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
