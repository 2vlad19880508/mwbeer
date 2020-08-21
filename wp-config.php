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
define('DB_NAME', 'industry_0050');

/** MySQL database username */
define('DB_USER', 'industry_0050');

/** MySQL database password */
define('DB_PASSWORD', 'OiP0b&3l5(');

/** MySQL hostname */
define('DB_HOST', 'industry.mysql.tools');

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
define('AUTH_KEY',         'VIN8HIjuwaVNsNMbFNQj#2N4N#wRjpyYGP!aIMifTL3BbrUxIgf1Et84cfi7P4Ux');
define('SECURE_AUTH_KEY',  'WWDc30726MZwTN6netODxMjSq7LWeijb2)3hk9rO4Fc77jd#vZRi0eezbI#hDTk2');
define('LOGGED_IN_KEY',    'yH6HQ*R%Vl8iSeKoKfjyEs1qb&vGCJiQs#qI62gXu0D7ohhm1S(J03avstl3&Ndp');
define('NONCE_KEY',        'GjtswgVfrB8%CuQ@!oWMlFL(JjxZyb&vSlIdo^*CkrjMTOq0P&1PGc%76WhcFPMH');
define('AUTH_SALT',        'RfLojZ9ORy5)^LA&rJ)i@So)0V7J30p0%FDqciBq*rmBN0QdUdOb5eCnI%i)MJK9');
define('SECURE_AUTH_SALT', '&eHPefQ(Byw9Jxh3AWb1E2&HJ^@%1#U%3VxE2E^hAihBr@AWTBC2a%af7%!9e)BK');
define('LOGGED_IN_SALT',   'yfdryb82nvKw8m5TFWre&)nyEfIe3fB)Hi54Qg(bFxvGqCRmOQAVwTrd(wqTuzEv');
define('NONCE_SALT',       '5!raD!uNLqPz&thT8oD&pJzz5jPc6qJr#q2g7KQf^tbH&i#yRGVB9TaXRd^3IRy%');
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
