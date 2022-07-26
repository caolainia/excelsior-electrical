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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'excelsior_electrical' );

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
define( 'AUTH_KEY',         '2dbrW1tQqDhV^orypCr!cw7ey` P)Q)Tk{:1=3#k}|wmand^mkZqPgoatj`[(bWg' );
define( 'SECURE_AUTH_KEY',  '7_6e;q#]}T.(,%u`YY%v<]o#7EDRAL<Asoh@QQ[*5xHa9[O-7a,$bh^m=nVK!+#0' );
define( 'LOGGED_IN_KEY',    'vIxWag/G]klWkj3zbu5 >%7PPHI,B4kS#SgVLqK37{k52|;.vVEM6r,Mh+ptFX+u' );
define( 'NONCE_KEY',        '!|krTleLE!D{8 aD;9csqC9ERTtHj-H{4*#xhi4xuB44upGcoO!tM9LWOS>Ilv-+' );
define( 'AUTH_SALT',        ' ;3O%$8_#}saA9HW=KGHD(;g0W)v4s8HIFBz#XUqC@wGnHWT mTC{gz2qB:0TQn)' );
define( 'SECURE_AUTH_SALT', 't*Rvd1,N&I)W=bZ.t2h<c]`g9GW_y3!4PyvX%~[oJm;:,=<5361itF{<_vPbJwE+' );
define( 'LOGGED_IN_SALT',   'gb0+GY#%R@W|P=R&UrcHX9md_C/l39GU*DjW4f,?U3)f}/,U~w?c#1o*rf*B70n5' );
define( 'NONCE_SALT',       'Gbp5Rk}RD+rcvj6,Ih.*E%Vlf1c8o$#n|iYZ|hJPE0_Ii_6^=BJXVyDEZP~v(L^g' );

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
