<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'ceatuscl_demo1_wp');

/** MySQL database username */
define('DB_USER', 'ceatuscl_demo1');

/** MySQL database password */
define('DB_PASSWORD', 'L+S@0f.ow(MD');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'K|>s<9+bFw)}I>^K/`achN|q<XLFn0)p*#uY*kPS{NrD-|40|X+L<9Qz)L-5yb/Z');
define('SECURE_AUTH_KEY',  '!6d<@i+VF^vmw/!!hTn1f2U|qx=ntAYGJ-wpa.s3f!g`0mZ{yb||fi0G|c)X(FpQ');
define('LOGGED_IN_KEY',    'P%h:A)oRbro=d=mPPOj~gh6HME $J_O66vOB{&$9Y.X=ya~+J0AWb9J-fa3XI2u3');
define('NONCE_KEY',        'sxdFr`=MV0pE7,uROErlhukNWI(<,5| =5aR].^>b9I41]`%o14=@PJGZl-F+l=}');
define('AUTH_SALT',        '1AjJe_+HE%n&+jHD@^:fJcT[D@B>t.+$Q:/Q{DtHV|!e<`*l; /?XqcpZ`--JE@!');
define('SECURE_AUTH_SALT', 's4cgxp(`}1<LD@5p!-BMof+?5Vs<Au>Q_>*e <Cm<>q:z<rS56[]L9Y<?&Phi;{#');
define('LOGGED_IN_SALT',   'U`IU1A0M!LruV>1X_QKZk^_{fj:.]wP+M_ul.D%gH.Z{W2!zh!k+!}]}Kc`_F+?L');
define('NONCE_SALT',       'HEkba7L~jKbL$E:N Z91>z_R]&6|w9a^KTUVAfK%D*.+JB6/<<z=9K!folC98cw/');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
