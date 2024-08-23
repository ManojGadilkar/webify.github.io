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
define( 'AUTH_KEY',         'wQ@F{4Lt88S#Ae5rPSsf 9+-6(;6:JE+ExO>en 32l9W& Lh!5Q6ZL (OD*E&Ed_' );
define( 'SECURE_AUTH_KEY',  '-CdO.fImBM&!p`Y>t4U<a`husA(w39^[l%qK;:7V^4*Kdp#a,so_P)8>BOgoLPIz' );
define( 'LOGGED_IN_KEY',    'g0[+Z$4`}Wr/NonUBKd>*u;fu/miWHS<hwO@79uS,U>M01!I++.WipRJ>pvf:Nv5' );
define( 'NONCE_KEY',        'cG-!vr#49oRw#$IN~u/i2%n1&VJfgQmJ]>jrIYOvrg,~}tb}@z )m<>M5f<,]^w/' );
define( 'AUTH_SALT',        'Q_(k&X]IB!}RkMyN#mE1Uxs6`^m&A$8_RUJo5nTY8muxjNDqSH3moj~A~??|*Pf6' );
define( 'SECURE_AUTH_SALT', '3D-4vC,</auL&.]&D ~G|RWuLQ*~f$6XJktCIq1drRK]WX QAv*PY!-]Y&wcY(l@' );
define( 'LOGGED_IN_SALT',   '6,PHl)BCZRY?7`^eW6nDz;u031A_Mh5@KI.6,E&`/lI}w+Q~jz.6csP#buo&gUxh' );
define( 'NONCE_SALT',       'J~8l Cq~ajm` vuae<@$3;|p}P(DDwis`.]Au<}McF^q?n&Zxz=WsA,vX#WB*6$q' );

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

define('FS_METHOD','direct');