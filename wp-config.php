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
define('DB_NAME', 'test');

/** MySQL database username */
define('DB_USER', 'test');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'Og]e K[_=^*OD& Vl+S*-iiQa~Dm[_>JPS<vk{Y4hdHuU]to/rHndM*3@P<Z8&|s');
define('SECURE_AUTH_KEY',  'V ?U;|&${*KD@F3#Gii3D?lKp.rqrD8o&Q9g;agnW9![6|OsZRxHqR{rFyl&5[{O');
define('LOGGED_IN_KEY',    'c$DHq3,OvvK/Bt=.wH@opC(uR85<F >D-!j+&d S U_dUX_V|o%N:@/G;i;/g9|b');
define('NONCE_KEY',        'IO}S.?J*_NtYQDs4>x[i~Vzo95db_/%S>EQ68P6uz.alc8kKgtmX#ttQc^]L7OSz');
define('AUTH_SALT',        '@eP0pdUi78>tf8>W6{MIg2TtC0`.-US8@)FIC5CPhRf_2/A%@[mk-~Ji6AM/ 5!V');
define('SECURE_AUTH_SALT', 'FxN%D5PSa6,~%My{e`*B] 9&iMzfO@cbVdNb4]i*#wO4PUW| ?21>PP(ri-G^Aw<');
define('LOGGED_IN_SALT',   'ho3:;S&-zKfm(xe#H2wgKY8,>IxBGvbvC<]a>zBSah5x $GI~{Zo:r?!:oo:CN_0');
define('NONCE_SALT',       '+(aqp5VVj]TwI2l*:|,GTJ9uE>amBqE#;+Y!Lz6lE9,^s~h:NXN8;|adMY0X$,^k');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
