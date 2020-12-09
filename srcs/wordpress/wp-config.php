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
define( 'DB_NAME', 'yhebbat' );

/** MySQL database username */
define( 'DB_USER', 'yhebbat' );

/** MySQL database password */
define( 'DB_PASSWORD', '1234' );

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
define( 'AUTH_KEY',         'v_S=@xj*4uO3+b./v1L0n|qXzQ@[}hl:?,k4T~.Umn*&*WMh{S{VBwR!hCE c%pS' );
define( 'SECURE_AUTH_KEY',  '<30H:p,&&@5(V|.~rfnudF8so}&=r)Lvc9bAqROAl$= JWP*HmnlHFQD[X:#IL/e' );
define( 'LOGGED_IN_KEY',    '<l9KaPWVBL#2.vJcR=5$o_N/=Qo%&]GV.9d?4H/ P)/D7;:sLi=Ot%aS&-i4I$(r' );
define( 'NONCE_KEY',        '2YuBfE:F9]M{r0{]sE/,EUmbxh,,FUAZ.F(9h3QEQJ!f+H9&)2sH-%_gsFOO}hV*' );
define( 'AUTH_SALT',        'O+f0CEVe_EFP&j}KLSDouu^5s4}af+vLB7JaY7$,UbGg#/;lOYxZjv3yo(b6brMf' );
define( 'SECURE_AUTH_SALT', 'Y^l;Org~+]Jjx95olx*B+6`0@ $Ow*m0-A/1,[L}C}?)wjN{+%Nn[yZ!z0vrAkQH' );
define( 'LOGGED_IN_SALT',   'R@(^|Xl!H.-U>t^X2RhmnO.%dweV# LM9!U2sI;%{!Go-:$uahg`D,5Ki9yh{8tB' );
define( 'NONCE_SALT',       'qvqs8T(X_Ua>qTkYJ9_C3^rCoUvDNqq`kTZlY&,t`BQGd``_X ?s=k9BNEgtH4qA' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

