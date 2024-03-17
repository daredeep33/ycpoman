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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'maryana123' );

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
define( 'AUTH_KEY',         'Ad#Y_Ta35hN#qb,7QkSR{<>! RKtq#M)1=mtUURZeL,u^>s&%|TC/R$_18b4hXDZ' );
define( 'SECURE_AUTH_KEY',  '4A?`R]XMVT=qY=[8IwsL5~,j/*n#~Q;bfy?*{#fEKaiZGQpn]afEu+Lwm+]s6+h ' );
define( 'LOGGED_IN_KEY',    '9yW%>=/iv-X}q(zq*U|xY1{WiuDyVC Jx?RM>S /5B?^.r/gAL@:HMa@Dg]xT#4R' );
define( 'NONCE_KEY',        '0d= KGh3_T!xr._+8wUz-}P57ay@s1F2V77N0BTe|d:G#X3[x$`)h^^[G.Mo1kKt' );
define( 'AUTH_SALT',        'VtTWOd9<&i1LO.aKE#PP@a@,E0b6+:FsS^#R{-T(~u[^Y*j:epyPUPV0{Z*n_=!b' );
define( 'SECURE_AUTH_SALT', 'V]WroF[>u[4o$t~s}OsDkwG_OHl`0%~YC?wuuerFxD-T>cZ>vS3hOIcWR51%V/>@' );
define( 'LOGGED_IN_SALT',   'M`3rIY7S~lvlx0_PU]9~dz])Eo{?&C47yog>_Y(BFgU=aM-}>i>7o}=2,lm;yE%1' );
define( 'NONCE_SALT',       'o^bl*}mzr8Wzjz~<JZ`W<|u[4EFK(5OAGQYw5Rw $B_vD._(-gHj/g]):o}l}J&$' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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

define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);
