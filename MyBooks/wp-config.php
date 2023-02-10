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
define( 'DB_NAME', 'MyBooks' );

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
define( 'AUTH_KEY',         'p<38ArDPl!*,L8F}kyfMQCU4nae1pdU$t9h/qZCA6n?Il6vHzhgwI@Z)CW|vGcXC' );
define( 'SECURE_AUTH_KEY',  '{& yVR)dP<Z2D/wTRRb{&?OR^~(1`K[:5NR3v$k%++3A3`qLkzVLR7xL(ITUFoU_' );
define( 'LOGGED_IN_KEY',    'KLiYH94jdrO[W;52?sPmo2wRa7H-Zvch3A#PhIm/DPOz={rg?ymn[W.1k`c6 /V^' );
define( 'NONCE_KEY',        'MMp~?yV;_}kHOhmr>CLlfZ)@(Y=xT8@>|&5mw:TQ/;`j,7PiWl<R~mVElGTL FOC' );
define( 'AUTH_SALT',        '4L<PtXAVV=5/@>$$MR]&vU<At!5r2yhCa%m84afmqK`D6@@N}FJ:3m<]Z`)5SwnA' );
define( 'SECURE_AUTH_SALT', 'R :Ty4*$f4Gs8D>amT{#1 kmP)6r*eI*wy-3i54uYOXG+Pq&{y*,hC|F{-hCezRL' );
define( 'LOGGED_IN_SALT',   '<1/HXg^aG|aa?>c~0kmw**T5Q8fk92Mfln^gGI0]?.vJxdeZm!VY:+:Ja=SA-.0J' );
define( 'NONCE_SALT',       'TtUS1m/9d*<!Q$5vyDwO4.`[6rT>R8+D%p9ISpqdi&A<}KfRqps1>X/&@QT#gL3~' );

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
