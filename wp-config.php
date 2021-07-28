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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpressuser' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */

define('AUTH_KEY',         'CSez@w qX}^E>dX8%fgI,edbS*<hA%hm=yo#wK?<Z}g=Rh=B/*0V,!WDvcy^iada');
define('SECURE_AUTH_KEY',  'cu4>V#|X/z{eCE+7*7~jt9{q@uTngM.>D+ia+S4:,D+iz:42@{O_kZu$1D(,1:Rd');
define('LOGGED_IN_KEY',    '{`6}V6Hk+UeA+x,6gY(,]OMSVkb|CeUYq+JlgH<+D|0[6 tnX%n@P=[3ZkZuf>p.');
define('NONCE_KEY',        '+=dsWLE|%:hBxwW3:@Kj_EsI=k?Nn8lQC-E5L|IjCI&<01H1V3kr9dHtROiH3W|n');
define('AUTH_SALT',        'BBBsi(*7!1O96!u.STk-wtO7wF*/Fp~ew/@ZQ-AcCp?Q7CT[T9[46Tg l8{(sfPB');
define('SECURE_AUTH_SALT', ')=uiD4J;m?suY zNtrsL`g*[B>Owy]vs+}79Cz7G-)Dq136F+|.t-L]X]>Vb=+}4');
define('LOGGED_IN_SALT',   '31O}kK|k*I7izY?-dl-LA>Csv|jw+a}fV26Wyrx0*{XVUf1v{ _1|G;lE%=Bxfp3');
define('NONCE_SALT',       'vi!7.$}nFootikNMcW3pNTFe*9uN-YE=c0#gz{/|8F#|Z2-|^o[u~)I:L[m_S!A0');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
