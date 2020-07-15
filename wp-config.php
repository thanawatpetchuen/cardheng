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
define( 'DB_NAME', 'cardheng' );

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
define( 'AUTH_KEY',         ':?[lVOj[`?!8(y!rkSCLYo~x:D:6;A&KKZT(njUUk;=M;P*M_A[t#tATJ/wKqW&<' );
define( 'SECURE_AUTH_KEY',  'Y/e*#M.k]VGEj$#kV;*.v3QD+0aN=XK,Nuc>,4*RRk:08Bd{:]Fn`*=qTbhjnV~P' );
define( 'LOGGED_IN_KEY',    'TDHg)JW)=@yPYDKqd!q@92d0ZAHu)T%x@gJW:Q}5AKhg6Hthoj!jsnssS.?H6k#w' );
define( 'NONCE_KEY',        '>?4l)_;ituXU::(3MRv#bxMOE8BJPKM5w2k/Zb0mZ&)^U$.DdwJ,+=t=EMp[.9YQ' );
define( 'AUTH_SALT',        ') XWW3g@ bPtm@+Vm[{XA-[ciL&&|[,)}DzL[o>C*Wab!A22CaF;FGF`}V=aKc+~' );
define( 'SECURE_AUTH_SALT', 'spkR<bA{|0y0#Y,ua$A(kk#_n-p.WDb5Ypiw}G^[rNa<W[[j:nZK:YAOr@Uk4];~' );
define( 'LOGGED_IN_SALT',   '2<S^+G>_X>l375#L<W19RQjZ<0;!#N*xPNeHF*iw}^yiQbO9VG3TQ=sMDmjNMLXs' );
define( 'NONCE_SALT',       'lN6BOn6c}{,}py@Xx8&:el?r^Tf5wu]9(7qr9S_sXyr?(_G%H=.+UXFR_!h}e)t0' );

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
