<?php
/**
 * Production configuration template for WordPress
 * Copy this file to wp-config.php and update the database settings
 */

// ** MySQL settings - Update these for production ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_u66do' );

/** MySQL database username */
define( 'DB_USER', 'your_db_user' );

/** MySQL database password */
define( 'DB_PASSWORD', 'your_db_password' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 * Generate new keys at: https://api.wordpress.org/secret-key/1.1/salt/
 */
define('AUTH_KEY', '%|zhV31p%04:b9x;#g]MT9699#64#DUD*7473n_01|)3aP%73&1FMU4y+wl*91+i');
define('SECURE_AUTH_KEY', 'Q4Uo||4&K_4BSQaRHFs3@|#F87g2bBFI125j-_/_&Mi]*2#nGqBMjWW0]5@z[uT4');
define('LOGGED_IN_KEY', '@:0U~x-fw-@S7N(3GRh@I570!jv30KE)2ScN&1|f4Hp2-05w]8W-zDk2deuuw%xw');
define('NONCE_KEY', '1~VNyy!s326MR+d4eq;+67~z+9H50h2~W_:)c:gUN+&U8yi)8in-)V[AIbA]/Rdn');
define('AUTH_SALT', 'tas2[;41yewW8kF!P1&cQm1+979n2N2!n-stR!6Hm4NWS)ySw[78y39mAPeEK)42');
define('SECURE_AUTH_SALT', '@djTQA#[@(9y4*YoJ!7|5P7oUQE;[lZOKCgSx_m&)f6ISt[+4RD9/jz0G+1W8EY7');
define('LOGGED_IN_SALT', '&397z|%0H67xv2J0~NLii82[BCv|zlp1rH-y7DMgR7qg3Ma*1CW-2p#*P@fP2Dqh');
define('NONCE_SALT', ')3W@D/wS46#4o414M][0*x#R(/Xt)MqmW9R-S4u7eTG!94s/11B9pUCp!1dDs&S3');

/**
 * WordPress Database Table prefix.
 */
$table_prefix = 'VVDBI_';

define('WP_ALLOW_MULTISITE', true);

// Production settings
define('WP_HOME', 'https://post.xn--42cf1cjb3azgb8e6ab5d9ad8o5a1il1h.com');
define('WP_SITEURL', 'https://post.xn--42cf1cjb3azgb8e6ab5d9ad8o5a1il1h.com');

// Disable debug mode for production
define('WP_DEBUG', false);
define('WP_DEBUG_LOG', false);
define('WP_DEBUG_DISPLAY', false);

// Disable file editing in admin for security
define('DISALLOW_FILE_EDIT', true);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';