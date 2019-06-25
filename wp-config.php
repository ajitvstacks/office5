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
define('DB_NAME', 'targetli_main');

/** MySQL database username */
define('DB_USER', 'targetli_root');

/** MySQL database password */
define('DB_PASSWORD', 'T@rg3tLi');

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
define('AUTH_KEY',         'G2`bBO,i]xZ88=V09p^NFXn*np;xNmSp3yK0d-ecAQ/]k0xiY$7|lQq>[-@wHI-~');
define('SECURE_AUTH_KEY',  'TC9BhCnoWz%;rp%.mpyX:=$`.0CtyP^1Q3oZ@=lV^ytPnh,ZB!6y5bLc9zsFC2,H');
define('LOGGED_IN_KEY',    '-<3xykqi}{Tau+ZOn$gP/oz9=greyEJPdc7zWLkO~^O6*2jx5,?<!%iE;)tRxjTd');
define('NONCE_KEY',        'T.ueWP(UNg9F}^Jj_{)?EBp<r-Sd0G;;hYfIs{PvQOumR(-[7H0%er$u[JC`4*W$');
define('AUTH_SALT',        'pedN9#/SEaMY^T3[~ev@nr*OK|K?N}n?CPL5]+p*14[v:wuFA{^(`$_OgK&cjZ$-');
define('SECURE_AUTH_SALT', ' U{N;/XsE%gu7,k;:M9n=vNtK]GNe_&E|BIs8=M(`.3,cOf>!ngU3R1oWQ,}[6|5');
define('LOGGED_IN_SALT',   '5CnoB@~Es4,8&#~!IJ3d/SgBNG<,TJ&65(E_SlM7kwth|<Cq[(wtJ6Bi_aMW&v3*');
define('NONCE_SALT',       '7.-iLe?k|fRaKb4)tvc6kG`sVZ7y<jEQl]<Y5tFPNoW0N(NiK@iY`a]qvUkWN}zd');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'tlf_';

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
