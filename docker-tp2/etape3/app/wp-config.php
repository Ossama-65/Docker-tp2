<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'data_new' );

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
define( 'AUTH_KEY',         'fD.S`l}N:7n}C`ND{AH4rpojNAYq]#LuRbGP7$o_(grDMbp,%%o&HjvckSw#^]T=' );
define( 'SECURE_AUTH_KEY',  ':U2bO?~`0~hm}m5T+T]#tg.8#_*2 L+$//<77`+*~<=PJ13^ _r>pU_&`.w^p74k' );
define( 'LOGGED_IN_KEY',    'v[y]9:~}~~>BkhfHZ>{Zwu2U{z7FiNfMrE08DoxI9;>{ _f=LN5&;ne|S<-W0yTu' );
define( 'NONCE_KEY',        'l#l01ZZ_MOy^bw?ggw*%]CU`JH=?UiRXNX+^+#ei#Bx2b90VxLy~yA/,_]18+*%I' );
define( 'AUTH_SALT',        '<cgL*q@+vTRwrfMU1F@ruGwakf6kdWm]J~`BMJg?}23A$^mtgx>ljD}/I>6W;GG*' );
define( 'SECURE_AUTH_SALT', 'YuGM~>dZo_s}[1:{$k.Ph]Y[F:v;8PpUji 12X4[A&+2BJMNR}N*~=o6A*pS-:2<' );
define( 'LOGGED_IN_SALT',   '7C=YxvG<goY 1Tfe9TrjM6)>XqNA_pWF +ZDs3;#% kO!UsVQQoBm_wF=V?x)n@-' );
define( 'NONCE_SALT',       '0vm@NuKSuzClMPpi0#2/iA$Cv6nF#ofdiJ4kH2F<y]uB>a+WZMxG#_~^LKBHk<rZ' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
