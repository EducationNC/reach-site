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
define('AUTH_KEY',         'wg3mODZao0uQaKtODb7bBdfJoVdKs3In6lBkGzLmMnZprQEToA4PnLb8fNViaee8wcr0Vl8dHxuefpEDsT4cCg==');
define('SECURE_AUTH_KEY',  'jgFv0nVwX1WOY7jjEBAzYkP30cKNRrjJwAPp7BWn6pRYB9KrksEe4pOOf+Bn9ABgUZNvgahJr1uL1VH7sFZ+rw==');
define('LOGGED_IN_KEY',    '/0XmgrqWERs79QHhg79TPgfeyrcgSm2LEXwpkUsMF4l7INrjK//B/+QOpFMAmWplAYxjFNVnK9ZlZfHicKU0fQ==');
define('NONCE_KEY',        'iKz0EIWtVWqJIy6dRYYL53T6iBirg9siqBdaUgYmu8OupVjOIH5uLUdUokk54fXFaXcxw5OvI0jI02cxDpW1eQ==');
define('AUTH_SALT',        'gSUQt8V5TzznmHkK+thT7OxwKwiotb35xcN4oTGQjQc+h5cOsf/ROzPEda9YsHUFPO8zvUEGGEuwVIjoKJTXFQ==');
define('SECURE_AUTH_SALT', 'JPteF8yYyuxPQDMuQo5G9X1FYcy/QEhwW1FEPxTh2llxCPpR5QoedlI6GW7PwOhiF3jjMRYzQK9DoUWX0DBdtA==');
define('LOGGED_IN_SALT',   '7H7Whb5mdX7B5IMmombCxCZqjA+wadwj1vBhdqk6LpuUFtHGq7AsOlxp69JcXbSjMARjr/3sHyDoAb+h8gXbQw==');
define('NONCE_SALT',       'dOCoZ54phueGl/4ocmwR7Ntp042Mj1xDDJlFIY9pkdw5tDn2yOTeexZRad0IKIqYaJ2jSQQgsSZD1tj3Lsw67w==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
	$_SERVER['HTTPS'] = 'on';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
