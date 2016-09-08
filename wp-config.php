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
define('DB_NAME', 'morsedev');

/** MySQL database username */
define('DB_USER', 'sfbmorse');

/** MySQL database password */
define('DB_PASSWORD', 'test');

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
define('AUTH_KEY',         '^H=<F!M1Y=]1[FJ1..Y:78JD&:0F9|B%bQzxE@B50b(;G^Cb`76=T]vkQUoX&$a4');
define('SECURE_AUTH_KEY',  ',ALEoIjuPI?d^Jdnr_bJ#@HY/REVdv&P<J;1$m+|( Wj`^;%GWe5i)>CC@l:gEH`');
define('LOGGED_IN_KEY',    'MLI!UV)xej9l5soqEXp?D%B,;HpD-[}GQwA7{iQA@i@.U+):UiPQ4cfh|Z0[i%BW');
define('NONCE_KEY',        '4gw&^=fchXyMf9} 4wTKAv[Mb9URasz)#u3$u,nC}:EXew#+GsbHVzn]56 cH;hn');
define('AUTH_SALT',        ' @^0w~?S4i=zdw=/T;_TuI8nU=%]SH=tT{:#8C!d5A,u|_EXx{1<|w02}Cc>ee>q');
define('SECURE_AUTH_SALT', '{-#VUNI@[|c4G CyzfF+g/S$uH5xirMT{)#^{|Qa1nXge*EK;E~dS}_:TZN3>,z`');
define('LOGGED_IN_SALT',   'tz)?8/4f$@i$DI D-bW-c9_L6_l;;(eTI?AiMsq*I|{;i+W:?ry+9emShn;K{M>z');
define('NONCE_SALT',       '/}1ou#7:-@c.FGR%fdmb)DY~qpa@8>aOFV`=s u>d]]j3p!# ,2t ycnD^}924+s');

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
