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
define( 'AUTH_KEY',         'x9]y ^umsp>^Tsm=`[,]HW![lVogJs*YEl;k/*.jZoND+a%MW671C&erQ )lWx6^' );
define( 'SECURE_AUTH_KEY',  'HHnk2Lxhn7eNNv!U6=*=+eH Y$@Rs|8`AX#aPsyjem$D7I_~w9CDF%^3O9v[H+~z' );
define( 'LOGGED_IN_KEY',    '1[h>hev[Cc0e{%;J@KLhsE_;-1~%RFjanT<9(o+0vf<Vok4gf#}c`{z8G&4KiTz0' );
define( 'NONCE_KEY',        'xEL30gq7!6o4bW7iU*L0_Y6U|5h`M/={Rk{Gz#Ks-aJ7z+s!rm+U/LU~jH}4`23j' );
define( 'AUTH_SALT',        '?y-T375Npww.j}?bbNdF=:&[o4Xqw!hnlO].{^a+m0K,XGl`qf],HRWtyyzb6TbR' );
define( 'SECURE_AUTH_SALT', 'Oo`ZO4B6f{ZXn0@>_E{ck!N^l3<MJbcm^UtiH7{j7!Ry^P P*!w O^&#!No<S+*=' );
define( 'LOGGED_IN_SALT',   ',W!egi&@R7@L}tw~-_ 1:3Bh63`ezPxE=5B-No!D//gu#BItm>3/As%Hx^|pNN@a' );
define( 'NONCE_SALT',       'j*C2~mEn7z7#I%/Po.}kHgPnI+W6V=7]-gu/9{y,qrf</T0~vrV|1 uy7K7Hy?50' );

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
