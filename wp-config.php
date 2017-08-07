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
define('DB_NAME', 'review');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'yb^zTLii>usf1wsg+F##-%IO*I`j6Q+6NP(xELf!P{Yu*9(?}Wr ziPhM@3rby.v');
define('SECURE_AUTH_KEY',  '(WGjKf3bXmRnJHy7JqD-9BTGIqBdl[JSx&F{<$dX_{RIhgQ+^ke!}ak4)q{yr$>!');
define('LOGGED_IN_KEY',    'i?<F|KX/_gpay8_35;$VW!c<!8;j%TVR(},^RS;T},B8pSFCU$`jnJG!;*(D5X{+');
define('NONCE_KEY',        'dR F*tIngJ1LE+)zE$MnHzC=Hjgnw0$F|&7PLNC&,_$<:_9:.zuJpTY*,U+=-@if');
define('AUTH_SALT',        'K:r8{WFZ( Uz=$%=o>;X*q5lo9M50Spw,~_;_&H-}#&4gf*Cw2Tt1Z;TZ&*xa 3 ');
define('SECURE_AUTH_SALT', 'Q:vc.9/6(|BCVHv?>mr6<1@{b*iET9|UXxBXH0WsNf|haz*Fc|u,j}ufB#Sgb?h|');
define('LOGGED_IN_SALT',   ',e?Nafcf]w+$6:vk*vtChr3-6:Yt%)B*,aD]RVZV.3?*6)nxS.dw^UU`Cw;FfcZh');
define('NONCE_SALT',       'D]jV$k_C@k-!$|`>8njyV28.YO#jOGF(uLpHMBE}+-Iz(Kd|B4WLc3B$nQMIAq18');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
