<?php
define( 'WP_CACHE', true );
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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u787128799_y9tFj' );

/** Database username */
define( 'DB_USER', 'u787128799_5LPib' );

/** Database password */
define( 'DB_PASSWORD', 'MSPWdELvBn' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'LNRWMMj/}wyTV]/s]lWMCl.8p@Q<?i8EN|c1Sr#fG{E_Q=il}usvA};/x.V;v^Yj' );
define( 'SECURE_AUTH_KEY',   '+*yB>^pG},f?(dg2pq];%}+AiDv3s+tzIi/c0RWNZE1(?j%r~W@V#lUdpQ&% vze' );
define( 'LOGGED_IN_KEY',     '-gJmlRdtQ8n%aPr7{Bm~hTkF;3TK)^7w_Pu&Cyg_;f`5E+FplW;lNs!w|>}YWD#$' );
define( 'NONCE_KEY',         'n}WC|Lq)NYo*# RElGZ=QV&pJ|hdAn26Nm~F.!S_pU;}@ LFLX+7J+WpR+WggYoQ' );
define( 'AUTH_SALT',         'pNc^:os 5=wfyf/j`{svqJ}[~;<thp.l{/dTw_Lp`NF]UWTv P}V(:hJjnCyK&JB' );
define( 'SECURE_AUTH_SALT',  'S<fmU;{0[05e3Sqh:>N]wBxZ8OXUS/`oEp/!N14Neb?t7ye0sek5jdx5|swae6L*' );
define( 'LOGGED_IN_SALT',    'lTB!-SH/vdZoSY~2sJ2O/[Gv!}yI.FH$=`#IV)vRao?:5z>}|sI.uPnS_wyS{IO@' );
define( 'NONCE_SALT',        'K;h{+2i*RIRIx?v_!,2)*5Q;H<C66>)?l<^fy+X1#fjcP]cpS)k9wO/FOc+*{NCh' );
define( 'WP_CACHE_KEY_SALT', 'r?tg<AyH[5Klh{hO*wD=-QEpE4!lgc2~w(p-l%g(>k1ORa}lDYxY&&BgyQIk&R.x' );


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


/* Add any custom values between this line and the "stop editing" line. */



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', true );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
