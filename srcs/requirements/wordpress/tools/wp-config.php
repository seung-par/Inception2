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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'seungpar' );

/** Database password */
define( 'DB_PASSWORD', '12345' );

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

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
define('AUTH_KEY',         'kT#yQ>%%=Yj3m@@_]pfL:]T0)AvucZRN#rN2|LPjAv-1JpX5O+?]H-D&s#H^)U.J');
define('SECURE_AUTH_KEY',  'u*vnkjjF/&`Q8XTH9GHMnmsG&ofOEj-9P*1+(PcTcIQ)c%x&|uPwIa6EGyz_iIkd');
define('LOGGED_IN_KEY',    'Qa(Wpn[0+v[pOtw5^HwaGY:VS)fAf[a9(Si||`+B&KjvmyyAzwt5iE*BD*G7]Ecl');
define('NONCE_KEY',        '<,y,Xt:!@83+<QM*j7F-h+0];:m;4K[ZU<|w@,d$x,fR~ |b+S/YjerL!_.?J@Ef');
define('AUTH_SALT',        'u1W&>@E-n ,!B.D8ticyB!?:->TD0CJY9v5uDdTP1{pv1%1G-YH2Kp=0bxoJ/F9:');
define('SECURE_AUTH_SALT', 'li*UZim<#2.fkCc;wU++i,.O{R!UE$k^<r-:o-W~Bo%O&-;c9lY<Kme/}>xD(UAt');
define('LOGGED_IN_SALT',   'A<{a1WV%)YsVh0/yzee`+T6n^z<Lgt++g6]y%dl.EG+WEd;d;H%,pdm@Y|}GwK^_');
define('NONCE_SALT',       'yKM%KT13$|-H;1]B;hI<nYU$_9 bJRa_<nH%)u:|3/s`PYy;Uw%=GY!3HD$L*EeL');

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
	define( 'ABSPATH', '/var/www/html/wordpress' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
