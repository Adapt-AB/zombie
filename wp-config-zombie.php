<?php
// Load Composer's autoloader (if it exists)
if ( file_exists( __DIR__ . '/vendor/autoload.php' ) ) {
    require_once __DIR__ . '/vendor/autoload.php';
}

// Load environment variables from the .env file
if ( class_exists('Dotenv\Dotenv') ) {
    $dotenv = Dotenv\Dotenv::createImmutable( __DIR__ );
    $dotenv->load();
}

// Database settings using environment variables
define( 'DB_NAME', $_ENV['DB_NAME'] );
define( 'DB_USER', $_ENV['DB_USER'] );
define( 'DB_PASSWORD', $_ENV['DB_PASSWORD'] );
define( 'DB_HOST', $_ENV['DB_HOST'] );

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
define( 'AUTH_KEY',          '?<T&>TFJ(:vD5+n7wDUW2gRO[hF^jm:8?LT=kD8jV.9og/0qOj]-]Y2?mZ0Ay`_1' );
define( 'SECURE_AUTH_KEY',   'XiH$7N#d+4k4qLa3((%uVflo~c6r)zlJLpYTbFo9)?p9;?U7#1Vf{ON:?>:|A-?{' );
define( 'LOGGED_IN_KEY',     'z7I>BP5K2hG2NsaZ_Pt@rH[wiKZ<Ca@3,)gw3p@|i,eQpWq4H>$+N=th[  &K&Q{' );
define( 'NONCE_KEY',         'D>TOIb)CE0B#l@/8-],U!U;GP*?zx mtP=1F~O:t08I<a8/yCAE:VxJuikvz~XU2' );
define( 'AUTH_SALT',         ']7[ACmT`^SSc*EeP0a2Z.&q3ty2.{=e&<Im@E9rMoLl.,*t`oGH1TD=QBzji%>K@' );
define( 'SECURE_AUTH_SALT',  '=+GoK}NA%1COXulakFct=b{QAT(zu3oh_cP+fxY31Z!k5dj~lmpr!AqK-9q`tNQX' );
define( 'LOGGED_IN_SALT',    'h1*iw/H`Iy`+7Zt%LarIoKZ~DJI^{G?..q)mKK@<SyDaVGMAG9>ouvRubiHzu<;J' );
define( 'NONCE_SALT',        '_P=V_;XW:S1W?W2pOYPoM&[RY?OgjwJ)~kOJn>h8VmJcK ^np<q5hiBBq|8jox=@' );
define( 'WP_CACHE_KEY_SALT', 'j>R@k;{FL;,?;)(zE#omJ-4oV_]`ho3tF[?o,+aoGCz^k%3Eu]FAKLU]i;BnWn`D' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
