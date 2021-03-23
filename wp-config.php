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
define( 'DB_NAME', 'blogcms' );

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
define( 'AUTH_KEY',         'G2V&QMB}dkgFG?I]Qu$T:a7tO@m|<Pl:hJEoce1&tio|i5&M[`bsJor.SyIVfGA!' );
define( 'SECURE_AUTH_KEY',  'wLx4GZZ_2,1W05<+mF$AaEs-R&wiXCfXkp Y3${XFUdclU;XIex++36S:~j>L:fe' );
define( 'LOGGED_IN_KEY',    '^V[KRb&fXzf+@vx8BrDj4_(*];(z.&eh$+P>j9~Nyl3hf;@PcUR]]LV>=,]g]b?a' );
define( 'NONCE_KEY',        '*mT[zlxN@X:!{id`nH.ZVXVct}.f>SNQc]M>CD&>9oA[*U9y-NQd^JTqztfSNKB4' );
define( 'AUTH_SALT',        'McruLlR=_8oYn*QM^]SJ=1>|&{ :2qa;W2rt:]gcjtLZOM22P{6SFq;W.mSf8sCZ' );
define( 'SECURE_AUTH_SALT', 'Y]xDNSRKKd|t;zfj3~Hf|W,v`CiP/GN4~Z9qdDN(Tj; </ 6>*giv#00%w` =6Jg' );
define( 'LOGGED_IN_SALT',   ';eOfJBuUWO:Gs58c/<-aJwUJ(rw(D=+eZC;wE19G$7&2Qtl|l3H,OL7jp(tyBLzC' );
define( 'NONCE_SALT',       '67&~{jjz&zy~]gionz^7if,x&I*3sC%`@8Uh#E+-y>2pL X!DCz&b2<2V51}49~=' );

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
