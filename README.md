Safari Push Notification Server
===============================

Reference Server for pushing Safari Notifications via Apple Push Notification Service
For use with Safari Push Plugin for Wordpress (https://github.com/surrealroad/wp-safari-push)

Requirements:
SSL-based server, PHP, Apple developer account

Usage:
 - Upload all files, and be sure to include both your Certificate.p12 and Website_Push_ID_Production_Certificate.pem from Apple.
 - Create a mysql database as per push.sql
 - Edit config-sample.php and save it as config.php
 - Replace the images in pushPackage.raw/icon.iconset/

For more information, refer to Apple's documentation at https://developer.apple.com/notifications/safari-push-notifications/

Based on Safari-Push-Notifications by Connor LaCombe (https://github.com/connorlacombe/Safari-Push-Notifications)