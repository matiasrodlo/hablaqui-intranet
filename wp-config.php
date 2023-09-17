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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'meyzjcmc_inhablaqui' );

/** MySQL database username */
define( 'DB_USER', 'meyzjcmc_uinhablaqui' );

/** MySQL database password */
define( 'DB_PASSWORD', 'com2020hablaqui' );

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
define( 'AUTH_KEY',         ';zC4mq[yINoD9q~10ezBR?.+;.hk)1Ydf_m5`z `AnUl_Uaa~{N_tCE+fH:dLsTb' );
define( 'SECURE_AUTH_KEY',  'NF,D6];T@ lQXu&M__0 K*Dw6gA#|&kdJ&QzorLf<?c?<q8I0wb2y+>?r1J/b=lf' );
define( 'LOGGED_IN_KEY',    'hNaX_QYKH @ iIDqCgj5t<)6p^xs6wuGS(udwE%cmfEy6~;k[ 5I[Jnu+QSgQU[n' );
define( 'NONCE_KEY',        's`rUm/!h9n$)5O;XRz?hX09%$Q?Ugl |2M6M~k-|47J>g7-Ey= ORe;qJns3pnkz' );
define( 'AUTH_SALT',        '.1qA$U]l4bsY~E5`Ixn67!PbI.11{k3NsUbxD`xN# gNtzGeIbv8@/:-^Ke%?cpp' );
define( 'SECURE_AUTH_SALT', '?Y+~Cx/6:)j8R[ud[gcm!?}I+xdO~QlfY^HW/`E!m%b(o{1M#iX?>,rx <`6BDgC' );
define( 'LOGGED_IN_SALT',   '2_i&^?QIKaKjo(9NAiaR|Y0A>EDU#D~93q3@>6^9,O!?ae]<b][;CoY[N6>:)5%z' );
define( 'NONCE_SALT',       'ViN*oV6EG=SA:s8_cgwH/`ECwaBRFWS?XNH$SB{=xvH1nr3gqSgY/uV)W0iPrJiN' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
