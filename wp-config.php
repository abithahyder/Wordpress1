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
define( 'DB_NAME', 'testst' );

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
define( 'AUTH_KEY',         'do^Z8anWgeI^)AVdn-r$rC~!ApK:AFJpok=7LSv^-Zm%>T-Axw@7$xRwlFvN5;8i' );
define( 'SECURE_AUTH_KEY',  'f[(9A:_sl_:S8^/:^eYK.hbjhYw?|aMo>H,9}E[vUY)0o[,Md?iNUr*#>q$B;ve[' );
define( 'LOGGED_IN_KEY',    'O%69|YSoEcK}i?)PHBRbi5-*HZg*af!d!n?%dF*qe,1{cA:h;,kU3:*4*<LbkpZf' );
define( 'NONCE_KEY',        'KS|vx8v-o?:-.8LD+MU545B<h2I.id$R>tbbW3l=%TJOmP:Ep:{F``D`4GS+_Q@_' );
define( 'AUTH_SALT',        'Z]Nxzf7-,SJVK|>7yk0mbQ!-bP$fJqqFK<$x2?cxB>l898,jp@`MRV|qJJ/1K[_3' );
define( 'SECURE_AUTH_SALT', '$/o4sLX t@Fo+^(w=b^XU}za.!H@z=L/n(Q|#oR.}-CxwWUzVXzgDwnfPxEi,{>;' );
define( 'LOGGED_IN_SALT',   'Z{ZV[P5Ynmq9=RR-b{QJy*R63q`<6;l14fA57,vt=f%k05nnSQF Wx]n43%hu#%<' );
define( 'NONCE_SALT',       'Yu20~/JuG1|,H +iSrYs:nm5W?{!b2mI[||9>dGZN:[LCL/@J=}OSA9;:b50ctV*' );

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
