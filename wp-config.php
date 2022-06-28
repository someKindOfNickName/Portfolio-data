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
define( 'DB_NAME', 'animated-portfolio-data' );

/** Database username */
define( 'DB_USER', 'lavrenov-admin' );

/** Database password */
define( 'DB_PASSWORD', 'lghadsjHGGJHywdehkjUH6451KygdUgjygvjgvadDKUHASDKh' );

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
define( 'AUTH_KEY',         'w[Hur #|G{|`#sQ4B#{I^=>bn=t*zGUmvj|;`a>dP:rPCa7gpY.-j:AQBOqD~qr1' );
define( 'SECURE_AUTH_KEY',  '>$4#&*Sk!bsr532+]1{_uloaPu!5vT@.3d@F7r$qeJV*ql@]AJ ;;D7wG,(yj+$V' );
define( 'LOGGED_IN_KEY',    '4T!^L|43ecj5r`AoU9&?o1NzQOqPV?|/`c_sqswu/8./7)s%8G}pMn@B9>Qe-I^D' );
define( 'NONCE_KEY',        'KQ^J=-xy)acT|s+QK6)5>qt!@3{116O5Eq:z_JeWbP>yLgCR<zVkB3pC>,1bcqoZ' );
define( 'AUTH_SALT',        'sx5zUJw7,ZHM{zPT^iue0/xOyy,Fgmi{~QKp=0cJ!_5U(OIvV[{MX5O@K&Qj#r;a' );
define( 'SECURE_AUTH_SALT', '{ASx=wrX,`z6%9-;xyMkY^0vhv.J=vhIR$n4ALvcw*^AxysZF6s]{_?XD>%J&2>)' );
define( 'LOGGED_IN_SALT',   'nvRuo#f`jJeJrLQLcY<?2.y~p.0SLd-R9F|:J3QKoZFa,oP0p~/;t_!#Q).cn-[[' );
define( 'NONCE_SALT',       '@@GBe?9E:*4HQI~Mvb!?D CpwqPZE=_#G`6qij>_(7um&6<w:moJ|WlB9[X5SvVK' );

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
