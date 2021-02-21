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
define( 'DB_NAME', 'shoes' );

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
define( 'AUTH_KEY',         'xL2WgKYzfFuUShL{.pSwpp$8@QA)O4XA$(jxwQRNdaBs`|vVA=qMhUAbh:$~+s0@' );
define( 'SECURE_AUTH_KEY',  'daBh.$Ul;S@FA?XyY~PMMi,@9qO^o: o`Npy1 0524G*0p+jMKwHODy4TzAq5+BC' );
define( 'LOGGED_IN_KEY',    'M!XTLi`}@XXH4Lq3yqXXj|lw<H,vKe6lWpHU5!{oP.cStM$5]25NgU1zV.0:1F30' );
define( 'NONCE_KEY',        'zFk-u=4*Z9|]jhwzVA;X8U^*{48/mDL|P36/ZF&|gTnQ]Eer2.!o`O+#+oEb eI_' );
define( 'AUTH_SALT',        'YL#bqx)3$un8Y~h!bJo+%&y/xHTXGK84Kta|Wt#Mn*^#O3KXu&J`hVXcOQEM,5mb' );
define( 'SECURE_AUTH_SALT', '<%EVZFBTYo{wM?C$_fX~0pM:}W$5vy}!6Uo/$ei KKXsm7efQ!geOpThT.V8(C @' );
define( 'LOGGED_IN_SALT',   'XQKQ2 N86_,q5Bh8^GY|_Y3oUcJ<B*&Q`&QKf1#`2$9K_%(>u_Ba[A|WborK~V{C' );
define( 'NONCE_SALT',       '8E<seJ=h`wT5EA46`l`B+~}:1dC&[&|ihaK`tPHA)~8&_s_(wxO@Id#9k&.z}mc{' );

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
