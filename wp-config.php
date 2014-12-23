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
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/var/www/html/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'supports_coordination');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'Bl@ckH@Thack4');

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
define('AUTH_KEY',         'T.4Ag!{?1?]Iq<al?%(=jbGY-Yj/@]E([S7+pH,[KYy3@QzJ?;u<*;PH_?):^!(v');
define('SECURE_AUTH_KEY',  '!ej<hX?Ls0j_*+0V$$Wt6*bN,=?JLxLv}^*1}w_f^-1%TsaLv:u+{+WAWT*fJdr|');
define('LOGGED_IN_KEY',    '4T/1&FjGr9tJk$$w4Urtna+3$% |PB{<oJ5ASo0`+838}E1fnW9H$T$%@$+oaO(a');
define('NONCE_KEY',        '+zQ8k(#/osKXk8v4MgAoaS)u@p{^93kzJ!-+7L&0$2O vJ!jXByv+Ofwv-u?O,nR');
define('AUTH_SALT',        '$F!oZ%s P%_QQ(5Vkps$|i+U%%wVdK-$O_lZH!cvf{UK2.zZ^tZFlR=0%}_n+1|$');
define('SECURE_AUTH_SALT', 'L_>V?P~f[knN(6D|N4sg3:=RiX>;!d0KKT?rsk`@1p_u(x<)aG3V<W>|Ep,sZrr(');
define('LOGGED_IN_SALT',   '?G5<rgHl>{+@qG,oY6] At~tZ`*k3lEI^yD?yCZ:c&5/eKxk`,hR>FHiB)Y($gA^');
define('NONCE_SALT',       '/X#FbNWyTC2v#DQC1+rFc#ZT5?DV9%blNWbSxbMrbv}kxx1#^Z&:cKbF7oS;38_2');

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
