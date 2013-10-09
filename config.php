<?php

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for storing device ids */
define('DB_NAME', 'pushservice');

/** MySQL database username */
define('DB_USER', 'srcontent');

/** MySQL database password */
define('DB_PASSWORD', 'vault13');

/** MySQL hostname */
define('DB_HOST', '176.58.123.167');

// ** Push server site settings ** //
/* Web Service Base URL */
define('WEBSERVICE_URL', 'https://push.ctrlcmdesc.com');

/* Website Push ID unique identifier */
define('WEBSITE_UID', 'web.com.controlcommandescape');

/* Website Name */
define('WEBSITE_NAME', 'Control Command Escape');

/* Allowed Domains, must be comma-seperated and quoted */
define('ALLOWED_DOMAINS', '"http://controlcommandescape.com", "http://www.controlcommandescape.com", "https://ctrlcmdesc.com", "http://ctrlcmdesc.com", "https://push.ctrlcmdesc.com", "http://push.ctrlcmdesc.com"');

/* URL string format for links */
define('URL_FORMAT', 'http://www.controlcommandescape.com/%@');


// ** Certificate settings - certificates provided by Apple ** //
define('CERTIFICATE_PATH', './ControlCommandEscapeCertificate.p12');     // Change this to the path where your certificate is located
define('CERTIFICATE_PASSWORD', 'warehouse1'); // Change this to the certificate's import password
define('PRODUCTION_CERTIFICATE_PATH', './apns-cert.pem'); // Change this to the path to your Website Push ID Production Certificate


// ** Authorisation code for requesting push notifications to be sent ** //
define('AUTHORISATION_CODE', 'kiv6mia4kna7frurp3is3o');


// ** APNS Settings, probably don't need to be changed ** //
define('APNS_HOST', 'gateway.push.apple.com');
define('APNS_PORT', 2195);
