<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'norml');

/** MySQL database username */
define('DB_USER', 'norml2012');

/** MySQL database password */
define('DB_PASSWORD', 'norml2012.');

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
define('AUTH_KEY',         'GacFi?2WS+J%<t<2z_Y=CwA?Kg?}+dB=&<QpRB-J>GRO,k2b>I}(43x,H W^fc%{');
define('SECURE_AUTH_KEY',  '6z2KMH=%1^s|7rPl1QC4Fj+ut!j;X@0b@mlz}3MV)zjdqRg,po yurdCV)rV8(6Y');
define('LOGGED_IN_KEY',    'jX-$-? iNW=q |iiI|4Rdz;|5Z}sul5&q~P*+8vF`e/!/%&U|+g,r`M?|tI+j|Kj');
define('NONCE_KEY',        'H_lm-B_.RIrm-jeTqMnV8evv+Ro#[F8w|Gq?NKT++ezRZYnO! MExV.U2fm0Dc7P');
define('AUTH_SALT',        'HVpCedlnco4v<PX$i4oak%cYS0g0*qXduYzM%(ozCIxcFu}7-L@)Zl21R0U88ncJ');
define('SECURE_AUTH_SALT', '?0 Ji0*HL+i4*sS1]<6|;W3<*I=M$cTd1-8Q0]P|*`NZUF2A~,|s4HJ|I-,8(g,R');
define('LOGGED_IN_SALT',   'dyq*gz@Y]$5Z6#-Sk+RX/NiclAZY@oO(WMjh8-5%8T_*#<j3Qv M2wT}1jseXz= ');
define('NONCE_SALT',       'DU<Cw!]K;8=_M|vdm9hUP7UCliT*q*KFLc>rN`Ni3jtHVG^yK4(1tkm3 6s9]H^*');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
