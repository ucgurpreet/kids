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
define('DB_NAME', 'kids_guide');

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
define('AUTH_KEY',         'zt]Rm4ssTG%@.Nx|Cnfb1P^u~E{oKd86oL&TsLqHhk`E`&@`d<phZ(Mjl>|F$X@|');
define('SECURE_AUTH_KEY',  'b|NXTym@5A/jJ|F=nN3$h&-O-(?du/bSx[}]gs^P8>HIdhG?>97Y_UJjJV|{)O_H');
define('LOGGED_IN_KEY',    'iJ`DZ[Mi#M^ /JK!`a,?/8qN%^d!%|wCJoZ*A<Jv^A=NjREA$Etm,BM4x@F%8I} ');
define('NONCE_KEY',        'c88=Mhy^L]`33%:-d5~8-v %xpQnTf=KKxVlLHic^$Pe%^*gzmp(3K=:<n{Cb??q');
define('AUTH_SALT',        ';eKIg!Bs;axWIy@uDG/Qk0)|4(7|Z FCe5S{Vsjn.]YT.7!eI>Q~pC#$/vB4:U.e');
define('SECURE_AUTH_SALT', '.G1ooZ`ns9>@6xwbk/@M7p906hIz+{snyJ+k>TY32p=rKRG{9n/p9[?+%Ny>o0&E');
define('LOGGED_IN_SALT',   'tRS$Y(^L77jK:IvUG-3I0J<)^4wk?6-0/[j1}T%-}4cgq(GVfad=_liwt[[H?p3p');
define('NONCE_SALT',       '.h2V|IHz^s`5*[B`4>+ZZb BOL_f>5 c80$w804:1=9T7?n#_UO|uo7RC59pR3&s');

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
