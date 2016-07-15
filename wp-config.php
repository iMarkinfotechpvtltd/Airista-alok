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
define('DB_NAME', 'db636661693');

/** MySQL database username */
define('DB_USER', 'dbo636661693');

/** MySQL database password */
define('DB_PASSWORD', 'im@rk123#@');

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
define('AUTH_KEY',         '.DUGa4?{*Qo>x9Pi?u+ZiqtNvNWtXJLZrS$G$?gRl8[$$[F&#M7j(()d1${DE^ht');
define('SECURE_AUTH_KEY',  '@kpSalwKjFtUQ9[;Ow>|>yb<z#Q?FR~w$vR:fTtsYrB*/ZY)u4#BEE0ZWMKj81D!');
define('LOGGED_IN_KEY',    'tRHbbY  JjP_&M2 ft3A.|eF%elKA+Q5qEwA(?vHJIjX2oPF^ x(*gAkJCm7bB^ ');
define('NONCE_KEY',        '(gJd_thmNSw|Mc=P1hFhJ`%#s@Vi7Dh%WT%FB4FC48:9^OcGGCjB,r[s9&W-pmAf');
define('AUTH_SALT',        'C9dBy_-SD+Ya,3<pHx_a!6W=~RRUY6LsXY`M&i.o[;_RCw4&cj%JV 902^Xl*pbD');
define('SECURE_AUTH_SALT', 'I<<|-!6)&(:x~|sl}/,Mbtu0k|L|rFw Lp*@#^&qJ5jtqVB&!t5aBRL=GWxo<-tt');
define('LOGGED_IN_SALT',   'C%bh4+FT+H@ZXfXhMXGzsQG5$So,/bjG[4&uTu6E3T`X;O$zXh-qO6qQgjPH;#IB');
define('NONCE_SALT',       'Y@o~$iP`*T*e~0guY@fM&`~<GB&$38%C&S(CWy7%vd,gC|?or[q]5i8eY~ZX<pa*');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'im_';

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
