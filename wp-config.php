<?php
define( 'WP_CACHE', true );

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
define( 'DB_NAME', 'sportwearweb' );

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
define( 'AUTH_KEY',         'Sh)/zS_e9@eSa-b !UgnUWEALKxx>0bp>varxG)3PlP+7kn5Y?P<b;ZIqJ{gyF<~' );
define( 'SECURE_AUTH_KEY',  '1z>qC}gP,eTr>:I0EK[di`t7P8}NK#$}5`JxP2m0}2Qiak&oqCE4P_#&i 5/:8T-' );
define( 'LOGGED_IN_KEY',    'kmu&{Mcn/Pn+,6{EonqH;XLg-9#|qk3?0b)5jS8MR>P*jU,Qe#ArL0wz_|x]xI#+' );
define( 'NONCE_KEY',        'YZgINHwiV|@ )e:&oF,FE!40(b+X0},`oh<Av[>PMn)kD#CFI@RQyx}GLJP%s $o' );
define( 'AUTH_SALT',        'XMHV 44,LKI-~Mk&I*#cq[wfTO-qp&#;Bwj8J>o`|nzChK.?=tzi=c=LL,/lAXZ[' );
define( 'SECURE_AUTH_SALT', '/62<7Os`+DHRoNYr28qV[%v`{FXmbMgQy)?{rmrLV#IsnP/u(DSb}ve@Hu,ac#R0' );
define( 'LOGGED_IN_SALT',   '7MSdf1AuAhL5EWEZ0&8%uIJqv.2VTws<c`6WSvJk* bkU:.:/8Hq+o@z3aIcqX! ' );
define( 'NONCE_SALT',       '0]_9%y WW>_Q}e{[3d)Ny[hUY/~H>9^4Nc=i=X{9zC~kfep@:7]U6~m^_$O)GHbV' );

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
