<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache


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
define('DB_NAME', 'brandsonroad_com_1');

/** MySQL database username */
define('DB_USER', 'brandsonroadcom1');

/** MySQL database password */
define('DB_PASSWORD', 'h83bGYyA');

/** MySQL hostname */
define('DB_HOST', 'mysql.brandsonroad.com');

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
define('AUTH_KEY',         '+X7`m~Y"H0+j#hws1b2+&wM&&`^QCO^xtzlY0W_RiIWR&"pHJ_H6ky/gYENIvgwV');
define('SECURE_AUTH_KEY',  '8MTg&fMZJ:3e*&uJ`UmBnHqWY6HB7V;I(0B$YL4oX|o/:J5)n!XD1lAp:(2Dy4w6');
define('LOGGED_IN_KEY',    'NL#EzjeU4`;q0mUXn9D|~0e(G4@rt6ofbv&PshRa&!J0V?"GJ&n1AZ;^xQ_/%UWX');
define('NONCE_KEY',        'T@TTp4zYf61T?6O+Vv5~P1Bp+678Vz$xc6vlDI_jj^;~o4dc1IR/Kw|y!Os5oXf(');
define('AUTH_SALT',        'p)PC|$d5*2KHiK8%2Wh$dG;J^RPjWI@XVae5gzOt^dSSjKYMufm5Q&Asf_w;f8S;');
define('SECURE_AUTH_SALT', '5PNpI_rvJ~m9Q$pAxVR80d%5*)/LgqkY~&NHhBce!JbLZ~o~uj2eTZ@$@YqzKz6I');
define('LOGGED_IN_SALT',   'xCk`AV&TDR_CfxV51AhA%y4a~_Ks4)5DD"adh$0T3T(a&&G3dw9b(|3me+Mj3u*B');
define('NONCE_SALT',       'B~:;q)"ysIMy3)aUEcyXKQMw)d48Qx1ooRlyQrn(I"Ln1`9hMN6oNo0md6r0OmJb');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_cihjwj_';

/**
 * Limits total Post Revisions saved per Post/Page.
 * Change or comment this line out if you would like to increase or remove the limit.
 */
define('WP_POST_REVISIONS',  10);

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

/**
 * Removing this could cause issues with your experience in the DreamHost panel
 */

if (isset($_SERVER['HTTP_HOST']) && preg_match("/^(.*)\.dream\.website$/", $_SERVER['HTTP_HOST'])) {
        $proto = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https" : "http";
        define('WP_SITEURL', $proto . '://' . $_SERVER['HTTP_HOST']);
        define('WP_HOME',    $proto . '://' . $_SERVER['HTTP_HOST']);
        define('JETPACK_STAGING_MODE', true);
}

define( 'WP_MEMORY_LIMIT', '128M' );
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
