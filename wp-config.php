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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sh_wordpress' );

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
define( 'AUTH_KEY',         'g6X%lXsiMszFBC&j`!@KR@ wTSlnbE6iW#dz=V+?5ikAcq3/+Z5bz;<ubPsXkv?c' );
define( 'SECURE_AUTH_KEY',  'BFk.R(gEICtLL*-G)p[)Kk~)=$4Z0hh.<TY*qJY_$}s~BTvKbb6m /]3rIWg@0[e' );
define( 'LOGGED_IN_KEY',    '[;UQ8Ty3s1kJ7{b:l|g`g{2K_je&r9amg}JP(WCgYpD~*W.<dXF$PjzvXfd /j u' );
define( 'NONCE_KEY',        'H:].y2&FN^?6kFK$^JAfVXtPbb_N{iNKZX0q7gAHSC&ZOBX*RCNEF]gZE&3PY*CI' );
define( 'AUTH_SALT',        'q+:kc%BM j[Ez)Qz4<WniM^,(Bx<uskbCN1EDUQ60GRb]D|5yh:{X2`i:lXMh(o0' );
define( 'SECURE_AUTH_SALT', '<ks&tlo-x*Mw+9%N1w=d[=VYNn=PT_jRMqq$$bNGy]@!_7yQBr{wD1}Jh`UV]8~~' );
define( 'LOGGED_IN_SALT',   'J})F,!!.0uAAy.`sHNU`=w8t?X(QKI|ueB1$57]f_yL,~2Q~NiS(vl@ny5~E4ajg' );
define( 'NONCE_SALT',       'IGM,qfqvqe|.E[IJHJV[v.tz ~:p8[Ti-nZ!hn,!L9`=Z4ZMo8 ORY~hfzvruSkg' );

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
