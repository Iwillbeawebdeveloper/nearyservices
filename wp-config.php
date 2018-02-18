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
define('DB_NAME', 'nearyservices');

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
define('AUTH_KEY',         'w#04dNfoXu/9Dqi]N@ $1]w?fI`U;B[hqkuU(s^W_ISX8c7ADf+/}eu60q%R3>HZ');
define('SECURE_AUTH_KEY',  'KrhpcM[}2eU9E9}*^=b*WFMW?uK`&<1!|J U!AIN]Dkz=*II(Zr>^1^Brlkg[&)8');
define('LOGGED_IN_KEY',    'RhR2^]ti:0n)ZCrpzX@e/Idi4U-={k >+4SVQv`hF?,8NNn#{5ex<Bf*R#b[&H;,');
define('NONCE_KEY',        'X8;@Gv=AA)PDTt*il?vt[tH=f<J|9S;H7|%V(IvL!z6boFv]R7&H#_X=5AkEV/(~');
define('AUTH_SALT',        'R3l ##;6(prC]K+{<A%nu0;b-bs ,iwM[ww0S^J7ai4AZh5G%3q./w}#i}ou=Anx');
define('SECURE_AUTH_SALT', 'n/VF~u!`1Ctv!XQ2{6N465 N{y[DeG.|C`pO,uTTL(DHN,9h_W>?O{5)6nSMO,0M');
define('LOGGED_IN_SALT',   '%odOmF[teUUFh61jPx*u`Nk[3Pwdh`9Hi@u?#N_B,YVcq qS82Nl.TJpulh,#qH<');
define('NONCE_SALT',       'E{Sdrv7Cw_@~F9!0&W{]<Kte/CsXE<k&xE34:#VJ)3!p):d1WmF7_0U_|h?];hKP');

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
