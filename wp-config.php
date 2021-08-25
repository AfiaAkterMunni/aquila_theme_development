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
define( 'DB_NAME', 'aquila' );

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
define( 'AUTH_KEY',         '9TzlT*s<z~>eEL+u=)_KY*zG97koa<WWK!b`nmeJc0%{N=u[0}#gL?caf[Hu$YRL' );
define( 'SECURE_AUTH_KEY',  'gV4rEo/C{_6y60J[?tfrh&7RvUo?lEM6wG>>lza4-Y;@zCeGLmc.Pk<,W>+>ZJxq' );
define( 'LOGGED_IN_KEY',    'y),9,{[ZReJ8kE=;GqXx%NgTUm[XO,WUAlf]/j1z1t,;x0)Go0-}rwASNWyTUJf;' );
define( 'NONCE_KEY',        ' Gx;:2CshHHvrm)$xxiyCRP.B}N_.!PI)`:o,poP`b`0nX=hpw[rRW06Hxa15<H<' );
define( 'AUTH_SALT',        '~CO{D9)!Wr(!4UodNq!jJYbq./j$OlUPxHbP_8|vM4tv)>x,(mJn=EOMQZ*oA#>:' );
define( 'SECURE_AUTH_SALT', 'XuwTjHdVHn>x,Z7T,C>*VQTv{5h {V{C4fI;k3rTdAZMg$WRa4 yXj!ZY($@>>CF' );
define( 'LOGGED_IN_SALT',   'M[gsQ<Bz_%;l*_d&mif1~OKjZhn-d9]F1V`e@C:SdKFD-9=_aq-]XppPGi9!kW*;' );
define( 'NONCE_SALT',       '&x/V_fJ;l:KIw<csc]FI@] {fiDgGO+5bxntb9YguoW([=M?IOr5)GmpshWeg1]~' );

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
