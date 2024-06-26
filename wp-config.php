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
define( 'DB_NAME', 'fiesta-time' );

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
define( 'AUTH_KEY',         '5}NQHzsAcq!{UC<gXUVneX};:*kaT;oIc4A@ou]Fq1V#gdSO6>i8j~;UDBxCRz,N' );
define( 'SECURE_AUTH_KEY',  '8]k&-To,3tQ!MDd8@uw$Di6G3UT HY~J;>zU$P#6S%xMzl?gWh=v).A&qfpvg&lQ' );
define( 'LOGGED_IN_KEY',    '@l}prU_-Dy8Rf;AP_nf#kTk[k56ZyZ&}3I|}x1;^,! R|4(CbM`<3#~^vWL&u}Z<' );
define( 'NONCE_KEY',        '}!d(zesj0:jx)bB,E>70i>qzD=894?TRZ(ur8{(rBZ_m)s,IS,G$@]f!]Sc&z%$_' );
define( 'AUTH_SALT',        'PEt>GU4ZjQ1hl%Q`O0^j*&Ju=YHz06v-X{=pnt{j*mBm[$yQeiyTBa^}/#l%%c:9' );
define( 'SECURE_AUTH_SALT', '$$*$W]-kN|1v6jT&&wmnQqsZmk/);pBz&+*Cg_U,3JD{U!wh.eM`uH^5[d`G@i|`' );
define( 'LOGGED_IN_SALT',   'TICZG2|)_OUg2H&fIylXHN%^C/1Csg,(`&32m(=!iytgAeSbTZJGc3#2tr)CL5,o' );
define( 'NONCE_SALT',       'LpY72NvNV4@Jq).Z-/%z5XKDcxPc=J9w|Q5$t_43CD5M# i?Oq:`)Knyr7k*f;)V' );

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
