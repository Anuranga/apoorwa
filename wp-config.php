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
define( 'DB_NAME', 'apoorwa' );

/** MySQL database username */
define( 'DB_USER', 'jayan' );

/** MySQL database password */
define( 'DB_PASSWORD', '123' );

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
define( 'AUTH_KEY',         '&Kx`R:Z.e,UkBV0D^LD^}%[T}-F(KzGYgw}uDAQFI:<Yq_.u-#(7|;>}H`(HAmUP' );
define( 'SECURE_AUTH_KEY',  'I4 0fPXi+aWB_bKmp0L=p[z6l?xo/O6/R!xb9CFA5LgC:]X/tJh.X)`mOXC61Bze' );
define( 'LOGGED_IN_KEY',    'Er2[VXoBaQM0{(3E||EM3ix$9G[PZut%pl4,1pTi*(i)TRJKc*`Wi*GAK>bt+R`g' );
define( 'NONCE_KEY',        '2BBU8GmLhLdth;9h.BC&A|f!MJ#OL*)v]1_M2>=[Ng:O_~S^<Tt/[/<[Dlao]t@`' );
define( 'AUTH_SALT',        '*e sB;I ocv;b$}IWsih2xpA2gFZ?III@lp$kUcp]r^6gIB7>KYl~2oBNwD|&_@U' );
define( 'SECURE_AUTH_SALT', '{SJlj!&.y0h<}W7%ugo9gQ@qwHMgjH28vK._<P/896*Dt;R6U{Pqa@6_ymU&YQgK' );
define( 'LOGGED_IN_SALT',   'Ho#InH-HboP?.PTuJ)dL6BzY_Ea}`!/)?5:83BvCps=L7.Ir #9{JDHhBMfHY539' );
define( 'NONCE_SALT',       'Bh4?ax1k-,y.&=VYcTx)K={<7i(8kGHcT:*^sD_NCT0l/j9cGJO*ju)&13%(>Y:~' );

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
