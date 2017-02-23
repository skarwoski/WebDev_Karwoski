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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wpadmin');

/** MySQL database password */
define('DB_PASSWORD', 'wppass');

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
define('AUTH_KEY',         '68>,R8!o8Q*Nh)|B4yY`ZvxZ&`aCJFI3@v42(7Mu[9G+x#QY=}Mqa7z+9T]U,hCz');
define('SECURE_AUTH_KEY',  '`HUAUa63CA<&43S20/_VCzj(/YUl kb.(4o&YW/}fya5-1UQ~zmyO:n|ar!2^#XF');
define('LOGGED_IN_KEY',    'X5#Ah@{FZkT&m!JEoi[#)?WR@`?NU>g^2]s,J!j7^149ITY]*R6Sk!UPxP[g9Me[');
define('NONCE_KEY',        '.wmk%Eyk% gz:?6b. &B6yC$(;y/e{EbLvo6%xRKE%pZ=Q~hLi0#cuTjaXq[MJ:U');
define('AUTH_SALT',        'Po(tS=3eg-_7w :|zAG!g.,2jRN_]pYaTI90em_*n[+Xhx5k{Rav)V]=G7})eFSm');
define('SECURE_AUTH_SALT', '?%}Z^T-,#gQp_:x<JNC,}@XI)Kbx$2d+O=[*P  *t6|b)-3=P9w2O[JWPBp;rlU.');
define('LOGGED_IN_SALT',   'bngG<?Z$4J:T&tS(>O(me}|#KAl0$Yej ;=Z/?[=(rX<n`BCVdKez</Fr|^16GrU');
define('NONCE_SALT',       'B5jC_&$K,zn:$(KxzTamd:%2&R(K%U)@J-VJ0U?3KXXbuqI<{g#i7:zh5d>rVX]]');

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

define('WP_ALLOW_REPAIR', true);


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
