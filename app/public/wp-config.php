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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'uX3W=.7@AR*}62Vkk{>/a?W,OqqwqE8QfM`|wcflzyu^Ezwvk?Ad`s.%O<2uD%4T' );
define( 'SECURE_AUTH_KEY',   '0tcsX#:p&477]{tdDysffow.U5_>oU/gISm5(kt;tDMIv3Z=*[dnU@9/K-46;T0V' );
define( 'LOGGED_IN_KEY',     'l}_/fRyfe=D5$4Xb?OdOz.Y,h$;w;8k`Y)m,g$>C4!.gA!H QFQ2dTA~BA!}I<e^' );
define( 'NONCE_KEY',         'D9`dN_&23:F% 5LRIM)-qTpWwmw8:4-v+*li:,(9M4P]fQK#U>H8{#Dl!)C*w7|W' );
define( 'AUTH_SALT',         '9@d1@hnR0NjiK*YVh+FJFsx#HP~`q_m0oQ`(t}H`z=^x$zg(|^d,F3KlFJcq1tF<' );
define( 'SECURE_AUTH_SALT',  'Tpg5`]J=n82kY;%,>:-{wCfv4(.lDghPkNq2~_F(mB KLAwg`:OWOvwHT)M)xt,l' );
define( 'LOGGED_IN_SALT',    '@Ih-({:pNHuUSM){b~7E+pgvyjF.8c_EJRQm1^2/&0j]f(Fh`Ma`,<aK]gcBO5~v' );
define( 'NONCE_SALT',        'RftAi]JoVw.|t<rG^l(G=oF$emq,Ewz~TB]uep:Vrnj6SI,P4Rt~/mE8w)?uN@-9' );
define( 'WP_CACHE_KEY_SALT', 'bw(3v=m`K84Btf<20{hCdhQ(G?EbM[RX3><n42z|v(W?!7mn@?amF,[H{/[%g%j8' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
