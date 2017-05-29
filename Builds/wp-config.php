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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'newpassword');

/** MySQL hostname */
define('DB_HOST', 'centos-master');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'D.8bGacXV3Z&rCgDC8F6KCcyzjQ@Y1qRhxhUJI67#Rn_Dj-*kru$09y1~#_Jy2-!');
define('SECURE_AUTH_KEY',  'v-o3p8@q+yqH}Bh;K%=FSi!YX|0I#2^~j A =G3Zri2>=@sRZvmP-uvZL%oQJ<jL');
define('LOGGED_IN_KEY',    'QT`]/k?<hz`<VY8YAyT>3-b^5EAc s-R8w<Nudey[ETqD wUiJKcCC#-x-9<+0TJ');
define('NONCE_KEY',        'dD|+m6X+->K{ ^l])pZMe1++w<gVk#HhSjdk44i;DT<0h#?)L(C~C9l9(:XGuCO&');
define('AUTH_SALT',        'T#$&[]oz@!FoTe]10+.m?+~@-Vj5N`qZ&j`uM8smrY,]hTiC0t#{[[K$MQ:1qA|G');
define('SECURE_AUTH_SALT', '%Y7;QA/3iF3gwb~F<_,YSalQA7+TI73LrbCCx2D,cGrFXHSaZQ~!m51iJMPx+DS_');
define('LOGGED_IN_SALT',   'xSue96XhS;Lw%vp81hmtR)%>?cmj{<ShsF?Ye8bEPyU6#OT6_}I/!|[$<?z;_q(Y');
define('NONCE_SALT',       '3IT<jupjk+X/c9tUSI1_{9Q[?ANzcF +$|Oq ?rMtTrlmH>PGwN=kML|v-of+B-(');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
        define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
