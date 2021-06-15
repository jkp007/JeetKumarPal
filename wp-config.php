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
define( 'DB_NAME', 'jeetkumarpal_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '+*@ac&Jk>5Xg#82b(!-Y8(pE.erK?Mmz) G[yn1.xRs9~Nk.5Rf#8@0H91}mb} (' );
define( 'SECURE_AUTH_KEY',  '`P,-.9s[<Hp@$YQu+v-eO~2yc8CF:pOUKp`NmRr#<9(+NHinur!wdw/JJ|Guth!8' );
define( 'LOGGED_IN_KEY',    '3p-d]d4O2TZHAp$egwkF1X|5s!9vl>irQnDH<MZBZ*YDk@`JQQCT=93ssWDC)xX3' );
define( 'NONCE_KEY',        '^f.>Ca-UoUUi</(sH@~GB~u`TC7 fxuDp61)AyCA1pCe*0ra^Hf#St^B[GSXx!QP' );
define( 'AUTH_SALT',        'M<*}^M[;K6KBAy;tK:s`d$K+iA2d;1w7dwoax}&%)Nqm2!_Gus8|:GN%k&Gjg.YO' );
define( 'SECURE_AUTH_SALT', '+uxz&CN,d]~UP(qZ.cSQ:d^KC_):!D!|h0%[iAO:1_H @nohGq f$;)A&bLHX;Sx' );
define( 'LOGGED_IN_SALT',   'rEL@@SyBDdYPqn@EjFtU7Jy%jMC&kW>V~Kqm:OdY~[D3H+5f}@gWs5P?7&M<H_D2' );
define( 'NONCE_SALT',       'b#PQA~xsH6u(}J}%RxGF<D~1M^q$U$.<_s,8?9La-i=iZNe>qeX/NB}3/hlOc9b]' );

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
