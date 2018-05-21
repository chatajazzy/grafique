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
define('DB_NAME', 'grafique');

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
define('AUTH_KEY',         'j(rp.s3qb{Egx&(%h0).qU7;QUD,$sv*ao<sj#7!@vR&D8{8ivBU4 /Hqhgxxo$3');
define('SECURE_AUTH_KEY',  'TMs-7!(toqucqEqt/F$FGz9YE/Z+Dod~N}SHJ1q0rk&E vMMq]a{;cy*nK7w?rZi');
define('LOGGED_IN_KEY',    '#ZW}fNER5 0wc}U1@KVk:W8k&3`9b<EQVWBHf<{/5*7Eo8u|mHiPXP/SzJZ[Fte=');
define('NONCE_KEY',        '#nJOz+z38^$qYHF[EiM|S&;PDfWY->[tl*La}7<C(#/izfHOSF/:;,ie)3NC8$:6');
define('AUTH_SALT',        '|@{1u*4l>}mY7@jWl|~D>T2vAJj)%w+jYJ`M|P(Fh=SnH9p;;@/]_4}rYHJ2)o( ');
define('SECURE_AUTH_SALT', ')I[43W`929}sx:_tmb t(mY7 gcvQN9>^a7V2LY|}Z%nVF-H![apE?9mb,v8NY+c');
define('LOGGED_IN_SALT',   ']XS#uUN #S;?#%MQ6|b5!z$=[qGYp}k.nvARElCeFz}yGux&_^_^`x/fG}xK,YdS');
define('NONCE_SALT',       'gM<T=.bs2O6N8DKcR%7|k.Jo,]U?kiWcQ+Iw79I<j|?[>ce1U/=nIj0Y|c?#522&');

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
