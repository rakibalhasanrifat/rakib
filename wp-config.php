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
define( 'DB_NAME', 'rakib_db' );

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
define( 'AUTH_KEY',         'rHzG3nz<1)85T1#kag0DsyMNLd.6TH]gQ[/ t2x@C#^N~QE7I!rdX3=2k#VALa,2' );
define( 'SECURE_AUTH_KEY',  '$77_<:gltZ(zoP81*O/|<o6C#h8,| hY1@.[0uNWU>DWWxk^>[^,=b6^x<D~ct/,' );
define( 'LOGGED_IN_KEY',    '3+N)w^q(B?0Z6q~3&<-,NS|rFV>2N;j$@^Q=|A#d<iH:ZC-}>0T6jLdK}O|EV;G7' );
define( 'NONCE_KEY',        'Zk9AFekV+aiaV815fvc_xK`2xvzF~Lk]lXfa>S=_X.c[jp;DY!vhum3d05PF8UtS' );
define( 'AUTH_SALT',        '-Q6_8L98&|<!UAd[t_p!-fgWl/ ;LoUHh&Vs#g{d4fP:|jv@qczd4^,}.|n>O&Xr' );
define( 'SECURE_AUTH_SALT', 'R{DN3f8)` QzTJ$UM5qbz@tNp0?C8XnJrM,O?I@9kYiW_.>Za`2g[M&u+A0_RO:v' );
define( 'LOGGED_IN_SALT',   'zV:ux)4];YPBf&YzbA:pG,cY/,:~<|?!@DWF>.7tAlVRgI_{4I$^pv!Ce[{yt4zf' );
define( 'NONCE_SALT',       'ju%yl[1)*X&#&e-R`O^!ji4otc:rdsZ}qR_Xvr(^G(L j%*oI7|P]%5R97DZ=nRY' );

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
