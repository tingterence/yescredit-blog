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

if (isset($_ENV['CLEARDB_DATABASE_URL'])) {
    $db = parse_url($_ENV['CLEARDB_DATABASE_URL']);
    define('DB_NAME',     trim($db['path'], '/'));
    define('DB_USER',     $db['user']);
    define('DB_PASSWORD', $db['pass']);
    define('DB_HOST',     $db['host']);
    define('DB_CHARSET',  'utf8');
    define('DB_COLLATE',  '');
} else {
    define('DB_NAME',     'yes_credit');
    define('DB_USER',     'root');
    define('DB_PASSWORD', '');
    define('DB_HOST',     '127.0.0.1');
    define('DB_CHARSET',  'utf8mb4');
    define('DB_COLLATE',  '');
}

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '!Zw(-6TSr#i{U`[@7C$-t%GsitQiQq+o0>R)@;{*t5u8i$WBHofMJ5cfAf:.eCuO');
define('SECURE_AUTH_KEY',  ':#H41^7uy`+d<)AmK9z1g7bC(#@uc@[sd*,N(yAMGGpL>fkoFBeaACl5[_O643R~');
define('LOGGED_IN_KEY',    'qXZx3T].-DCmZQANl1CmS|LY}%vk^mhekX[tY;+dQq{Ul@:6uJut}FuN]1X8$@t?');
define('NONCE_KEY',        's{0!+-0Oy>Ya[#tKu[~Gpt[4Sg&d-+D`?,57CaI=^(O)=D|~ep@~>C}A3-o0~}x=');
define('AUTH_SALT',        'G2;Xp,6kv!&`d3lzaRY+Ia`?jnacRHBF-<}.-GO7Cf`=g^0-sJnV`uz6KrQY%xd:');
define('SECURE_AUTH_SALT', 'b*u)RNx8,H!2w49plFA--WW#)GK>amYEO,mcI,u+~m8t2U|Tv#]BP3ot08m(Yn)!');
define('LOGGED_IN_SALT',   'wNK. G#d5uoJ.7-CgKn>w0w/0rL+g5Xe1kanr,XU 6!H47YB{<8$pMT*ell5kEz ');
define('NONCE_SALT',       'EYR@rST_kkHte*)o@D2G:RtUcS}s!413dSXK^kEf|o)h&C{Cr:+_n)$#{-m!%A,#');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'yc_';

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
