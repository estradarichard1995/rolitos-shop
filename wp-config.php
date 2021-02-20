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
define( 'DB_NAME', 'shop' );

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
define( 'AUTH_KEY',         'E`U?M{W!:UzEo8nR#!174bDoe]jcf1;<UsZ<>isw|a@F.0?.4EOi(ld3pb< m_9]' );
define( 'SECURE_AUTH_KEY',  '/jsgb.uJm,-@T`_^kLq%`cwrqkM @7VS6yQpz2cGQ~3<y-zMIr.;x^!g%?_ElKTi' );
define( 'LOGGED_IN_KEY',    'Np}vR$L;j^H*vq;R>}`PTZn~uD5y;|pL?!&ck`<o*}^=Ya|v,dkV:8_2/Dhf(S2.' );
define( 'NONCE_KEY',        'q~TmdkGfz?Nrn#G17F5PireCL(&$eZC$?WY*_]Z(Z,yzUUC61H0fSctPbN3{w1Xz' );
define( 'AUTH_SALT',        'KFO*r;2p9raU,]$2>l#1_10L_3BD3sW.iRVyr;!EbUV:#d+KuKWlD @]8k.:g^h*' );
define( 'SECURE_AUTH_SALT', 'nL6i}%_5k?f@,4/1Zf=0FQ]{2UU2$xkkt6!h}fgwG.*YR#[IE0]w9fmKJ[BL8{X(' );
define( 'LOGGED_IN_SALT',   'PIeEw.v=X@)[>F#GsI|8w0!ArND:Pim7$(Z.sTyU3_ftm&?gY~dSnOAe6I=NsF3y' );
define( 'NONCE_SALT',       '/A/a/Qt1FT6|j?T:6bO.Jc6mC2}7n(AR=xRQZ}[mJ4OjeUw$w-Sau!rapr87I86!' );

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
