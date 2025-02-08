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
define( 'DB_NAME', 'Imobilier' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         'W7B5eXgz0TFoY1bQEJ8aGWH8ts1eXyYwUAXYpMqXs6Tat03fe6BLGPFgsNbQ9i45' );
define( 'SECURE_AUTH_KEY',  'BENK3fWnB4ETep82r1w4N51LSvrzA1xR67HVc7S0d0j8PIT02Hm6vwLo4X1dyX5z' );
define( 'LOGGED_IN_KEY',    'm86mhMa7wae79ti8auSdGReAqBe86zKbjxwUvbIPTPDv67mACGiCTGSfwBQG5FSR' );
define( 'NONCE_KEY',        'ag49kA5ewBBwAYVsNNl7QpE8jYAOtxiWlXLVC9XLAe12b2yg6nw86znOt7WJXOsp' );
define( 'AUTH_SALT',        'gR7xXezg2WviYsFqtKNkkOmmIyYJWkQf7KQAixWNiQ4G2OE2ZHBSvJ5zEuBT2twC' );
define( 'SECURE_AUTH_SALT', 'piu1ZwUvzWOF80D1B8MVX6Frgh9eSk5gh18LmT7V1PCVinCTQSj8PfsF4jSPMRXr' );
define( 'LOGGED_IN_SALT',   'HSzP23tNod529VLHZwynjJUOFHcC5kCUwHqwoWfFJAN2DMYmnihKIAhyHigJXQlq' );
define( 'NONCE_SALT',       'iL6l23sbK4gkPUfDSZQw083KJt6NNnQNSfKqonjDtVbP0O62hdJ7IxZYNCQx15AF' );

/**#@-*/

/**
 * WordPress database table prefix.
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
