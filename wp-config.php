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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', '4swas' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'kOq3+e5xfXSEC+[b?>8h.54_<,CiLB0c5`#Jr)xpcJS>@rI7$d,h^(!`o g&p9g(' );
define( 'SECURE_AUTH_KEY',  '.KAwkCOjUx}9RO0-[G?6ZSiP.L0k4.IMfsO;ybUUu!vP-(@Uk%:cAn%tuaRaxp-1' );
define( 'LOGGED_IN_KEY',    'z??b2If(u$sM)T5qcC@N-}9(vcpp)#mVQE3~?z$<hcjI xpH@uPO3*Ft8:z36, k' );
define( 'NONCE_KEY',        'Jvm]_rJV+w_~7]828pXysM2C cG-ke!Fxn> p?IL!LWNto:,wO7g$r*+BB8IuV.2' );
define( 'AUTH_SALT',        'P8mI:w)7G;Ue;DD:}xY/j]e}Sk3{Ou%|$ap|[x8Cvu7Q&Ch[msAXa=xs|Wt)QgU]' );
define( 'SECURE_AUTH_SALT', 'WbjTDP>JpHuY.p;6_:@=Pa@RV(d(amL`p^C/N9YcPP,5Mozb#EBhU/j(`wHc$J#k' );
define( 'LOGGED_IN_SALT',   '|vJpDi:-r@XXyy)fgf H<qiwa;q|&DP=#cH4P~8l^nVjt1QSyaAQ!jK?1Z</BDjh' );
define( 'NONCE_SALT',       'uZ@:we}<)KE90k{k ysbQKq^PtM_=hy%x9M2arnP`C-VNYEMXC# eAO-zZP(2$5S' );

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
