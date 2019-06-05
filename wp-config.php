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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '}QfOEI!MBIr>qz%3G&K&Xu&qd4=#Ao_SkB+}ooZ19.w<? iEw^7D]Z%=BNzV44#T' );
define( 'SECURE_AUTH_KEY',  '>@iOR]-`nVHRs`=z!3::U{td)wm#~ck}`l7TeQ Y}r3gMKPg$N$6<iw>YV:bkW4e' );
define( 'LOGGED_IN_KEY',    'KAVBoGNX*HzZ#O%yyCf?(Y3j$?+Qp2%EbB82(,{NW<fn,ndBn{Kn*SsZ:UaX|cn2' );
define( 'NONCE_KEY',        'Nmdd<)0ox}/)@*)LXkkFL94BPE)bwkaKXIrlVJhAg,:RXQQ)}xtMO5%?,zGsGOc~' );
define( 'AUTH_SALT',        '`!Tz/U)_ZC=(*v&KE02,NomQCp+c@`Uq%wy*+G)XU2?n_]AIZRYxVGFnsFmo9Ce&' );
define( 'SECURE_AUTH_SALT', 'yK;AD8?bbyMr; Ku/RMZQGpb49_^%bvwKBn6b}_vLscbaW>]l^KoPGaOZSA%.8]l' );
define( 'LOGGED_IN_SALT',   '/PamMNel9[fmD0DVc}(9-0>3NCnKw)wTql,8O9$f&PWK|qmHJGS8RM_xvUu%<!xl' );
define( 'NONCE_SALT',       '=9P:seuQBs6j%QN$j[:U`z5{3bw9V|[T!Q4t&:_qceV8D54Rp v%HZiz(Hf7#;W7' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
