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

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME',  'wordpress');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'wordpress');

/** Nome do host do MySQL */
define('DB_HOST',  'db');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'e14c25f8c2c8c47103c46ce1cbb20f6031cb710d');
define( 'SECURE_AUTH_KEY',  '05d999ee7fea3f20671c3d9b03b1983135798594');
define( 'LOGGED_IN_KEY',    'afe98d76380eafb7e159d3b6e80cc0bd673e43db');
define( 'NONCE_KEY',        '849eb98c336de7a750c19faa638466dfd494c47e');
define( 'AUTH_SALT',        '10aed6276a7ad3f17528874196876d2c2bd9fcdb');
define( 'SECURE_AUTH_SALT', '847c5f8fa833b80e9ae9fafbe5c488b694527714');
define( 'LOGGED_IN_SALT',   '50f4e32778544ba410cc1972554980d263673bf4');
define( 'NONCE_SALT',       '5c8d610f735461df329bcbb4a361f4052dcea7a9');

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

// If we're behind a proxy server and using HTTPS, we need to alert Wordpress of that fact
// see also http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy
define('FORCE_SSL_ADMIN', getenv('APP_ENV') == 'dev' ? false : true);

if (strpos($_SERVER['HTTP_X_FORWARDED_PROTO'], 'https') !== false)
{  $_SERVER['HTTPS']='on'; }

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
