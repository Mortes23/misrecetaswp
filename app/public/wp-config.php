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
define('AUTH_KEY',         'vNG/ynH61APR9Zpt45y3LluIaAGF5vX8igKoEqMl7DZ0BAkERZj0RGfv6t7t/fMJdqODWpGIt3ap5FZDPNA0ZA==');
define('SECURE_AUTH_KEY',  'R7k5eKkca0cd+fK+tmqGygm0wsg5UBK6PBL0/J6pspCkQ2X90vVIIGieTEvS+wRDINv5pfnhJUnhGIq5slfNrg==');
define('LOGGED_IN_KEY',    '5LhDHU9Tq/3bzNEwnHPTU1GdKTNIdkAjZXWjQTcc1TuW61SbdjHY5bzVfd5V38vX0xjAi0OcWH3mICN8BTDwrg==');
define('NONCE_KEY',        '04lXZwCwUROYidlrsFefJZdhj/8RsMwZoJ9uKTmQxl5M5//w1FK3CRyzkTLf/dxd/ZPo+iviDmrF8Bt7vKfB0A==');
define('AUTH_SALT',        '46EFtx4zaAwj+86wj3p2zC7wA2UdNqXhKdpMH5tJGRhx+eViM6S+/BWNUR9k4Uk1epU2pATxdM5LEv5I/H6bIg==');
define('SECURE_AUTH_SALT', 'WOCxsBUpQQcMzfbrpykwCPo2K7C+RYYTCGdIITwRCPqY+2aaUIljkJ0o4XGFeC744WXNeh5pGtSROOguRdo3JA==');
define('LOGGED_IN_SALT',   'JBX9Hdb+B/Y/j0ilK6yW9tzfUXRK8YH/ISKVYSB8i4aQrovEg252433ymqrkKvcAuqsCfX95lehD9RLC5wdPKA==');
define('NONCE_SALT',       'C3ggUIYHntvnvt7gtaueVSsdAbMfYwFcDSlbbW9foptn3o88NgjOYfZ6kEg7W8tTVgg2+lZr5osHXM8FkmRLoQ==');

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
