<?php

// ** MySQL settings - You can get this info from your web host ** //

define( 'WP_CACHE', true );
define( 'WP_CACHE_KEY_SALT', 'wgaunt.42.fr' );
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', getenv('MYSQL_USER') );

/** MySQL database password */
define( 'DB_PASSWORD', getenv('MYSQL_PASSWORD') );

/** MySQL hostname */
define( 'DB_HOST', 'mariadb' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'Gc,dzts2z&0T_n+/|?T/8gipY *N4]rswBB`{hf^/h#E#oqQyU!d^bW?QIIImgzP');
define('SECURE_AUTH_KEY',  'F4+*s.DkGZ}NC:Y9EEVX]f+0d-DWe}y9W[wn2JD.@}MBI-vNE=o}zh#h5y7Gep{X');
define('LOGGED_IN_KEY',    'uLqueFK<AP`JP$~$M14YH5|~{61$fMaOj&>eHH|UVyzz|k`ox{<EqGUMmfS|R+QI');
define('NONCE_KEY',        '+dmnZH+D#R&i%*4~8=mb,9o?fl]Z(y(IMm>rmVpThD(l|!YA9(]zNQ&J]:s.|uP@');
define('AUTH_SALT',        '$BotK[uBg! dCu+b:J}%Cv#$~9/k,5*DS sgk$H7>8tv;=$C^1m)P-qn>(@|<|FB');
define('SECURE_AUTH_SALT', '2h*HxY@V_6>wf*2s}IO/+=6+,#FU_)f E,b`eUNJ4S~K,dh:Z<z`jXAw<r4:36~w');
define('LOGGED_IN_SALT',   '|9Oy~ oNo~Qp(Q[7m+jt{EIW{w.*,SqKT|pIFe/jX#VR5obj,l6.!km;9[P|+8iM');
define('NONCE_SALT',       't|9<8NgMVfn1(iHqI}os)yzq0FY]hL?P.fQ>CQ)2+=r1K;+JQ:qG[2Qo&QDpuUi(');

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
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', '/root/wp.log' );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );