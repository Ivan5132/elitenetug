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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'elite' );

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
define( 'AUTH_KEY',         'NvGh:v2;wwG&M$njzPz%7RDzWbbG4#})%,(vANfHwKESj#!vk;?f*BBanglq2!LY' );
define( 'SECURE_AUTH_KEY',  '>+&D_o3.t[$P+Zvy%|PZ4bcKwF2v7-zS1,gY2Or(DeGw`&;V=IIu6-3K$af-?^lx' );
define( 'LOGGED_IN_KEY',    ',(|aT/<;G:467P?-BPD0;7G7#gKmjl<]w,48/?%~y0CJo>kK~||b:fhJVoZVUbi*' );
define( 'NONCE_KEY',        '@aH!eR#u2<X&(dkGvpK..?>~s}EhL3g6GQsPNL85(L:_lc8W-GVZ_[Ee,Mz4=%)u' );
define( 'AUTH_SALT',        '-<[nO|yib,2w1d=3{nN}1%bSS4ggOy:bvFIuA/KS{3odBuiO>RTTbONDh^SAgz&|' );
define( 'SECURE_AUTH_SALT', 'q?{7hv;bqZ:5sHSR[<iNk1!_JH|,^kOezMQki$P%`g jj9}4&~xfb>Vx(AqW#XH7' );
define( 'LOGGED_IN_SALT',   '@{4EXw4[ekC5Xd =hg4iX9HF;Mit&4nB`PtAeOP~8MRIG8*H<_;C#bI#=iF?,=-}' );
define( 'NONCE_SALT',       '/?WwKw7Y Zz9 >YlzV4WuEyMgqi$O=&a6cS8=w2hhTBd}UW>e3jw<+E|lOD1j$L5' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
