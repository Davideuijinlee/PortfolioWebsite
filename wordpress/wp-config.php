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
define( 'DB_PASSWORD', 'passwordcrunchchrisusbportkenneth' );

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
define( 'AUTH_KEY',         ';Abyo9f7ZpVF2Rf6LcS`<yw`fy5jk{sf&=Y1FZ *PPOy!.<O}|yZ0po!$]#|hy??' );
define( 'SECURE_AUTH_KEY',  ',^$jAqq_g^@kZs1t+lDs$*IZ7=?3~<oug^rB8BoI,X-nS[$~]3cdO4Ge{lAqnjpe' );
define( 'LOGGED_IN_KEY',    '6EzTqZ}m6ps5CxI.`lz!ncN-W8|6z1YR`p<>0#t_2xcfyz0xp2J:0xT>E-83rB+1' );
define( 'NONCE_KEY',        '*fD6sa_KauLbS$ugT8vxp__th+tCyTQ=J!ubIZg;?&g~;JeU(cN)So`RRZ<&/uAa' );
define( 'AUTH_SALT',        'w1BqcLqLc}vw8n}D;gb)n{)f8>m[Rc-hW2 *Jau!nSy-cS@S>0!f47~!A4]<?KBn' );
define( 'SECURE_AUTH_SALT', ':GXfgIp)LyCKwX)!Z2|>=Fu?58]GNjE`RZW,t/W%RF]J?NgL;i%Vtig[Ri5*i8Lg' );
define( 'LOGGED_IN_SALT',   '>Ww9ySIhO]4WarLw,C#|}vBrqei)59?jT{NPtNU_u:u9yx/,6d$,EnbSZOaIin0<' );
define( 'NONCE_SALT',       'JG6@Q1%Ff3GMg;Jb60Xy}3<73(<;ol,pQmL/+{+;(JWFg|6/b{{#VuVdKE$VBvib' );

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
