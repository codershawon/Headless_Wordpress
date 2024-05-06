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
define( 'AUTH_KEY',          '[-[XqwiR{OWSoWNRa}tMri=Ys7IMRRsFcR[`2 &-Dv+uU:mz?6C(.E$WW68oWkAF' );
define( 'SECURE_AUTH_KEY',   'F?$g,b&=I*0Q9Arh%jycL$u-w^Wl|/{Lfszz@EDV Nqf^r!@pf@er?Gxkisup3z~' );
define( 'LOGGED_IN_KEY',     '&)X-*Qk//0.1;xxt<Z?c]k8_Nz7fqB7R`?}BUulwpsD;!9mb:8tUp,0NgVm$m1SR' );
define( 'NONCE_KEY',         '`F:AWF+0KCPnDf58WbcP3k#72(_eD7>>wEcKW`w6S_)SKZck*-p=B3[ z_?4u*tu' );
define( 'AUTH_SALT',         'Hoj:V0Ti@JoZ>>#c ^<^qv[HC($]X<]5-JK-C}r.;g>W05x?),G^luZ`USOjP0)s' );
define( 'SECURE_AUTH_SALT',  '0d~E_z([:!X_c(2XR8M 3@{QE2[Nbjes!U=eo`|e$%;[sC*pwO)$*ioRczZ$sB%<' );
define( 'LOGGED_IN_SALT',    '(kXp}oKanP]_; mWZCwjvT*@1CyQGWGs@&f)0?GEc/u99hXf%dRejUVVr3)/=Jp.' );
define( 'NONCE_SALT',        'nkQ3SZG4ZN@`0)<e[77^>|$b^PJR9#%}1/n#4}jtaT-FD-A6%`v5/BiH>ad0z[v{' );
define( 'WP_CACHE_KEY_SALT', 'wBPb;6GW=)v%!O7V%]9fw=eq>+8Ny6t8T1%g^BJj:~,SySO0u <zU_4D0d6I|-&v' );


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
