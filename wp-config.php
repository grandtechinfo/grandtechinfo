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
define( 'DB_NAME', '123456' );

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
define( 'AUTH_KEY',         '_p?NPC#cBO?o,Ig3s_-V%](`}FYm;Z2hP4(dHI:gSzwQ@$8M5~Z->KJ*_sm:[mg^' );
define( 'SECURE_AUTH_KEY',  'hnh2l:;Yjy]GUG~_(r8eMCrFeh}ZtV99??fNzY393MZEW?JejJ_KSHn;t#X~}SFQ' );
define( 'LOGGED_IN_KEY',    'ZqqBL/HKYXOT6%2_!yK0s2us;+^X%(qhYFqQ^ ]d;}wIu2ew5ur*ktWc?. p:a)P' );
define( 'NONCE_KEY',        'rp9)i)2yygc!<C^MWC,YiK9bs>x3GA@tmoZ+Fp2/f:AW!zU@[L$fZ(s#Sa|}tZnj' );
define( 'AUTH_SALT',        'ZjCWZ{Te {w<L|ZQeIyE~4U?mQWW]*!l>jQBmVvA53B&0DZsp`yQO-~P#-**%##C' );
define( 'SECURE_AUTH_SALT', 'jWO^@^7c^$dn!W4o4<T|eoFj[>Kgk6`Xek:wljl=.$$@-9_p}=`#p=Jh^U(@LJg{' );
define( 'LOGGED_IN_SALT',   '$@S1iD?L1UBe/;/MR{HJ1vrDY%395/8v**EX~luP3ImYnfqH-$fH?&CxzYbXz0<E' );
define( 'NONCE_SALT',       'aH)8%jA/ew_9{F:[~[$ieRHQt7RI-m*U8L5wxITa,~?q>A5%aRegoSfQ{8]0F yJ' );

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
