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

Generating the .pem file:
During the push registration process you should receive two files, the `.p12` and `website_aps_production.cer` file. Apple calls this last one a "Website Push ID Production Certificate".
The p12 file is used to create a push package (to request the user to accept notifications from your site).
The cer file is used to actually send out push notifications by the server (to establish communication with APNS), but it seems it must be converted into a `.pem` file first, which the official documentation doesn't mention.

To perform this conversion, use the command `openssl x509 -in website_aps_production.cer -inform der -out apns-cert.pem -nodes -clcerts` in Terminal.

You can then test that you can connect to APNS using this file with the command `openssl s_client -connect gateway.push.apple.com:2195 -CAfile apns-cert.pem`

Where to get more information:
 - Apple's documentation: https://developer.apple.com/notifications/safari-push-notifications/
 - Certificate creation: http://www.raywenderlich.com/32960/apple-push-notification-services-in-ios-6-tutorial-part-1

Based on Safari-Push-Notifications by Connor LaCombe (https://github.com/connorlacombe/Safari-Push-Notifications)