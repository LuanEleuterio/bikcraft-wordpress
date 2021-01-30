<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache


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
define('AUTH_KEY',         '3dc3zPccXdJJFE/yQ1Wgv0DHGsMM1svfyWY8GdK/AlSBDVjDGjlm5DWfxLdy80ue8MDgayzg2I9Ws5MBdFiMLQ==');
define('SECURE_AUTH_KEY',  'czNwudEDKdxBvQRrBIpK/qM0BUjrWbNRxVypTyWPorbH8vD0VF/C4Kg0LCEghtj3fpLNgL8z8R+Zqx2QYkB7Rg==');
define('LOGGED_IN_KEY',    'ji5xw6oerfNTEj4o4uyL5NG5l4dJwdCYGpvIHp1mN6ApllL8erpGrLrsNnoYyDxD6U9eKUrKorxV7dqW5UPizQ==');
define('NONCE_KEY',        '1g+7CEe/M3lLqmtOQ/Vy+8MZ57B75b8kndA6kalWBZYK3/IwYrPwqaKIaqfwVUUX2w0bipckB8lXajDw38o3bQ==');
define('AUTH_SALT',        'V4Y/QU/bdaRieTaPSQQIKUQd2C0knep9KqS63UajAIdXKVU9R4jTaqnxM6OqLNP8XBnV14j0QLk/bh5QEiNZCQ==');
define('SECURE_AUTH_SALT', '3K5H2KW04GYxBjRg7u6DhOpspi/rRYGIthRXaMXg65zeRU1OD0X/9eEmgaqvdp9NEf+hRatDpVJuV4rAVtxjjg==');
define('LOGGED_IN_SALT',   '3gMJPA03ZoYwmzYHiW93pUNRQf1MjICrDCpJDzP0SOiBaOTqySivGR4ZzcBpGAMsSnE8BN0C/sGaVzILT56whw==');
define('NONCE_SALT',       'GTvjJL5lt4XN/75L0mCgyLiECDL60UJMjAePmbQI0rCuy7p3UETBwbU0d+iH41tZILjoxSxRRqHPnwTcr+5eWw==');

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
