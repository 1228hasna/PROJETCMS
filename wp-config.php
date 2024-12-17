<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'nWHvycf3)^q1`YS7*QxoD&g iZPXt`2#czf(N<,@%]-L;<Y;3qIbu:m#y<7^o;dG' );
define( 'SECURE_AUTH_KEY',  'NT8r!R+QPXr4_J8eqjA!FFvYHr4kH.^mFqV-hzhC%u#U,8Kn4>jze0kR1EDOBi2Y' );
define( 'LOGGED_IN_KEY',    'TbR[dKBaXhvD$v(u%|;w*?)r,gGTG1~apc[!O2]^Bl (lg2RI/jj4]6t9$u55O?m' );
define( 'NONCE_KEY',        'f{w*.uk_-a:XFji&|JWd{jJ5}uxc(t`BQS!MFm8BJt(>eD/1Xq><G1*~+_]d=5#Y' );
define( 'AUTH_SALT',        'rx)l9n3=khnDR,#Br0r3UkfCVaerxtWn/`5(tF mf.fR--YfQynkUnX]8Lt~1J(%' );
define( 'SECURE_AUTH_SALT', ']{50VXIqS&l$#oE5,=QmQ25$C+/c!<m^ smZXuBX8?HDd)YvkLFWv#p;.zds#]I8' );
define( 'LOGGED_IN_SALT',   'k&I.n1&>`FSKhU]`2uH:5 n}6.^w>$?eq<!|7MN@SxsrF6=.A**y4}j;SM[o/;~d' );
define( 'NONCE_SALT',       'pT@fkGOpV#SMbrH=@fx*LVt7OH8Dv8y(7o Q2ZL@q7V_#Mt{W5gitO.S%X&^/]x]' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
