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
define( 'DB_NAME', 'blog' );

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
define( 'AUTH_KEY',         'B*oTgK5)_MY70voK7Kb[hr@fKP{Z|Dl`lcQXfr^%WfRJ#v<@1Qc-`RBRdlwgEoG/' );
define( 'SECURE_AUTH_KEY',  'q8eNLC%`[QANm` ,{yLvz_h(3BsNni8RcFxqz?2gk/Urf68zxafebgNxG!}ej59V' );
define( 'LOGGED_IN_KEY',    'iWLwiw3f9MsR`%xO-+V$Jp0pohYYgB!9*sH}&E(qSIk2+TV(_l.|`)Fb]7=^6dfO' );
define( 'NONCE_KEY',        'VRFME8}LSzjh<p?#~lKZ1z/VI$K@2LLq,BShG^PJF?Y>J/jm1 R8n&6EcG} .?0>' );
define( 'AUTH_SALT',        ')c#%I.S ))64+8R3n^jeyO36@kC,MbH:&`[!rP0G4s6,;dkt2l Jgivc7Nme,*Fq' );
define( 'SECURE_AUTH_SALT', '0D{+m&wJ{/r,Y!FO_cG//v|s:Q](QoW@NSdZ] fy?L4}-zUj/ ( eZ(62vy:x~,M' );
define( 'LOGGED_IN_SALT',   'gRIjS}MuG{bk+NI$TQu/tFtx `oG12?kbZg?CBE(@grCagO@AP*S}}rU3$8=}Er ' );
define( 'NONCE_SALT',       'mR?+b>!S^p6v:[DcPWmi*B3z)}m#U;d;W{.wUm#x9FTdAT^](6M ;|{[]BpT.AWH' );

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
