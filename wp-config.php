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
define('DB_NAME', 'wp_bhs');

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
define('AUTH_KEY',         '9l&i:jm;o5a3HtQhRC,~QXl ;Yb, I/fZd)Q]>z)3w) PYI+lqC{_Rz38#5&1zqf');
define('SECURE_AUTH_KEY',  '+C>lJKQlg{:RRbA16TX7uOFG;f*XAws;2RhT(1l|<ih=k#*%76_*B&ud~4f{,[N0');
define('LOGGED_IN_KEY',    'lHPZS3-dMr|>C$g-,G-}_N&u P5&%CmSYH-^8+4e.~iApm>yT++}2pB,%U*G+Mk?');
define('NONCE_KEY',        'kJvK*{=jZtyT_WqY@| oa;f54o<xO^6/~mEo-YQy`/Ji:J>s7|vzPFZg$HgMFm*)');
define('AUTH_SALT',        ']>ao!E5Y=MjVaPIg2d|Uca%TJ=^3FPcbH#kmd`.S+*!q#O|spIaWvz@xr-XN(S^}');
define('SECURE_AUTH_SALT', '0Etw:IAVF7R=%OKW~K>(9~F$:-30T/gsa{Dh<>4&?.}K:,>:<?N!-lV&]M,yFw#6');
define('LOGGED_IN_SALT',   'jN1&I14o=j)E9-5.,]rX1&vt=09$n$KSB?&o;m$$ko-OVnl[Nn6B`@5@W~}*nl#C');
define('NONCE_SALT',       '&1DwSY7$4 RX&$GiF9MZ$w]][1F2i*]G|<vV+Qrmix] ;maHbGLcck>8I:E=FPcn');

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

define( 'WP_DEBUG', true );
define( 'WP_DEBUG', false );
