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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'EFb7Nt4%ahjRj0Np]=nh?:Hml:CKV!,uahuX<-F1rrEd0hq&KPBLk?Y9`4$QVSG`' );
define( 'SECURE_AUTH_KEY',  '4F*`{9}q.&6 tHxXUs C.J9;R6&=$B]9-.3r^))I@!u->s?-L7N_][5W$2<d4z_!' );
define( 'LOGGED_IN_KEY',    '2=pOGASp4Zw>Ql{}{X90DX(W$.<0m;kgbEuB.Ad6/JZZzV_6_?-#Ryji/?7oF}r,' );
define( 'NONCE_KEY',        'n9nWH/yfq#.!m{4]O.edh4wQrE6]^5:s|8>~>0qGZTp,z^TP%zaK[x{5&iXy,Y,h' );
define( 'AUTH_SALT',        'KVg4| _77.82l8>:_GYjJvvrp.7kk n)EXb&TQO6 =E;?e,+-IDyy|,$bL_;/.<(' );
define( 'SECURE_AUTH_SALT', '3b#~}<PTkS<dh|i98.e$B~R6-S)~1G#lV;pTG7B/-P72}wB~Ti#cm|h.f:5hPhMy' );
define( 'LOGGED_IN_SALT',   '@]sFO~460&_O%NJ_9{,l5J3;o5D<S{||*@gPO~H!yJN05GrH+t|McM**O2u>X%+G' );
define( 'NONCE_SALT',       '}3(x#bv F(#i<$+<$aOLhW,g1^O0CB28iFhVNqKqUMa2cSP<}qW&&}kSJ0O<yFe{' );

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
