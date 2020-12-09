#!/bin/sh

chown -R www-data:www-data /var/www/html/phpMyAdmin
chown -R mysql: /var/lib/mysql;
#mysql
service mysql start;

#mysql -uroot -e "CREATE DATABASE yhebbat;"
mysql -uroot -e "CREATE USER 'yhebbat'@'localhost' IDENTIFIED BY '1234';"
mysql -uroot -e "CREATE DATABASE yhebbat; use yhebbat; source /yhebbat.sql;"
mysql -uroot -e "GRANT ALL PRIVILEGES ON *.* TO 'yhebbat'@'localhost';"
mysql -uroot -e "FLUSH PRIVILEGES;"
mysql -u root < /var/www/html/phpMyAdmin/sql/create_tables.sql

#start services
service nginx start
service php7.3-fpm start

/bin/bash