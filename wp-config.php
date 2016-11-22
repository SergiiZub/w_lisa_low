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
define('DB_NAME', 'wp-lisa');

/** MySQL database username */
define('DB_USER', 'root');

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
define('AUTH_KEY',         'D3UvQjvumc$Sm><JR1_)3jq>WzLW2qwS)3kPO<-?{msBA$va.6RT/vX)1a j2f<U');
define('SECURE_AUTH_KEY',  ':MWvA-og>mf%OM[fKGi&JJZHP[-e9KA|vbkHx3[$BUw+Q|(@hB/KQbSi!8I5K]F+');
define('LOGGED_IN_KEY',    'x@nyEIoLH6aw558H<LsN*~ytn,RF^3H-2D1$Q#GUETxbtJRGO:#KV$=}sbi6P627');
define('NONCE_KEY',        '1xW2v#8B-(f1BacgcA*Kex;;RD{ E<KX#wPSOKHD^sD+Q,%uk}idIPx=W Ol Gnp');
define('AUTH_SALT',        '&ik2NTEncD{rM%16{.C,nhc0.4Ca1K%.h1HbKJ%P.Uml-$E`JI^vV%B)}{/)#,Zr');
define('SECURE_AUTH_SALT', 'I({.BXHOcU++-tdjvglS:p`[~]?}}5-~?{]q=:H|#V&qdlht5BopqwdQWb>}8Vu2');
define('LOGGED_IN_SALT',   'or)[8YfW3$oFiKG}=]uqSeHJr;$d.FNJ |Uej&q8bRM`#lUz;E{66S_V~ls}({r~');
define('NONCE_SALT',       'jiT:QE$+f)5>MhDWN<2{|(rr&:c}a[Hu*CDpzG44Iovqc,w_hw[XMAJMQT]dtAjq');

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
