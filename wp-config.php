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
define('DB_NAME', 'store');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'l8doWh$0}nF_3Ggz#]p Sd&5VfKgPi0gu[<[N1!DXed)E$Lbr8EvZVz6P>G<p9m1');
define('SECURE_AUTH_KEY',  'ickwu#&Sh<6IHm&~.yo%`;y)x PJ~khcflS(U9.mk~Z}prC2IlOt|a$y4BzV5Y3,');
define('LOGGED_IN_KEY',    'w2GCU,v}sUKtn1dF{vy:KjxI}5spX/^(d~KylP{4{xJkYwm:apGuOw{GktX<L&<]');
define('NONCE_KEY',        'l=K)7(q%fCato{Ge/9LSVdO9u1Fz#^wA|tEPilgL#RyO.If{|*FSJRzu:.P[olV$');
define('AUTH_SALT',        '5JMwy_Y5Y!~F7bqIf?AL<AnrN1{[nZmtt}}&Ay3+<AI 3]2wd&$zi~n;63:VXF)&');
define('SECURE_AUTH_SALT', '<;Dp%]4ST)6-i/TI[Hh-9poE4t:3v w3bi}5s,9{h oUpI[yGEVt>Tf[KPMrD`@C');
define('LOGGED_IN_SALT',   '[w+l&H~K!08Wxi.XvD=)<@vc[W^&,TAN<Hd6Q@yzIVFY8tDv^iQ4AIHu,}05UBBH');
define('NONCE_SALT',       'T]$L%3xzK;MJDz:%O=:n(n1o<DI[H#)MK&]eh+dcoG7%|_nQ-A(,Z|A.`Ra?^Fsy');

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
