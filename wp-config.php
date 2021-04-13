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
define( 'DB_NAME', 'bsit_4c' );

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
define( 'AUTH_KEY',         'fF/*Zh^R@9whvuFr8j8EX3WK>jT5P6&hy[CP_8_uH#yDf56i?/IWg}!P<k}^IIOH' );
define( 'SECURE_AUTH_KEY',  'T%7%Zl]NRN7h]v&N0`sw+]5jLAo&l5:7F4]o6_G*56lWN!L,L9vo]j~j=lplY)7;' );
define( 'LOGGED_IN_KEY',    'y2RiOSE4vi@Xan1%Eru;]E)/_WLT7!RMvQe*[+(0 -vn:T.z:h-`+tXlB:@mj71h' );
define( 'NONCE_KEY',        '=-9Due-Zm,.ZR9^;OK&pKs>jYqTN~n?.y ouQ+.zV]o-fTpebUa?vabX%8L}d)_A' );
define( 'AUTH_SALT',        'oa|^h6;F,cy+T^r@=_s9)4=dM!;Rir=K6[5V2kTCbeGcT.=m/IN:uuWcZL%[ytAS' );
define( 'SECURE_AUTH_SALT', ';>?VMm.wtmmtpInorLONnn{~BptOmcE12^umVwv=37/ZIZW4j<bETnf~D.1oAhSo' );
define( 'LOGGED_IN_SALT',   '2J-19Svk%C$U8U2X[ *L6|kr}Ni<N*B2!Y6%gDI[T~Ly^{n[!o2@r2<$MbEQr?nF' );
define( 'NONCE_SALT',       'p*3HLSa#F(WQR,Ti0(VN1uVIv|g-jN]p}t]:yI9i97`0t^IxmIS5ZO8JmgD3 pCu' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = '4c_';

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
