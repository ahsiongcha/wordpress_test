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
define('DB_NAME', 'code_test');

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
define('AUTH_KEY',         'AH^VbG#eqV6aEL*2OH8zeO%)Aq^M9yR8Idv@SlS2VszcJJ>/#ho}&w)&ey@t1GwG');
define('SECURE_AUTH_KEY',  '}d!PDE7KDTTv/& `Cn-a$JEsQhl5;C0?k>jD]5X&doi7U^P7nyq[zJg-;y&i6L~8');
define('LOGGED_IN_KEY',    'I(4$n}~&idka3IjKC=F2J:EuNN6rK*?ubp{cyq;Qe})`x`IY@~b=ryi?)h,d,?.9');
define('NONCE_KEY',        '9x8T5Gk-2.HIa<J9+KndnWcgs=!*R)KCE2=gtHof[ZH@4CS4uzWlG u#<Jd5_#0&');
define('AUTH_SALT',        'cY&M14L$=t>B[%;/pw&dZX@1 s(k3IZu-<%e[Mm2ez,;Gn&MrO[Bvj0nug!Fd<Qn');
define('SECURE_AUTH_SALT', '=Y]bW Sj#JKNbO#%R0]jpGu~>@gLK3JIHDgko@M<g&INp%{#M{p];N8#uqU;8bo7');
define('LOGGED_IN_SALT',   '=7RDOC]:+/r9zv5ev)8ELB(r-`j^ (clT18j<m?kh&KT5I,VA{ynM3lO]vJ?rUOu');
define('NONCE_SALT',       'hJX[DW ~N:W8CT%G+,]dn^CigFz@;+xI;o=S|FZi<PuI-(3uqV:T .27${]Z{J0?');

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
