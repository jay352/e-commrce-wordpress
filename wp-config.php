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
define( 'DB_NAME', 'wordpress1' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'R_ojak5,b+^ UyVE&(3U7(`|)(K9~3e.8]vE:C^FU}wq]$~G{<r#tn#I;Qp&7wCp' );
define( 'SECURE_AUTH_KEY',  '.RrGF8Fsg8/hN/?Yk0k~L.a#n}W+n#KKX$h:0 GDgD!E&Z1Sty;- ALx[^07,}NK' );
define( 'LOGGED_IN_KEY',    'nzz-sbdhM6U=c!KcyGkYHO|kYVoH?%<dmSPe?)<kq1u?|yfL%+HsT(sVs)aJaq;d' );
define( 'NONCE_KEY',        'm/IOpbHO;`z,xlqm!$A$1gsmmA`cs&b0^}&,J1O?%|h6)YY|WJjiv{2^oZnP2([^' );
define( 'AUTH_SALT',        '!KquL,OuxVoCE2pd`k>jo;d4lm!ZunZitnBt+nt:pGYrw;/Nq@|];?N9j:PY@]rB' );
define( 'SECURE_AUTH_SALT', 'Ur>Y]f)v6Cwp6w!$q6rqyZ$N{v>bYlF&R0nxe.vh];*=Mu=Ac!|([P/N=m&-?!wI' );
define( 'LOGGED_IN_SALT',   'DX_LEebpfxMrG*D`Hnf1-w,ODb![AGr+ TF40RH<i5P 2$_/|7}7w{jD,Z;A]8%!' );
define( 'NONCE_SALT',       '|wA9KKX=TtVUZ.NrH`$],LA$9,s2oom>4S:G}<1rPAgoJUztk@?:5%OYZ!+D Icl' );

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
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
