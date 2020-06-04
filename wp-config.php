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
define( 'DB_NAME', 'site_db' );

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
define( 'AUTH_KEY',         '>QG&K_{PV^gxu7|Mn](Lh%3Gay7%j]2_AE,C2XHkv%:d|J~uhN^r?.Um>TfDiiTs' );
define( 'SECURE_AUTH_KEY',  '|>R;bu./T58${q#v0rg@P&~g=05duV}-Amf!eZon=FWvM9aIy!Q4Kn(7HuSg;OaF' );
define( 'LOGGED_IN_KEY',    'c?3un&W~[7}jt A1DSZdu&s&U}p.0YZ48VYC`mz`i1?d3u|@nNK!B%uUb_zjoI<0' );
define( 'NONCE_KEY',        'DhWOm:{W#;?+kOd P*l!#Ky#}ScbROm~qFqALG7y~]uer(RG,z+R_.XVUE|YxRJC' );
define( 'AUTH_SALT',        '6|%ld<{}+p1FG.tu13VQnYft,Am,vbg<KXysQ5.3_#ew+[D-}xW]P31a%u&Vzow.' );
define( 'SECURE_AUTH_SALT', 'P?(h9HjUgXic7i][jH3SbIX*FPn~4(wPpXh/p2DW!! ,Az)PS(=LIl)FNf4CtRvM' );
define( 'LOGGED_IN_SALT',   '-@ }98##Er2a/xQd%QhLWUJWfRmYs-/&l@udDqf9TN:$,`k*Ru}EnRrpYc{eNWz_' );
define( 'NONCE_SALT',       '7aWP^GZQQ>S@{dgiDuw~<H.ejAEqXmo$G)HUTGiEakuPGs>Z:]7`(DFA7:G*Chw0' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_site_db';

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
