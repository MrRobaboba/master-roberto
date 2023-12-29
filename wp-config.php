<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'o333AFlUxfV3u2EeqPW66TpwlNyFqRTSfPLpdYVAMQs5vgKIdaphCJxwyFJ6MusD' );
define( 'SECURE_AUTH_KEY',  '1yaCXufz7JeGmcsV6DYhjjMKdfhjA0mFaIeNZ7tcdOHk7aAa4dujODNWu5DxEUC7' );
define( 'LOGGED_IN_KEY',    'f7dnxx4I2kPa1Kt9lzm2Me6G53E2i1PL9NfY2YHmCtGJHTUbD5NE6cN8th6uhD02' );
define( 'NONCE_KEY',        'bmPp09qKpnuIW8976qe5Mqv6htdVtQBCX1e17s1k1zsq8YsZPqBee8UKZamy49OF' );
define( 'AUTH_SALT',        '3XLjXq7nH8m4k3lPWtYouRKL9DdFJg42YfNZo4V3oXbXIwhza59RykDF3bn3scI3' );
define( 'SECURE_AUTH_SALT', '14JqXEjC9Oqb3Cfp9KoODVK1vcy0mivAdXZwRtq8MpudymIvjhBVCCrEOvgTUqLj' );
define( 'LOGGED_IN_SALT',   '6s4PxtTIN94HP66v9D2Imt8Fxk1XO9D58BZ9UDHGaiRL4gEUcSESjmZ3zxDT8ym7' );
define( 'NONCE_SALT',       'k16z9wGRIKEcsD6HozqsPpqCp8nEwZ6a6F1jXvVQzXRaEZYVMJXdAVZdyK6RKhT2' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
