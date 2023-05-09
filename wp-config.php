<?php
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
define( 'DB_NAME', 'soppamitret' );

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
define( 'AUTH_KEY',         '[hDb`{=sJp8k +s9q$vD2galx$Z(g@Bh=JGp}-4Y%owVA3Y@&#O=z^SXUIiwk/=S' );
define( 'SECURE_AUTH_KEY',  'cZFOY^S;`Xyq7B{}`M(^mad4u6FPCkZuYQ3p~HFZp t2M ?)F|Q!@3@6e?[JF~RJ' );
define( 'LOGGED_IN_KEY',    '9h[u@m]-6>|C5W}}m=4#@FDtTBIId<,=Z_~GNNCb@wzI&fHWYXHN& ~?d1SWeWL(' );
define( 'NONCE_KEY',        'Db.HPkbMDSD7/fE1_=RrslXLw!vA-W5$moB%Yjsg>71%z[jU//V^QF?v>@q>0onS' );
define( 'AUTH_SALT',        'mBObZs-h(OgqpF39brLcqt:RCXO%jXT^Fe*JQ!Y[PEdcR#Tyj5rq3HWx j7M_#(-' );
define( 'SECURE_AUTH_SALT', 'eu}%!WJAGsM[5wX*AIh;G|BBU9d)UIFrn:[p}Bpl@E/RHPm?fg/B?6?+m=5k:e:~' );
define( 'LOGGED_IN_SALT',   'D^^(nvI083=X>:(n%H`IL_%1sOJRmNz`tW3EH`M$VZA^RSog5}7T5[1],nvEE24$' );
define( 'NONCE_SALT',       'bf;2W`C},Q:@sgVkMk.7&Zon(]~mjlP|u{FCF KXkP:q#QR9*/-_2>$OdwQ&vknv' );

/**#@-*/

/**
 * WordPress database table prefix.
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
define('FS_METHOD', 'direct');
/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
define( 'UPLOADS', 'wp-content/uploads' );
require_once ABSPATH . 'wp-settings.php';
