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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'testing_com' );

/** MySQL database username */
define( 'DB_USER', 'testing_com' );

/** MySQL database password */
define( 'DB_PASSWORD', 'jerh9MQLnlqYFs2' ); //pretend this is not visible ;)

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define('AUTH_KEY',         'Qe|}z*<Wx$v<8KdGqBn$KhpA7p7q{7MQY=Su}3IX)BZPi:tj!6>|~iDj-iM|FbEC');
define('SECURE_AUTH_KEY',  '?&db@}1+TH-xBnt*rFcLEH-YQ?X_|K2ye{/GSOot@m/rIO+l|ufST8@l7jy-G[Xy');
define('LOGGED_IN_KEY',    '?hXMd,n<m&5V9o~|J39#lzvE<.4^},l!W$6ZzEIzB 8E=_z#yz0<ySX-c[:.=}Nv');
define('NONCE_KEY',        '%!(`rBP0!7~dMGaRAfY]5ZR)!Pd*|XE5 C_rr;e:*p1G.03F<&Xfc{FxWtYC n,,');
define('AUTH_SALT',        'e{Z+-Piz%[(Wac|{9uV*-ajT,zl#@G>byOcN!mN#.?5fil?T0@_yla>b.(9ES)0-');
define('SECURE_AUTH_SALT', 'ugyZKaN?L<@!~DVw!dpyoE&5I[8z^laGuf1!$Lpd+}Sm8o0r`s+f cs#%Mq&1@-;');
define('LOGGED_IN_SALT',   '4|d3LN$V%<Ad3+.CQ1nE,4F?rb@v%|EMWiKScaVAIgn!V7=%uz|sQZ5-8GwU~wF5');
define('NONCE_SALT',       '$Vz!:@jI_6_U;{igYjDU#:N,quCcEZan/e+;@v+BaOpbT~(0dK z`<W5|<f|mW-x');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


 

define('WP_DEBUG', false); 


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';


