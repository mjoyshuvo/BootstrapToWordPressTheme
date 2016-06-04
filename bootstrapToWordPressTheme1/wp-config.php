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
define('DB_NAME', 'udemy');

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
define('AUTH_KEY',         'V*/kj!KB!9{SW0G(Yi?YebmM:Oj67X].3MFIt%BHMpVAl23gJK7Tf7Hm&=Vp>4^V');
define('SECURE_AUTH_KEY',  '(@nL<[;Qj?pOnLDT4B?icTCC}n[dja(b,Hu{79yjXq%*,FGnh[Lil/N?4/(Hct(7');
define('LOGGED_IN_KEY',    'n<xty;TLA~$3:WBwrAvbG^N_jMlGK25rW,hLdP^QCX=TEAzC02j.[_fZ+T&EBMUf');
define('NONCE_KEY',        'X)M9gfm!~1j,;lHC}QAL^>?Y$bO;U#9Tf,;I/vn/7c,=_^$/;Hk:k;vAHVM+y1Y2');
define('AUTH_SALT',        'i|>gI>Vk=c|To~X?dv41f(m3FE[p>k%ZaJt.M>?%~,]81{.69r=rG|.GfD0)BcAt');
define('SECURE_AUTH_SALT', '^:IMdTExyR$KUE2GAJ?/zTup?H|lA+F2v%v:%prHKI|Zzh]N3/?&~^YK?2TUC8ft');
define('LOGGED_IN_SALT',   'T,<Nw}2OS.HhY0MDv?k4zhjC BKwkKQD<JCHIIF[|<D(}spl5xM#1t9X:K)6eF>`');
define('NONCE_SALT',       'oX@k2CS$r;acA!)IwcGkYpn)kzX->;|&yli70CPqxB8r!nP]Uj~2r1,zUNF#4Aht');

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
