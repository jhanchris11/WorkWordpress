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
define( 'DB_NAME', 'db_ecproduct' );

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
define( 'AUTH_KEY',         '?,W`}Z gE#h(y{>p[X[C/1@G*Nk%k$0X[PY>g~8DMju;2<nj;Xv% |~$JPpQE7?a' );
define( 'SECURE_AUTH_KEY',  '{SVUAhw#6:>bv>Ea~bY#Cf^xQ,z5~e]]  j9.)u=dL<nDEu.S(KeiHrko0rc_,g{' );
define( 'LOGGED_IN_KEY',    '6F7~n]aO{K@*E2(mhx/b@UrKdE9!rnQ&F8h,NPN4K#!|%6T8gY>H[PpRkVEvE}IT' );
define( 'NONCE_KEY',        'NC<1>7Z0msf=;+$>Cu{NE*0`yPW|``F9.!FLvH7E#`yi-Bc;eTiiI8 uX*+Kd:^2' );
define( 'AUTH_SALT',        '~uFv1f^GbL.i5|?bf)4~eX4.FCpaOPQ`:y;b3F;U>9QXa4.+,uL.0Lol4zq31+I ' );
define( 'SECURE_AUTH_SALT', '~*^)M5ynD*$JtV:f#[(,)%C>p6VJ*ln[4f-Y]z#O{Nqa+}i|pVP42VTHA8a|E*&X' );
define( 'LOGGED_IN_SALT',   ']+DP)@9:uG++K>4?:#}_BC*$H*Z7%.<wP=yAcFZB;vk yp<-gew;82@;FyxK5/]A' );
define( 'NONCE_SALT',       'E Inh8!#W5prRK[$*$/=&E7KEKi`>zT9p,4;8Yv,+U-BF.6m~T11q!Aj:iWblB(l' );

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
