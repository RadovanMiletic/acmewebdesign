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
define( 'DB_NAME', 'acmewebdesign' );

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
define( 'AUTH_KEY',         ']{vcd @9UvS|`?^@FIRosx:izS}8cSIH9[kt]wC9wk{TG%<w`ijSbRSWAw1|d(};' );
define( 'SECURE_AUTH_KEY',  'm?NLur$84jp7+!7.&TubKZ@;t}3X6I8R7b|@pQ w$ca3kr/ttSu@1)^^w]`9F>HC' );
define( 'LOGGED_IN_KEY',    'V)m]Nbm{`s_Vi d=XUT63@[}&iReKEhNIV90hiiAdeL0LW705 )l_N/4=pItHC5W' );
define( 'NONCE_KEY',        'hD4t7W o2W`,94bz^4E;fPVf+[DP Yf J;^PP67^I^=:tm|<d 96R}O9m(]Xeeub' );
define( 'AUTH_SALT',        '}wXLbR&=(><,>CB)#<N(#ewYOb>U)28TMpw @B3x$kV(.:?Fu9c Ma=dhS9E^m!r' );
define( 'SECURE_AUTH_SALT', 'GTNSKy7I#*}?Ta@E%l9#1WF` `nfSNCfSY-DZyHiCjJtsL1.wmvq(y< q~=AGw.Q' );
define( 'LOGGED_IN_SALT',   'wol(Qfd`r/:E<yBiU^0DXRzav>^ayyBO0-nxuq(UO#?S[~]bgxMFr!96B]^-tq08' );
define( 'NONCE_SALT',       'F# %_ma3R9dS18C?xciFDq)P(kHcl8_5tkNT*1ECZqGJh9DyqJyTV6/tPUJk?`UM' );

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
