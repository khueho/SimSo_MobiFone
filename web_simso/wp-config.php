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
define( 'DB_NAME', 'simso_mobifone' );

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
define( 'AUTH_KEY',         '^Q.l-I$h8qC*+L_G]_Qd&XN-bUd&7;~aVyNlyJq#%D7$IX62ExUP2~ZaQe> YQVB' );
define( 'SECURE_AUTH_KEY',  '@F1xGS?JRvlU.H*v.<7#%9}0{:6zKXC@O{y7M?4n5_#JV=[XQPin}d?H9WYd%>J5' );
define( 'LOGGED_IN_KEY',    ';`tUp<#@-{HU/v~>}O0?aC!us.lu)oSnAZzp.j?>f|M7Ht{KR{XL+69ks[~;0[sa' );
define( 'NONCE_KEY',        '#E/9sED!=.Ir3S|C8@B_Y*6-Y,yZq6J_135z/me!:;9bIl%@5$ZNL%_Kd}1ql>!b' );
define( 'AUTH_SALT',        'F>o<)|fyQtP*=t99n_J~0obT);d@rC(Zw$>2yon+vY<5C-<b<4Rl;;,&~kJvwj(o' );
define( 'SECURE_AUTH_SALT', 'zSVAA,t )%6iU#@%/]dNr,ZEbRm@768Dy%s{UNZv`1A^Gu.m:trV6g1G,iilDu7~' );
define( 'LOGGED_IN_SALT',   ':z1I^S.C{xAh]l3.4<b @6!NtL#P@Kb5`F)Pt7~<E+Jk,-R#Kf~{yh&1L!dX/g)c' );
define( 'NONCE_SALT',       ' t`~s/X&K^,>Hy)%T5n`|{2b5hR w11,>:]xx_L {A8wD[sd7wp_t2T6DG_Hc4T&' );

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
