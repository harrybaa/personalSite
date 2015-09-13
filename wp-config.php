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
define('DB_NAME', 'harrybaa_blog');

/** MySQL database username */
define('DB_USER', 'harrybaa_root');

/** MySQL database password */
define('DB_PASSWORD', 'liuweiba0826');

/** MySQL hostname */
define('DB_HOST', '142.4.56.134');

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
define('AUTH_KEY',         'bd{f`[K(>HZ,HFe/]:u]-p*FIrst<-q:0$f do#!4|B*j#t$4RfK9w[^`ej]bASo');
define('SECURE_AUTH_KEY',  'H_Gg6h$+`>n[!v>4reG]_UaF)`5Z8i}cGJ1=N5a<+T*kC(@smb_0fAzOXA*;{_AD');
define('LOGGED_IN_KEY',    'b( >cB9?X:K0io7l|-I)v#9vzFRv+Qun~&{HeEd&;LJkG3t27EF0.HMIp=~zODvu');
define('NONCE_KEY',        '[yq}$`r]@hvDW_q[9igytTRw2ty_Yiey9D=C2A&aAa]H63Q*{9ExYp0:-M$Yi0U_');
define('AUTH_SALT',        '1++|a;K&W[|0gd<TYQEhxoRxEsAY=4v_UG+)wIv2@JDT;0YL:g S-26|Oa1$wmJP');
define('SECURE_AUTH_SALT', 'HyS/#w&P]^R+CxVoWPwBv=*)zh9DcyY,j>kii52mObsMpMvWAh4#0xy2y+qAhX..');
define('LOGGED_IN_SALT',   'XVaNL,%1lC4-?C<z[+wtt(rBA:wT8Xj<i]3|amM*`3;hnSti#C~+:q*25EAU{-9k');
define('NONCE_SALT',       'P%95$D~2T_t)9zU6-n`h]QJRw^^YCouR=6a=(ZF>`(C.MoVK?Zw<ps0Hs2:-9cRQ');

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
