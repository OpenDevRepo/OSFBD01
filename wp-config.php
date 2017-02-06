<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'smartwm_osfbd');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'smartwm_cricardo');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '870921selam');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '>,|+;26DT85[EXME3@cxq[PSXPBZaSfJwmPD7yL-]1PUBg15r[G=rK]Vo!Z={doN');
define('SECURE_AUTH_KEY', 'e42:1OvdBc=(4YeEFq .Hk<Vh;:rx-PDbbRNc7y1?R4iHTgxLe6/)dbfev!^BiSn');
define('LOGGED_IN_KEY', '~PehXboR  ~5b#z~i|K!gz[suUyRuM%Kc)m<1e8J0_emI}i$sTEQGgy9p)<zn00L');
define('NONCE_KEY', '-Av<t6pzHJ@P=z{3E$%^=[^a7HvtStdVDX^^ ^oe#Lk$lW)^ _SSKtu^9#^!!:_}');
define('AUTH_SALT', 'T(C$%QMdB91`XJ- 5Y~SA]h^CI^L,{HYwJ)2XU80yw8D6[@K7it>E7(0a0<T/}A7');
define('SECURE_AUTH_SALT', '1in>vtYE+u0rH;?AV=XDtiI^UO#F>rm5eg29Yt}2rP|33O0ey>)Et~hSX<}k7q u');
define('LOGGED_IN_SALT', ' ifROUvjPV3nkqHR2Z=FUkh.Dg(evxML*2c(qnUvr,Ow>1f5VlKk.@ Nwup8|`0O');
define('NONCE_SALT', '[~2vezxK?:]%Z{I-z`Y11wPAB$f&K0u3a??n+}QC@b:7y#sz2sS)PL}a8=Xrp^cL');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_osfbd';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

