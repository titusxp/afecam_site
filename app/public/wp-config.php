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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'xkBUhymg1TI2I9RkRR40PO1Desi3aQNPdet9/Uv7C0TThnG262GWou+sMqiPO/J7EMz994h//KRr+CmRwhF64A==');
define('SECURE_AUTH_KEY',  'r0mXdichmPGnS31kSbGMFAAy2DogEYXfSIkdQCi97xAKnCGiT+DnrKh1Rks4dZw+uW01fc1HsdloDPBMNt/yVg==');
define('LOGGED_IN_KEY',    '4Vdpdmk39bzAhGkD0NclPR08b6kcbvKxrXzAYPVzH6yNrM0PV0wT6G5JKiWeE2VUfG6koDCf4zrfrLvJh0SMng==');
define('NONCE_KEY',        'whDVtyagcKF30qPw5mt0Hvhq8MfHMQTHl/aCbIk08Ezoj3HJacv8apPdGAYgKgwTOCaEtGOxRgWKQqGlY0glTQ==');
define('AUTH_SALT',        'dEMq1ZI0Ns3ev5T6OnjpvHXCtZdrPdhCbX0h2vgr5MShHKGt+GiWMIUxLZzyBXobF1RlW+9mML3US2egvBnI8w==');
define('SECURE_AUTH_SALT', '49UIidssjdCNUk1sNkuLhvmLTcrUk2F5KW084wsEZkD56mAyAwWLdDVVmvB2u8zG99cdlbfOpK91ZqoNdMc4JA==');
define('LOGGED_IN_SALT',   'ucLGQXBmpPrWzETQsDvApV4S8L+iER+gCfBST7lIctHdotjeI0e75cEdE2bPkdss2nvgHFp1W8VLEOLGXqh8Tw==');
define('NONCE_SALT',       'BpAJBlfCE5WqBSA24PYwLx4YhSF+D1vPw4oqkctQvFh3n9KBCLzKAgsiKHED5mIBWl8aZp415ZVqKiPXc+bpVQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
