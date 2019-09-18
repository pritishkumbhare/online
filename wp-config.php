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
define( 'DB_NAME', 'online_db' );

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
define( 'AUTH_KEY',         'Yut^L.M&WSK7*<Lrh;z0t!-8#`@5,QmJ_-Z0slir5a[vqS~}uf=4<d:.z9oxt2Lt' );
define( 'SECURE_AUTH_KEY',  '#Tx3=#C%W?Kui nLlOx`]A!1R>#=KIaB7o^w@+`Zz?1q2bErW4{Tw~_Kc(fZud4Q' );
define( 'LOGGED_IN_KEY',    '>9tY@zhZoH]elA+G`gP20X>bT[GrU= F5>P 4|D]{OJpJ:)aa](E 0-$z829Ko.E' );
define( 'NONCE_KEY',        'a1T)z|Q.:arh;[?`0M$izOV$S.],^ 8AMIE>5&0q@_x#|7 NJ.k|#]Q-/fj-wAN]' );
define( 'AUTH_SALT',        '/n:*g_s&_xpt3M$u*gx3[z@Adj([<84yZ:GeAHt/,+k]7kO)(icSfVkkXBE<~:a;' );
define( 'SECURE_AUTH_SALT', 'x:v84ho+$rRP.8LvBvcrNlmo{)I0{yc;J_ii[|mn3gvjL8LJqLu}}660K_*a|KwV' );
define( 'LOGGED_IN_SALT',   'p=BHL/dIrXOmU+;f<^I@;XdH[HVm,^GEu%:H%X#V<|2JCY{JF4N~sqW^--BOe-2t' );
define( 'NONCE_SALT',       'r@3TCi!P;$.}mrn__}gjK%:+6}+aN,y.I2qWk,2<ZY}HzT[9ta5)KpqPa^ &Bdk^' );

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
