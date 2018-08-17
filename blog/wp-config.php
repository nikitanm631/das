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
define('DB_NAME', 'das');

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
define('AUTH_KEY',         'p(WA^Tv3kjv/lo!;`.jjy1+`rEGh:`T8Ey`$EsXSFj+C$ze7*@DQ4W$%$hoKTg8;');
define('SECURE_AUTH_KEY',  'h.QYzVZvkcPz5 %SIyn7@CpnNBVX|MB%RSMT#J{JvwVjh._i#!{`T/*Urkj X&|_');
define('LOGGED_IN_KEY',    'UdboIpf]eP6ZtH4x%;L5+gc{}]k4%q 9O^W}W:~njKB*_GjC$vXKv2Al$n?*[Qrq');
define('NONCE_KEY',        ';un;1y,qu5H6CL91aIFOo.;H?q,W`/cX]?)*()9)YW<Ty^K}G`o#fS|8&CCZYQK]');
define('AUTH_SALT',        '>r5L)V{g!U^bvESL4c?->^7dBa AT|Kw;&Q^DQl`A=P+?J6]9,U De/O[%L{(ie]');
define('SECURE_AUTH_SALT', '_kT/L`tcooi{s7W9AWI@eR&jHTY-C:Fs6DS,si9xhkn$s(C;5`LliFT7h~eFDB;:');
define('LOGGED_IN_SALT',   'ir_D0qVA0P^6C71In?QD0RvMy*9467jF+QkU>{%@SIry3;04JE4x}3QaCRsOH::?');
define('NONCE_SALT',       'PkN:kgyUyGTnBrx[`/guQcQs%ri6Mv*x]B;.mTT_PmqZ?D%5w6}|x}Hm{xmvH)E?');

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
