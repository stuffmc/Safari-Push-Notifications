Safari Push Notification Server
===============================

Reference Server for pushing Safari Notifications via Apple Push Notification Service
For use with Safari Push Plugin for Wordpress (https://github.com/surrealroad/wp-safari-push)

Requirements:
SSL-based server, PHP, Apple developer account

Usage:
 - Register your site with Apple (refer to https://developer.apple.com/library/mac/documentation/NetworkingInternet/Conceptual/NotificationProgrammingGuideForWebsites/PushNotifications/PushNotifications.html#//apple_ref/doc/uid/TP40013225-CH3-SW1 )
 - Upload all files to the root (eg. http://push.myserver.com/), and be sure to include both your Certificate.p12 and Website_Push_ID_Production_Certificate.pem from Apple.
 - Create a mysql database as per push.sql
 - Edit config-sample.php and save it as config.php
 - Replace the images in pushPackage.raw/icon.iconset/
 
Common issues:
 - You must be using an SSL (HTTPS) server
 - Requests must be mapped to /v1/request (for example https://push.yoursite.com/v1/pushPackages must be a valid URL) - the included .htaccess file should do this for you if you upload the files to the server root
 - You will probably need to specify domains with and without the "www." part in the config file (e.g. define('ALLOWED_DOMAINS', '"http://example.com", "http://www.example.com"'); )

For more information, refer to Apple's documentation at https://developer.apple.com/notifications/safari-push-notifications/

Based on Safari-Push-Notifications by Connor LaCombe (https://github.com/connorlacombe/Safari-Push-Notifications)