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
define( 'DB_NAME', 'friend' );

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
define( 'AUTH_KEY',         '3FFh#SYQQ9Ut].7yvQFY5uvD]!w#`r_)azI=s,~oLziP u+81wu)KO.4?~a2=QJ$' );
define( 'SECURE_AUTH_KEY',  '^5n,}nxT~TCD?M{omINqs,LkiNBi5Pfek63]@59{A,X`U55lq[so-UE)pvs{hY$+' );
define( 'LOGGED_IN_KEY',    '=M!r`)l:,8:Qk:hc,Wd(|(`Kb]^g%<}%+jyO6bZ3Z;a;:2=bGD;9(ANbU@Xeg44&' );
define( 'NONCE_KEY',        'nucXb>TGnX8r2dDT.l<NteiEar:?f}t(dDBjBbT~owW(zJp0:f4&@7+pq>E$w`l6' );
define( 'AUTH_SALT',        '{TyYD*FD|y$bkxvif~W`t]QaUItq!TA?PNX)iF>&S?Q?k/nA?h<P%=nx<aUD!rZB' );
define( 'SECURE_AUTH_SALT', 'KteY9^-_s/4AuDT&6omLKy/3|tXQ4J<Ye0lq6*za|/}77nDikBswW_@ao }on R`' );
define( 'LOGGED_IN_SALT',   'FRNW[5gWa<zNasL6&,D|3oN#OPs?cJ=OxyS.90WED6ht^p(hZv-|2mx-I5C8)7lN' );
define( 'NONCE_SALT',       '#25R8W[*xK^5e0`SA<Ms]4/~LGRC],}%(oZH}i7D!F}[g`)LIdFwIfyI*S<yG|+*' );

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

define ('WP_DEVELOPMENT_MODE', 'theme');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
