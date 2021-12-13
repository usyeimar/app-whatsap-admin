<?php

/**
 * Configuration for: URL
 * Here we auto-detect your applications URL and the potential sub-folder. Works perfectly on most servers and in local
 * development environments (like WAMP, MAMP, etc.). Don't touch this unless you know what you do.
 *
 * URL_PUBLIC_FOLDER:
 * The folder that is visible to public, users will only have access to that folder so nobody can have a look into
 * "/application" or other folder inside your application or call any other .php file than index.php inside "/public".
 *
 * URL_PROTOCOL:
 * The protocol. Don't change unless you know exactly what you do. This defines the protocol part of the URL, in older
 * versions of MINI it was 'http://' for normal HTTP and 'https://' if you have a HTTPS site for sure. Now the
 * protocol-independent '//' is used, which auto-recognized the protocol.
 *
 * URL_DOMAIN:
 * The domain. Don't change unless you know exactly what you do.
 * If your project runs with http and https, change to '//'
 *
 * URL_SUB_FOLDER:
 * The sub-folder. Leave it like it is, even if you don't use a sub-folder (then this will be just "/").
 *
 * URL:
 * The final, auto-detected URL (build via the segments above). If you don't want to use auto-detection,
 * then replace this line with full URL (and sub-folder) and a trailing slash.
 */
define('URL_PUBLIC_FOLDER', 'Public');
define('URL_PROTOCOL', '//');
define('URL_DOMAIN', $_SERVER['HTTP_HOST']);
define('URL_SUB_FOLDER', str_replace(URL_PUBLIC_FOLDER, '', dirname($_SERVER['SCRIPT_NAME'])));
define('BASE_URL', URL_PROTOCOL . URL_DOMAIN . URL_SUB_FOLDER);

/**
 * Configuracion for: HOST
 * 
 * DB:
 * 
 * USER:
 * 
 * PASSWORD:
 * 
 * 
 */

define('HOST', 'localhost');
define('DB', 'db_whatsapp');
define('USER', 'pma');
define('PASSWORD', 'Seguros2022.');
define('CHARSET', 'utf8mb4');

define('LIBS', 'Libraries/');
define('VIEWS', 'Views/');


/**
 * Configuracion for Email
 * 
 * NOMBRE_REMITENTE
 * 
 * EMAIL_REMITENTE
 */

define('EMAIL_REMITENTE', 'selectinsurance210@gmail.com');
define('NOMBRE_REMITENTE', 'YEIMAR LEMUS ROMAÑA');

const SPD = ".";
const SPM = ",";
