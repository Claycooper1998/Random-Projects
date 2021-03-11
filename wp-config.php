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
define('AUTH_KEY',         '1LF959vRhLqNgqdONRFvdE3W8JqhqL6LDtkRE4z6ODWZ1P09PM7rO0vXwTv7VSNhuhTeE+9D5PmmBcx7m0VYYQ==');
define('SECURE_AUTH_KEY',  '4y2ax6QmDegtqXLf0zZFwg6hwnqHBL1dSY2SkI8qLdvrpOwQI6O8Br/wKcgbS8lVnJMce20oTMR1+rcK5SW9Vw==');
define('LOGGED_IN_KEY',    'K/56c4EZ4+i4EqlWT4c2Ghz/3Wz5qfYXCMemmrWBTN/tlvHbLZkw9EuI/b2KEsJEuBlIU9LygHROpciXKjmPOQ==');
define('NONCE_KEY',        'bVPj3KU1I5TWPXvKZPv6GwDoXwDO4tM5vb0+C4sg/sPxOIx57ofkBlCZ+3S/PURAtu9vu2RaY0uF6bUKAMTfeQ==');
define('AUTH_SALT',        'kMg4/6BpSQtYj1j2msl9MZU9/vwkhj1VciQvsBDBXv4haijmZQgQmfnAr/5+Ui8sYTGiVCXwSFGRozAfqytYJA==');
define('SECURE_AUTH_SALT', 'JGNyBzaxcYH+vRU90t0yDdr2cYvcS/v+8HToNcvP1k8MXNFqyyB1zZo9vH+Dfgjhl1U7ad5+hcrCiIVeWgtuGA==');
define('LOGGED_IN_SALT',   '1fyL0TscwQ6ObZIXV61j1BE1O1f5pBhaIqSDjN4tLZXarUJD26UXJe+RYjiRj4ScEDogVIBj7g9zW7nAFxkt7Q==');
define('NONCE_SALT',       'oJCEFJbLv7cGWYMVSirHX9nhm5P0b6HhSD1mmPR07nSJecP7wU36S2CBSG590hu9f7r9IU884u/mEddHmzM6XQ==');

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
