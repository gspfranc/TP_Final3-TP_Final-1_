<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'fou_wp504');

/** MySQL database username */
define('DB_USER', 'fou_wp504');

/** MySQL database password */
define('DB_PASSWORD', '9[S]l6PI45');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'wuo0ldahpcpwjbixjloga38p96hefewghvwbgkrcufopot7le9zvuormsqcax7af');
define('SECURE_AUTH_KEY',  'bwvlekc9lj9o6rulig7uxdkdjd3lyuojgw6iod8mjl4ibqp3uwkk0uwbbktrjcqg');
define('LOGGED_IN_KEY',    'c9yjkgohmwgypnhyln0f5k6c6jmxbif6bjttt9lpsdcw5yrz1tmsa2ymnjud3bcx');
define('NONCE_KEY',        'a7zx3s8wttkbzcigufhmpzgsokenkmlsyhsafmkqayj9fcswyzhhqxdkxrvamutp');
define('AUTH_SALT',        'wtkuxhz6tdbr2noxga6b2lyufbczcndu0a11t4vlgrvjgxpqbreammbbrlxvk3fj');
define('SECURE_AUTH_SALT', 'zly7vggpditr9ao6yincyv1pfa3ikwa0rk25pvfvettcle0688o7yag2xuscxyec');
define('LOGGED_IN_SALT',   '8pdrodaho8wkeon7cbe0womsjfbgnxo9tzajqjwqkik5ulswsyrdtqxqzy2p9xfr');
define('NONCE_SALT',       '4uusipujygegzwtli48gkasfritwbde6nroe6xokdyxdvfejkdummutqz85ao88e');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
