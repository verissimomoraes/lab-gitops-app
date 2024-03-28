sh-4.4$ cat wp-config.php 
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
define( 'DB_NAME', '$WORDPRESS_DB_NAME');

/** MySQL database username */
define( 'DB_USER', '$WORDPRESS_DB_USER');

/** MySQL database password */
define( 'DB_PASSWORD', '$WORDPRESS_DB_PASSWORD');

/** MySQL hostname */
define( 'DB_HOST', '$WORDPRESS_DB_HOST');

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'a77acdafcd8cbcd359abc65fbc550c2d09374ecc');
define( 'SECURE_AUTH_KEY',  '0b4f318c253550b18316f7ed73df11df40c25754');
define( 'LOGGED_IN_KEY',    '879b6274bfdc2c63eea6a5c5b880e8ea366cb8ce');
define( 'NONCE_KEY',        'fba86d212570c9d281d9d995d23476f98c83f05b');
define( 'AUTH_SALT',        'b12a767374a32e1a1844989622268c9eea5c3139');
define( 'SECURE_AUTH_SALT', '698f4cc1f439e2f6cb927ec06e5078bb9e9d0ab1');
define( 'LOGGED_IN_SALT',   '0802a7c18724418fc9c5edb8977baf13c4009c92');
define( 'NONCE_SALT',       '9c8973e20beab2b3f73a406c8bbdbe77f7c58d64');

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

// If we're behind a proxy server and using HTTPS, we need to alert WordPress of that fact
// see also http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
        $_SERVER['HTTPS'] = 'on';
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
        define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';