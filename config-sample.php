<?php
/*
 *	Configuration file for service. Save this as config.php
 *	You'll also need to update icon files in pushPackage.raw
*/

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for storing device ids */
define('DB_NAME', 'database_name_here');

/** MySQL database username */
define('DB_USER', 'username_here');

/** MySQL database password */
define('DB_PASSWORD', 'password_here');

/** MySQL hostname */
define('DB_HOST', 'localhost');

// ** Push server site settings ** //
/* Web Service Base URL */
define('WEBSERVICE_URL', 'https://example.com');

/* Website Push ID unique identifier */
define('WEBSITE_UID', 'web.com.example.domain');

/* Website Name */
define('WEBSITE_NAME', 'My Push Server');

/* Allowed Domains, must be comma-seperated and quoted */
define('ALLOWED_DOMAINS', '"http://example.com", "https://example.com"');

/* URL string format for links */
define('URL_FORMAT', 'http://example.com/%@');


// ** Certificate settings - certificates provided by Apple ** //
define('CERTIFICATE_PATH', './MyCertificate.p12');     // Change this to the path where your certificate is located
define('CERTIFICATE_PASSWORD', 'password_here'); // Change this to the certificate's import password
define('PRODUCTION_CERTIFICATE_PATH', './apns-cert.pem'); // Change this to the path to your Website Push ID Production Certificate


// ** Authorisation code for requesting push notifications to be sent ** //
define('AUTHORISATION_CODE', 'password_here');

// ** APNS Settings, probably don't need to be changed ** //
define('APNS_HOST', 'gateway.push.apple.com');
define('APNS_PORT', 2195);
