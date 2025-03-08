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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          ']%^yY>Gy_R(5X85I[9&kqA+2 gBUkk m|7EPXJ}>O kcE_2L4i2`2Q-TI[5adcxm' );
define( 'SECURE_AUTH_KEY',   'C901cx34JdMtc<9934YU]0qijRpdy|Vy>>P=zBqo2M~A> pQZQ<Q|9amyZ%^%lr;' );
define( 'LOGGED_IN_KEY',     'wtU[I1JwjQgG~,8={PrMJBaBq~(@(s6eBaX#P6}lm7_EZ/;M-OB>qBe#]L >p<qP' );
define( 'NONCE_KEY',         '*uvAj$$rn*sVZA)lRR%dZi%_lg.oG)aS.&]KECz65emwUs,)-2eI~t6=;iD[qRaO' );
define( 'AUTH_SALT',         '6:=M^FzkM_86wZ|CX8#7vJaN<Q[{s:p6-QPS[P:s!$AhyLjd)9Z{JRbV@(0[s{9C' );
define( 'SECURE_AUTH_SALT',  '5$auoDVJD?ba(PoqE?#VG1xyBw^I<2xF1VjT}<a$X@/>=~:2g4|?!SXn6xA0J6HI' );
define( 'LOGGED_IN_SALT',    '~k IwU]wWwP#7tmo>xywK@u=c8n),[`PMjNQ2_CaaxxPdsRRa{wDq.yy&OR5p3}d' );
define( 'NONCE_SALT',        'V`+^rf/Nb,nh,~B oyR?gHkv-%bdM6]k<]d_uXJx^L[>PnC4[T)|O^nvRf7W_*I,' );
define( 'WP_CACHE_KEY_SALT', 'PzEf5lKqNA-wK^+PF;QA%D1PX#(,CLbzFp}6=Lr%8yrQ9hFC<=mpoGRHETkXMPH,' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
