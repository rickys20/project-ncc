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
define( 'DB_NAME', 'ncc' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'kPCWIBZqe~mcF^2|yCgA+/MKXl*`T=M8tN`iBDSk.vAn{^+?fZfr-af]8/{v@R d' );
define( 'SECURE_AUTH_KEY',  '#B8vL]tzf*BZL@AGXTw3.9IwC=Z<C!FpHjx%0Lk8zPY,Qa5|;PpDXqw[SNn`;PC1' );
define( 'LOGGED_IN_KEY',    'q+GK Rrb.lc@M?O5Rb>5*@,MsYY|r%!|!Pcienqn5H)/0_V5h4+pT~Zo=o| t;<&' );
define( 'NONCE_KEY',        'Uan${:e6%&~QXLo$g(QKSnSs#/aXEWZYf-o]>&/ElNi;7|2xnzxYQ%39qJr;R0KN' );
define( 'AUTH_SALT',        'Sl5LjCXpPWN7bi5nI}Gr #XS`h`thLd##_R!=OjZwS%t$tH~e%;E!Tv,qDu=*N=d' );
define( 'SECURE_AUTH_SALT', '[AjM&WcKcuE]pNYq%%=?A1bA,|)&sb{ZRa;mD={3F rkvqEd{uMoX!t!%|s~[S<C' );
define( 'LOGGED_IN_SALT',   'B$h/>IfiB5/YX{v?%:+z):UWW~_p~k*SJCWCE:~&EA+F/~-Vk60&qyZq.r).~;|!' );
define( 'NONCE_SALT',       '0Ml$PhdAyn4JZ^!4U$B5~?n3x.i7/K iQ.|)j.=Y2sHt{SL>:ZNG&H|&`m6$P+hR' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
