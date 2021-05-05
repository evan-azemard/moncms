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
define('DB_NAME', 'evan-azemard_wordpress_3');

/** MySQL database username */
define('DB_USER', 'wordpress_8');

/** MySQL database password */
define('DB_PASSWORD', 'PH5nB79hb_');

/** MySQL hostname */
define('DB_HOST', 'localhost:3306');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '!4IK6&muPNTqhz9o8z0c3SJw^0bjd9FdRPCF0v1Uv4lWbkAmbnFEFHCGajSfX%*n');
define('SECURE_AUTH_KEY',  'ljzM7B8C!dUG3KJ7zqRfDV^zzW%F7pq6(04^8%0MnsLzfl@3MF5W&InCfHsuqHvC');
define('LOGGED_IN_KEY',    'I%^5CMmSsx40!4*zQ*7()p()tV9jZQWM6gu7r#4mckGN&%lseJ&YW*dcEZFciU0K');
define('NONCE_KEY',        '1N84mOM4CXsXcVF4YwNIvPZ24T%KbTPidQ0bKQQs@Nb7EyXp768hR5U6WTGwhjOn');
define('AUTH_SALT',        '90xFHScPlIGW%1w7gjFN@w(zr5SO!d9KN3FXynYZ!bmg1c*eBL9#M3SG5eQ7k82e');
define('SECURE_AUTH_SALT', 'm6680Jql3@Xx6G9xgC1!qnyWN1FW!yz%mrqK&pBGyNjN0%h5Jru@p9co2Fw0G1Hw');
define('LOGGED_IN_SALT',   '7Q(2ft9GC!!T2RLMxU0xIVhfM948WoRSLATRY@WTlBkPj^mwA999al0#@00)V*jQ');
define('NONCE_SALT',       'D2Q7kXoyfB5oO)f)!fTY6@sClNYSm7uRekucM%G4C1sem&&!j1)LjIPgHOzrfpps');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define( 'WP_ALLOW_MULTISITE', true );

define ('FS_METHOD', 'direct');
