<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define( 'DB_NAME', 'airi' );

/** MySQL database username */
define( 'DB_USER', 'rowshon' );

/** MySQL database password */
define( 'DB_PASSWORD', 'munaamin@10' );

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
define( 'AUTH_KEY',         '@qN;)fb]+/.zBOtqD @u}z.FQpyr^zt#Aj?r.a)7:m`!%&c3ea<XuLQCrQ9t+JOe' );
define( 'SECURE_AUTH_KEY',  '.i2tiK$kesmZwUq^7(<;?9`c.guotJrl8=]vhqn(>q:mQm8&D_?NO|P*X-2qt4v(' );
define( 'LOGGED_IN_KEY',    '=*Tokl={Yyhw$Y3&C/2Ae3+oHfiQG4y;U^yqRu.IZppG&_-Dn7(h.^tATp dRz?|' );
define( 'NONCE_KEY',        'mIGk#?8z;N+UwdTTtu2Uxit.OJ#T)q`jc-$f+o<C?+ 3[Pv)OfYHSBaco|21C3a@' );
define( 'AUTH_SALT',        'N0_Arl%Ug@RsTRCOl2vG87m.WusI>S.._4ioKjz]i=:(&@h*O9Q-oDM2Zgxp;GKP' );
define( 'SECURE_AUTH_SALT', '$8)]_>btc^?N5?/Z-ix&W`m__$@Fij{s,mz*]/^jgvZ08MuyRJ2xr{h=3FW:/n9r' );
define( 'LOGGED_IN_SALT',   'T>gpAWL<+l]9(r[L0_NKvT=:9&0i2HC@O<.s5[O,IXyjR,Z!li>s*u O}y9^8!4w' );
define( 'NONCE_SALT',       '-icQkP43,5 qsvepN&fR=d-#9a.~c{K@sCuY>.tpl z :$zCe)&eT33MV{R&GD43' );

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
