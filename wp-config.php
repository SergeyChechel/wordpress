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
define( 'DB_NAME', 'childhood' );

/** MySQL database username */
define( 'DB_USER', 'child_admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         ';<xj7,c[ {kcXp($SlQ1fy3VktARiAMdp42Y/l9EozYCt&@lTEMT4}6/*/i>*b5$' );
define( 'SECURE_AUTH_KEY',  '&vkt8%6bw!y,2 g#n7UqC|3yOKY1`o~PGy+ZQUuA79Y7h,St0Lzbnw.(Q^YMAg)v' );
define( 'LOGGED_IN_KEY',    'fA^~=DEV$WHMW3@=N]Vh}hd|H1!.<Mu|Y)^?o3Vgg(%F|TEzI[&;;6$;qu<e|!~8' );
define( 'NONCE_KEY',        '}+,os3`bHaB6{`R?Y%ITXa$`M?Z<On@GX96R8$:NDs~>=UFuw/0 zvXlw:?R.u*[' );
define( 'AUTH_SALT',        'cbtX*fx!nL:WrbHtiJ,Y.(_FD `*GMCT]3/]E1DG9xIG#KT2k`OS>I!I)-ba%1>v' );
define( 'SECURE_AUTH_SALT', 'Wk{}dGr6<8Hq&!1mDX~J)5$W4ZcI7/8_}0v)kmH|W-0Kp}c_@}P2>2.1-VOHOfJU' );
define( 'LOGGED_IN_SALT',   '~e[<0|T$32.(Q.c3J:|OVY,83mck*~c;bZ;B%.:|{OhbOTop%EwDAaaCTaOPW.pv' );
define( 'NONCE_SALT',       '6U#|8WO^q|XnzIBJ)UCknLu(8IVoCdM}j^BYP1=;8;llT^uOsJ|kk]D+m=WH7;7y' );

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
