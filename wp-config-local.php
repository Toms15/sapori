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
define('DB_NAME', 'sapori-catering');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'DX66m,XG7Fldf3oSBl<u<$F>^mVL3-VC8`^Si^FnUK10Pnhl287g4Ho)CFHRV~Cq');
define('SECURE_AUTH_KEY',  'Bn~F^sj4-Eo8JS$/t{KJTn-hpA?.ec@lKSR76,4U`diG^#I]x4hZg[;M,<-{E*|i');
define('LOGGED_IN_KEY',    'eBoFdI1Nh=%U4YhJyqgEefl~z91IpE&ocg1&rD`yPuluqY02~=*-J:uQLr!hG[/:');
define('NONCE_KEY',        'siA]SqY4;=FCfdvrAY/Tn}-l8l:&yMTC/Qj>tXWg0g@]OFnSU;~ 6)sJ%.ZGPf@i');
define('AUTH_SALT',        'w|rlJx#C5c%F5Y&FxJ};zkyF>K[g}dN4bYN//^rYe<vHf%fm}|#BHfQHyfRC#Xh0');
define('SECURE_AUTH_SALT', 'RP;rMBnJJ*#T*E1B?axe~$s|EHnh?5}_<BniPQ$GV:k5w-O#=h6pRH/*gjH[_7Jg');
define('LOGGED_IN_SALT',   'iW|OB$ZW|uu6LDzSoN~p6U2)8 K+rV(VZxdQGtc< =i6zGR]Au)0K>YcEgCa~hv2');
define('NONCE_SALT',       'o~in}8pDlZ~ky{gtcY[z,Y?jBv$@y~>zl=HP5ftYk:;{yyjo+>] {$24nwzW6L?g');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'sc_';

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
define( 'WP_AUTO_UPDATE_CORE', false );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
