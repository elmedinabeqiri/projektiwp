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
define( 'DB_NAME', 'projektiwp' );

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
define( 'AUTH_KEY',         'n]eRV*3!<XOMVp^[xpmy-0pQzg%/V@;_MQVaBzvd4l +}d5p&ts}(xE9A&)b%*Kw' );
define( 'SECURE_AUTH_KEY',  'z&ynx7hw_M{#mcm42E{8;X9453]uz$D #Cie4Iw0FUm#cqIKJ#nzYDL(h5A}fVqX' );
define( 'LOGGED_IN_KEY',    'f9[>?e<z2NDq*eOyD?BH?2q?XC]y(>$2ORJ^)_8Uj!;a&8e)t-Sl0oqg;HN]vCA+' );
define( 'NONCE_KEY',        'o4(`tEUn+iau],8m^7V1N?j[JRkp9{q;3P#ZH;mFr/<yV:An&M{F_<mb}7(PGJ=u' );
define( 'AUTH_SALT',        ',RMcf9H|eA4p:OTQV+B9I5&LE_]&wdSymIhx{YIBTOC_`2o*i1d #!R!8w+nkUOJ' );
define( 'SECURE_AUTH_SALT', '=E@85<qsq7T_AE_N_-A>B!P.c}X{kpB@*LO>Z+VT38odV:$Y?,~^]_&t&^IxI+rs' );
define( 'LOGGED_IN_SALT',   'z{m0UbR7P<f|XaK(Yvy7cM}*2IwXm?%u+(gRqx_]H71:4YYYiT:y^fsyp1TVow%o' );
define( 'NONCE_SALT',       'K,coevix5peOt^rWt,Sw7.k,M3;]eQzsMcPJ%g:}.^E|00pHyOl?Y5Hh{rz*Z?BA' );

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
