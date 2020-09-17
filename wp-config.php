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

if(strstr($_SERVER['SERVER_NAME'], 'samuiarena.local')){
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

} else {
	define( 'DB_NAME', 'samuiare_wp225' );

	/** MySQL database username */
	define( 'DB_USER', 'samuiare_mysql' );

	/** MySQL database password */
	define( 'DB_PASSWORD', 'oDRh5eAVS^~S' );

	/** MySQL hostname */
	define( 'DB_HOST', 'localhost' );

	/** Database Charset to use in creating database tables. */
	define( 'DB_CHARSET', 'utf8' );

	/** The Database Collate type. Don't change this if in doubt. */
	define( 'DB_COLLATE', '' );
}


/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'B7xELWabe21y5aiu0zkUmMc6LCg7aCjtrDS3Kl0KUHhfin/0ZLAAp5VBPVyd00Jq5+3Z84+0MzbERruuhuLWaA==');
define('SECURE_AUTH_KEY',  'Gh9a6l5OCuOnU3ArUv3nUqk2ruTug96ddG4q9gjprkO0AfDo/95L4oukW6TdAWUE72XJQxwF9Va9b1eplL4hLQ==');
define('LOGGED_IN_KEY',    'SaUQkq1Be3ZqsG5bu219L1zm88ouqGc6s9vbsIFX+Xbm6t4M6oow3960CIprhjjuQZ9BDgHT+TuUT16WoyLnmQ==');
define('NONCE_KEY',        'BmBY0hKl1ObGgTad8OyolasqpgBqKzaV6ITvppk+cKLqD1UF0AdA4yEs9jiXeWD1MJzNo3fW7sFwweaBN4wkKQ==');
define('AUTH_SALT',        'ZHaNS60MGnmTaCg9AIlctbJzZyCo/4b42/9dUIZMt/6J/BkKcrvIvP95BpCuUsECCFxgSDUAAGdGRUrqLwtynQ==');
define('SECURE_AUTH_SALT', 'aATSMX+lrf2xgX6AF6i2ygYxcL/ZLkLxXMX/4JUvhmz5KNR1e2wVN6Epsbh8e5SNl1d8Oi8hFSdDdtRaWyX+9Q==');
define('LOGGED_IN_SALT',   '1V3PZjZMwVjadEBOUyHgTBJ2EY2koVvlGrBHzoJhBGcIW6BtaeffzTnHMhSL8iG4KlEwxFVdIJENSSVJizicaA==');
define('NONCE_SALT',       '3GvY1T3b58sSVB4k3mYON7weW5hA02X5bhXYAlePioHBB1Pp7N14W/gFDXTqTpnDpbYlZTpKtmcxBACUbyVlYA==');

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
