FROM	debian:buster

ENV		DEBIAN_FRONTEND=noninteractive

USER	root

RUN apt-get update && apt-get upgrade && \
    apt-get install apt-utils lsb-release gnupg wget vim php-mysql -y && \
    echo "mysql-apt-config mysql-apt-config/select-server select mysql-5.7" | debconf-set-selections && \
    wget http://repo.mysql.com/mysql-apt-config_0.8.14-1_all.deb && \
    dpkg -i mysql-apt-config_0.8.14-1_all.deb && \
    apt-get update && \
    rm -rf mysql-apt-config_0.8.14-1_all.deb

RUN apt-get install -y mysql-server &&\
    apt-get -y install nginx php7.3-fpm php7.3-gd php7.3-mysql php7.3-curl php7.3-imap php7.3-mbstring php7.3-xml

COPY ./srcs/script.sh  /tmp
COPY ./srcs/nginx-selfsigned.key  /etc/ssl
COPY ./srcs/nginx-selfsigned.crt  /etc/ssl
COPY srcs/wordpress /var/www/html/wordpress/
COPY srcs/default /etc/nginx/sites-available/default
COPY srcs/phpMyAdmin /var/www/html/phpMyAdmin/
COPY srcs/yhebbat.sql /yhebbat.sql
RUN mkdir /var/www/html/phpMyAdmin/tmp
RUN chmod 777 /var/www/html/phpMyAdmin/tmp

#COPY srcs/yhebbat.sql /var/www/html/phpMyAdmin/yhebbat.sql

RUN chmod 777 /tmp/script.sh

EXPOSE	80 443

ENTRYPOINT 	["bash","/tmp/script.sh"]