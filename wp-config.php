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
define( 'DB_NAME', 'nancyprints' );

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
define( 'AUTH_KEY',         '`K@;wm$NWr2*|cCFp^xP~G5GSfFtzm+=<oS`|0|N,<{DcrmZIRlJr(0^1; ;S7Ik' );
define( 'SECURE_AUTH_KEY',  'f&+l:EgFp:Crosc`7K5:>ivD<knj5Ik1+|%P+kn.{6K6zNE 4(ZHRtQ+ewC+H4Yp' );
define( 'LOGGED_IN_KEY',    '-BaG4UxL*)bZU^4iSpC^Fjyc4pBq|V5a*$D8O!;3iOM|/j z[6EU7#fLJf8kb-ay' );
define( 'NONCE_KEY',        '2,Ff*KyQ3kce/#6-$AiHU#p,!9fOscC3<P&=oIqW|%[K)4HluG2D?Yth_r:f-;Nc' );
define( 'AUTH_SALT',        'Qi^Pmf:{/p$b.`xw{bm8gu#qTvlT.#u[m00!r{x!l7MQ*{dz{t<(F)6gMuLqz{IC' );
define( 'SECURE_AUTH_SALT', ',)K&Fp(8tm[Sn;xQxKEA-IuP4~[bvK2gOxU,!bw%~*8dSf=Oz_25WgT9u/XTJ/a,' );
define( 'LOGGED_IN_SALT',   ' 7/ExA1y#;>u4;?F>Lxao~CKg(T>|^n*NOl8.CN(+oa#-;a1Z|N}_]3=0w9Quf5K' );
define( 'NONCE_SALT',       '8?h2Xw}+{0QcSLofdroz,e$TN;wyR_Mgj7g5)UhHC4E]o|qWF8%JixlSnO.lHrh^' );

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
