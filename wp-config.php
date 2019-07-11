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
define( 'DB_NAME', 'site03' );

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
define( 'AUTH_KEY',         '<e@)7eP$<~D<rwf1ImzjZ TwWBC/d_1bmw^ma,gt+u$A;JG6me;V)XXx0dkfsF9f' );
define( 'SECURE_AUTH_KEY',  '4,(!]!Jk=l3n1fs;b+Va&P8h6&{svo/=P:e)GmB_iqSnBV|.$lb,<g=dZAp,zfc>' );
define( 'LOGGED_IN_KEY',    '=w>?rB1UNq>k{DNs8GXS<%12|kRA1@vDd4C8zNB :Nc/i~<V4/z(J4tsR.FHnpI[' );
define( 'NONCE_KEY',        'jD(EYKrs:_b<sHT&[WONkoO8y6,U#-H%g`|v-a&ZD`]RM;+1eONE@r:/Pk=_F<&[' );
define( 'AUTH_SALT',        ',B)>Bi/t8<D~A$]Vnn :*s7_^{S8suG4+{nXtP:X#V|DQXk(5{1ki/c27N$?rW<I' );
define( 'SECURE_AUTH_SALT', '/Qyi+nEc&*)?@~^]Wv8+)qT2IPtP]woS+/v+9EH8T/f9~(l_e?u(5=.d=*{A,AmY' );
define( 'LOGGED_IN_SALT',   '&#|=gz$81z4,]Aa5NAq!&}zGKKNo|R*N%{wTvv>&!{s+z}IMsgk&,~LI7MBx!)r+' );
define( 'NONCE_SALT',       'l37dH2Iq>-Nrg~WIpFVMRq:%%,*pDKT/I6}V<(2~:d4kXq2WR#X$JtU}v6Jf*N+W' );

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
