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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define('AUTH_KEY',         'xNmOOTmup55Iwiw/wG64HragVWklLaW+S0TrW70QowsqWuOT2PJsAYkhn2Iz9YG9Df/cLAPVWvw8mEkrjZ9JSg==');
define('SECURE_AUTH_KEY',  'gsuoDddHvEnC/X+6F5+QVrQRhIBZ7Xcr3z4TBIiTBXz5XXYHqtHnZwEmcBi0aw6R9yF5iBv0sMceWOQnuSgcFw==');
define('LOGGED_IN_KEY',    'B5G2RaukB3MgJcfYccdhgy5vnQJfDcrUZqv/tQWXmufdNVCb5esxehcC3IVsK8hk0tkdeUjRC8QjNIu0LEM5xw==');
define('NONCE_KEY',        'Dh5ojER2jjMRa0HItY9BXNWEhmw5Ybmoytxyr021pBYb82qWmfiN3PthcwJazgL6Xw30QHxyw8FvwVTzCwmPmg==');
define('AUTH_SALT',        's6gBAs9xbJe5ZLFgeXgCDgYRxeBbgTCjBJT7EdxhJjoy+9t0wl8LivwcxiO+IPQDKId/M0dYdTVdmTbaZv4WAw==');
define('SECURE_AUTH_SALT', '9N8Um507QhWT+xOnBWsN8gHPyVXH+mG54rlyvsglViIerahyIeAws6d/43tINcEAIh59CoDdRcK2zNxIWosMGA==');
define('LOGGED_IN_SALT',   'm+e5bZDMS4dhd7KibzsvwL9Cmi0BzJ/vG0OSnKB6eEY9EKSKYnNjIAlixNcCQTeOvSNDQkFT+EZ4xeWjZDWzAw==');
define('NONCE_SALT',       'usyyBASwdGYv6Dj7Ps9vI3QZv8P/A+fgRdU/jC0uT8y7hPwrE5oFglUQYNtyJWxHCDB+eqJ4cVsIxaDvDxFwsA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
