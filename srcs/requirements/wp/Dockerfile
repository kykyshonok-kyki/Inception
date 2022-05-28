FROM debian:buster

MAINTAINER wgaunt <wgaunt@student.21-school.ru>

WORKDIR /var/www/html/

#install
RUN apt-get update
RUN apt-get -y install wget
RUN apt-get -y install php-fpm php-mysql

WORKDIR /root/

RUN wget https://raw.github.com/wp-cli/builds/gh-pages/phar/wp-cli.phar

#Wordpress
COPY ./conf/wp-config.php .
COPY ./wp_init.sh .
RUN chmod 755 wp_init.sh
RUN chmod 755 wp-config.php
RUN chmod 755 wp-cli.phar
RUN mv wp-cli.phar /usr/local/bin/wp

RUN sed -i "s/listen = \/run\/php\/php7.3-fpm.sock/listen = 9000/" "/etc/php/7.3/fpm/pool.d/www.conf"
RUN sed -i "s/;clear_env/clear_env/" "/etc/php/7.3/fpm/pool.d/www.conf"

EXPOSE 9000

CMD sh wp_init.sh && mkdir -p /var/run/php && /usr/sbin/php-fpm7.3 -F