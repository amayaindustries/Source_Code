<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */
// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'amaya_wp59581' );
/** Database username */
define( 'DB_USER', 'amaya_admin' );
/** Database password */
define( 'DB_PASSWORD', 'M@nchester22' );
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
define( 'AUTH_KEY',         '7eesl4s1ojnqtxlqs2vmpdxlkkrogzsohhrsr63ouithwzhcrdk2dnelproo1zhg' );
define( 'SECURE_AUTH_KEY',  '33zpsvfgcmuhp35xt0qp50eoinuskskbeuiydhn6ak7sojwb9mbhir5ibxyraen8' );
define( 'LOGGED_IN_KEY',    'jlqejmhopsynkrhprulbx4wpuvsbz4z6aqwhclth7tsbk7u8nrumahhw4jsqmt9f' );
define( 'NONCE_KEY',        'jdqetgwtqm0z1xogva8ppw2xgecxinpzlcroysrm4212hd3w6ardipsw0p4rxn9w' );
define( 'AUTH_SALT',        'svgodyzeaxxexiwvmsecp7ryjw7vbvahsmw5rcsjh3cnjspdkwdp1wz0dddjpdpv' );
define( 'SECURE_AUTH_SALT', '4fvxlhlzkbxmqi7h7jrno3w57tm5aoealobkius7pi2l9h7w7qeg4m14b7qu0a1l' );
define( 'LOGGED_IN_SALT',   'f65f14afl99zf3zkptzwwireymbo0nffmo378qcxxtycprevtvs6rebsus5sp4gl' );
define( 'NONCE_SALT',       '7p8bvgpr3z93liia0ggfljzgw2zbyywp8nnc2jerukk1q7itqs0whh01wfrizx4x' );
/**#@-*/
/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wph_';
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
/* Add any custom values between this line and the "stop editing" line. */
define('DISABLE_WP_CRON', true);
/* That's all, stop editing! Happy publishing. */
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
