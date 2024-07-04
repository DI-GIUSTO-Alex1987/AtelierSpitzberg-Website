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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'atelierduSpitzberg_Website' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'Au+BBLh|1c+k7^(Nqv_.aDh$yaVa{OAW.WY(%~s*[7<$b_kxfIP$M8tm>.Qd3!0[' );
define( 'SECURE_AUTH_KEY',  'Rn}<CFR3Yw+*v:~B%s{<AQVG#> yVUT9dR3)5ADZK|1ZLV,|8r7HXkMh84ro=]`R' );
define( 'LOGGED_IN_KEY',    'sa63bpp-:QS0^&8^Iab^e9W$w/V/,dReVcawxwHeiNZ4mEd53Y;B1c5gbrf*)S(~' );
define( 'NONCE_KEY',        '}M-m$ON,~Uz^&N6?hFU$g|#!`BWq+HMUFREU){]{1>mdF</*PR5y;]vH0Au#uGKx' );
define( 'AUTH_SALT',        'BGK%twA{%[M5tW)>Kb>U*8RN]sbZ~5DF|}I=r7P5CaH+(AI<!HHm&+J[!&g)hP&S' );
define( 'SECURE_AUTH_SALT', 'A5N1U&,Mtt,7gdx)z%:3@0i: }MtkzlY}9t/@@)3(rUfR>19vQ+^Q`~FyNz>>(_)' );
define( 'LOGGED_IN_SALT',   '8t09m6ui-|Ac TjNV`x<KjCf;U$8.E35(qxe?sl-b[b4|_mgyRCpP)-Y[0-G>Ojh' );
define( 'NONCE_SALT',       'KfHiz=^kkfT}PgJjlN-0Gu[=t4q$MBu&b$G$[ACK,*Z$(<[8K`$0Ri/F5vMhJm$Z' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
