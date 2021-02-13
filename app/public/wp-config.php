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
define('AUTH_KEY',         'dpsz3Q+lhGeZSD3jURnMyLfNDr/bvVjShEHVR6f9oBfBmYc5xDCt4B+Wc6OJH2KTyTSv2++CfvmM+K0oIFlSLg==');
define('SECURE_AUTH_KEY',  'TGd6e9N/mwGKAX4FMurgxTjU7YocReT6Y05gseXVrh1Ce94Ph1tvjBLoulntXqkmfgJS6KVGuvea9MuUQlTq4A==');
define('LOGGED_IN_KEY',    'xzhwIPkYS0ppPOVTPIuh9VZk+u0F9rq8jvMIhi+KfwyeSaDAsDCmPVhQ3YPW/PMrUdQ+OCsZxon6QfO+RBIuvA==');
define('NONCE_KEY',        'ihOMlF7TDC5Mp0ULr5xRpphs5UtYPLIYTmburixirHSTYLiy7VJBt2eZS8N/li+Yld7E+NhHFqKJ1RobbIS8Ug==');
define('AUTH_SALT',        'OlWT9qjK7tDe34Vulh5c1QrP6ftvJhWw+DY0ZbELx68/wZ8iRErqXT+Rlf0kTdfpjdHY7MywY3JfvTATS6qNng==');
define('SECURE_AUTH_SALT', 'fT9cM8kwL6b0Czo5N6b3F7ts4ismZmfaQzia+wQ207Y8LwKsNaqGCy3D+gqBFz2IQHag2ZwSL6+sNmetxbcyPQ==');
define('LOGGED_IN_SALT',   '7UUgmn8IJavsDIbwZyRbg5nMaFilVkB1mvPRrOpTWtJTiJfWPqgoG5cILrGK8KQNuCOXiE09wiE54DY/dRAprQ==');
define('NONCE_SALT',       'ZB8m1rP0XoDMqdHzYZ818jkrvuGjPUV2idVaXNO9gXQYGt8I0RbeeEeNQteHrQrYY2r21wIvgkiXlCvGw5EGiQ==');

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
