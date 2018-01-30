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
define('DB_NAME', 'umucowac_new');

/** MySQL database username */
define('DB_USER', 'umucowac');

/** MySQL database password */
define('DB_PASSWORD', 'Uco@17Xnp');

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
define('AUTH_KEY',         'Xgv/ MR8z!o:N#9_PC/o/.0a^fIo<306Bduj$%:}Lv[.P bU^`l$wD@=40DmV]6v');
define('SECURE_AUTH_KEY',  '=e._>)>K%drZ(J daK(Cjm@e(/Z4o_R(Fl2jF=sI#1x907#t>05*;Et09|ys1O>A');
define('LOGGED_IN_KEY',    'Sis*O&B!H2^kU&^H@&GIF[;Hg*+2lkp:]G[x=O>r57fFXc?ud^4+X*?Mn H2Ej26');
define('NONCE_KEY',        'yax!wRYiIAZ@NOb4,G[`/gy^]7aPJ*YlC0@9@/(|yy8!$9YE/sd7gt[>>+_lXnd8');
define('AUTH_SALT',        '*}F|s4~wT.[qJ0Yhfa<{RZ2Vu$Q&27T?.ifR!Vg?6`eb`&mMuxy5$8V#G TkW< n');
define('SECURE_AUTH_SALT', '(do?q6hm)emq<Sl^/wTARh^3R&NvOQ:?fK!w)IP 2VMfqCo<iWq1@Yuei$cg.:wa');
define('LOGGED_IN_SALT',   'W.*M>)| n7d6B+t+i?V|q^NA1zL7=%?e wLl9[*vmiIJ~}O4.+4Xl8Jx>DQ,fv9r');
define('NONCE_SALT',       'v5<d&S<0/[L-*x;L:SXbARt6Rm+X{%qetD2nZm>aigM7}Bo(Kk?<*b1B0GBD>O9]');

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
