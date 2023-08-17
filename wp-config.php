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
define('DB_NAME', 'wp_learning');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', 'Admin@#123');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         '7BqF0qFxz8oRny(Sq&>@P7wIOGAG;x`Cd^Tq@Y!*z#L9|iD|<eT$ E*;#VRMTTeN');
define('SECURE_AUTH_KEY',  'Kv}?;V(;WE:g~P <i]kB`y5gho4KJ[lz9Eieo{AA+a`vu` N%C92slM9rYAT1o=`');
define('LOGGED_IN_KEY',    '!z;3}:j;[+H&?343Our`,oTC8N6 $wYh0F9C9w8hvyB8M]Gp+MUUoh?1{Av98nOY');
define('NONCE_KEY',        ',$-!g$-V<`7thu76DdIvdjCg-#Zx4^8:$6q{@2nI^S.G`?o{|:cdQJK#a{-Wfvl$');
define('AUTH_SALT',        '[n%FY@Q7[=1J+ZRB?gMZ0OZJ99#wq3K] untnr0DRC2G5k0$EK7^p2]hXjTS[rw[');
define('SECURE_AUTH_SALT', 'F0&}ClBcO@a>X-X2%qR@gP=ZZt]d94V&diMI^LDCz]taC**,ZJo^~IY{iXH#=uoO');
define('LOGGED_IN_SALT',   '/V{/mG_<N0qXtB>QsLx;mjfD2RLl%MZ)S,0E#81e<`@}L:LTY$N6>DY)rwKKPLvM');
define('NONCE_SALT',       ']Fl]/c)W-qHgwF>{K+U->FtEK*`~[)?{wG,h8R]m<R(3^xZ-%ebPVMT39H_i+VaF');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ts_';

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
define('WP_DEBUG', false);
define('FS_METHOD', 'direct');

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
