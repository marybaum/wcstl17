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
define('DB_NAME', 'wcstl17DBkbenh');

/** MySQL database username */
define('DB_USER', 'wcstl17DBkbenh');

/** MySQL database password */
define('DB_PASSWORD', 'fZQ6CWFI9t');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         ';*;ALTNZo-|ks@[4s~|1CO:8GRdoGSdlwVhs~[5p-#1D_:9KSdLWiq+#mx.;9x.]6');
define('SECURE_AUTH_KEY',  'V9KWdpOVhs-#:lt~]1D~]1DKWNYgrz,}rz,07J@>0BJV0BJUcovNVgoz!goz|}8s@');
define('LOGGED_IN_KEY',    's[4C![4FRZTbmu*<3u*{2EM.{7EQX6EQXjq$Qbju$>ju^<3By^}3FMY3FMYfrit+#');
define('NONCE_KEY',        '!C|0CRMbq$<m$<6I^3EQX6IQbnuMUfny,fry,{7v$>BJ>7IQcjelx_]6+_;9HS#');
define('AUTH_SALT',        '^7t*]2DL]5DOWipHPait*amx*]2qx.;6H.;AHPa2ALTfmyTemy*{|:8GRZ8GRZks~');
define('SECURE_AUTH_SALT', 'aWp*]mx<6E<2EPa2EPbmPbmy.~[8KV4GRhsKZl-#p-|1t_:9K[9KWh9LWlxWlx#1}');
define('LOGGED_IN_SALT',   '|v![4G-|18KR08KRdkwOVho-|hs-|183BMUfnMUfny,{jr$,7$,7IQ>3BNUgnMU');
define('NONCE_SALT',       'd@!4Cs|:1KS[1KRVdfnry{37y{7EX{7FYfjEYfjr,Ycj@,>v$^>BJM^47FYg7FN');

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
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
