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
define( 'DB_PASSWORD', 'Nana.SQL' );

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
define( 'AUTH_KEY',         'PdV8F+)ZJypBYXh%<1t-`742HV 3[1zK (D1&>e7t0%lWou=}56ky#w@v5)rkaJ*' );
define( 'SECURE_AUTH_KEY',  'kM7<4]A(F=)GaAaa`d]g>2W;T&wRC4@Df;${ f:7.Q`o.z;9muTkg3h2P0Qx5}0X' );
define( 'LOGGED_IN_KEY',    '7HFGE<8|Y8%Uk` )4x4+4$Sr){EbiYnpvKHH##%B8(hZXXk6dh`q0yr>-6Lc494.' );
define( 'NONCE_KEY',        '^5rl H&DF<C1T/13q9X8?}]h1_NqK)yuW%=Bw&P^0gYfD2SMFG44DBWV(mJjm ?{' );
define( 'AUTH_SALT',        'VqdVi/v-=6c-ab5w?av8NGdkQ&yxo.:=%4A[5eo>{-BFH/[#Ha3TY}@0ZU{00I$N' );
define( 'SECURE_AUTH_SALT', '<(e*OTh<?:B<!`[gZf$lhi`W,~ga8,YN:IYiYyxT4(P)iR:QhZubtY0rAvh}#U9v' );
define( 'LOGGED_IN_SALT',   '0)@F9nx6Z~.Zy8o$VZoxzq(MX<5rcw,.@.`9(vUkVds#CSo6i=V}4yN5XA-iGk.N' );
define( 'NONCE_SALT',       'd2(LY^^8we(jG<NN0Z CRM>S#W.jG) J!:y#R;cFLNMgz@KZnfS0s9|/]t4]4C.A' );

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
