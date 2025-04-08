<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', '0504' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'D0$cn5=o3kc1L`vVI}cQ#~xhp6hx_l{<OoipK*$gyev3+qB?R0G#gVH=:B7;hF56' );
define( 'SECURE_AUTH_KEY',  '.~k-}yDyQE,y?>xW=RcIG2 L@SJE_60HjiQ|pfPqPM=%Tg{b 0~_z69DBf!B=|(d' );
define( 'LOGGED_IN_KEY',    '^r#4WXc!oQW|CR-u}0vY8q%Gx4H@Z<>tk`,w8K3K{K]:UHO56YvvP?;Sd;;W0hE7' );
define( 'NONCE_KEY',        '9!_Z[269@Yi@Amh;yO;]f7*YxZv=Kd( lJ@9fZnN#JVu<k=s_fGM%)#+..)2SNOJ' );
define( 'AUTH_SALT',        '}PRz8kV^0Q^pBCjnWqhP^vD}(1EAH!j>1zn3ju*jOw}j.%GD8z-iW]z-J8Mu1?{M' );
define( 'SECURE_AUTH_SALT', 'md7d}37QApddh.h8g(q@<RAavWas*(EW>4V&Pyh$2?9m/$lLwkmw|4dUg7Ym`viV' );
define( 'LOGGED_IN_SALT',   'X-qb$tmwL*NxN-ejPhT{Kk>s5,U<m#@6Zep[Q04xvo&^:g~G<pU7fXFa$TWJaAnt' );
define( 'NONCE_SALT',       '}byIpg|Bm[GMSirKDvY4O1~FpYmvTrbUVf5.8dT`^Di!n.#;QJD}BWq{5!|p+%ly' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
