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
define( 'DB_NAME', 'wordpressdb' );

/** MySQL database username */
define( 'DB_USER', 'wordpressuser' );

/** MySQL database password */
define( 'DB_PASSWORD', 'P@ssword1' );

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
define( 'AUTH_KEY',         '=#hKdi8SYsC0m)}oHO7e?_+:}2&}hYc(0W|i#6?</jC.Aj5I;&4_pbW#}YDI=xHc' );
define( 'SECURE_AUTH_KEY',  '{.Sw?_xx.nFT@{%9&B6Op@Ze-ZfN@o2$X0l<x7ZflPlL1Dx{AQj(MCAE]f[0K;0e' );
define( 'LOGGED_IN_KEY',    'lkqx&WoOU}%YyQw%pfr7K;?>gL16e|7@Jn^qe%Fr!!9(N[`C&Z~NNPR ?W7K^6rf' );
define( 'NONCE_KEY',        'C^{7 d#fd4nKxN3D^bogF?$v).[mVi{3;~O<BjXn-!/ ~Rsc[a`;)/?Chx]eT&Qp' );
define( 'AUTH_SALT',        'UzW-.cj1SV1(QCTgZQ;wjWbL^OTOmO{>%/{HWR{O7m|X{R3U;>U9lPpGXpgYF3cF' );
define( 'SECURE_AUTH_SALT', '=m>OQoENbG^iy`Ql`[+?;*&b_>S]?id!I20I~=HKc/a02i$s;MAZr^fXlUc[x}e]' );
define( 'LOGGED_IN_SALT',   'a>/)5P~DF0;5ecqL 20~uhC1-P-]?I=(N:{|Rt56(qe1vv$#qTzsy=$Wd*>fpDr/' );
define( 'NONCE_SALT',       'nFmx#s]IT_g$H?679J*FFsiCn&{1fgDRV#}=T|M(%G{S6>p<+e5xWA}Hbv}cEP e' );

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
